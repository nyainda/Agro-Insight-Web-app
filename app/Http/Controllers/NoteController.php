<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Animal;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class NoteController extends Controller
{



    public function storenote(Request $request, $animal_id)
    {
        // Validation rules for the form fields (you can customize these)
        $validator = Validator::make($request->all(), [
            'file' => 'nullable|file|max:2048',

        ]);


        $note = new Note();

        // Generate a UUID for the id field
        $note->id = Str::uuid();

        // Fill in the other note fields
        $note->fill($request->all());
        $note->animal_id = $animal_id;
        $note->user_id = auth()->user()->id;

        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $filePath = $uploadedFile->store('images'); // Save in the default storage location
            $note->file = $filePath;
        }
        $note->save();



        return redirect()->route('animals.shownote', ['animal_id' => $animal_id])
        ->with('success', 'note created successfully.');

    }


    public function shownote($animal_id)
    {
        try {
            // Fetch the authenticated user
            $user = auth()->user();

            // Fetch the animal and check if it exists
            $animal = Animal::find($animal_id);
            if (!$animal) {
                throw new AnimalNotFoundException();
            }

            // Check if the animal's status is 'sold'
            if ($animal->status === 'sold') {
                return redirect()->route('index')->with('error', 'This animal has already been sold, and you cannot add notes.');
            }

            // Fetch notes related to the specified animal, ordered by created_at in descending order and paginate them
            $notes = Note::where('animal_id', $animal_id)
                ->orderBy('created_at', 'desc')
                ->paginate(5);




            // Group notes by category in the controller
            $groupedNotes = $notes->groupBy('category');

            return view('animals.shownote', compact('animal', 'user', 'notes', 'groupedNotes'));
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the notes.');
        }
    }


    public function note($animal_id)
    {
        try {
            // Retrieve the animal by ID
            $animal = Animal::find($animal_id);
            $animal->user_id = auth()->user()->id;
            if (!$animal) {
                // Redirect to the home page with a "not found" flash message
                return Redirect::route('index')->with('error', 'Animal not found.');
            }

            return view('animals.note', ['animal' => $animal]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the note form.');
        }
    }

public function editnote($animal_id, $note_id)
{
    $animal = Animal::find($animal_id);
    try {
        $note = Note::findOrFail($note_id);
    } catch (\Exception $e) {
        // Handle the exception here, for example, redirect to an error page
        return redirect()->route('index')->with('error', 'note not found.');
    }


    return view('animals.noteedit', ['animal' => $animal, 'note' => $note]);
}

   // take care of the updating the animal treatment
public function updatenote(Request $request, $animal_id, $note_id)
{
    $validator = Validator::make($request->all(), [

        // Validation rules for treatment update fields
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $note = Note::findOrFail($note_id);
    $note->update($request->all());

    return redirect()->route('animals.shownote', ['animal_id' => $animal_id])
        ->with('success', 'note updated successfully.');
}
    // delete the animal treatment
public function deletenote($animal_id, $note_id)
{
    $note = Note::findOrFail($note_id);
    $note->delete();

    return redirect()->route('animals.shownote', ['animal_id' => $animal_id])
        ->with('success', 'note deleted successfully.');
}

public function showAllnote()
{
   //try {

        $user = auth()->user();
        $note = Note::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        // Create an associative array to group treatments by animal ID
        $animalnote = [];
        foreach ($notes as $note) {
            $animalId = $note->animal_id;
            if (!isset($animalnote[$animalId])) {
                $animalnote[$animalId] = [];
            }
            $animalnote[$animalId][] = $note;
        }

        // Passing the data to the view
        return view('animals.showallnote', compact('animals', 'animalnote','user','note'));

    //} catch (\Exception $e) {
         //Handle the error here and return an error view
       // return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
   // }
}


}
