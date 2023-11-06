<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Animal;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class TaskController extends Controller
{
    public function storetask(Request $request, $animal_id)
    {
        // Validation rules for the form fields (you can customize these)
        $validator = Validator::make($request->all(), [

        ]);


        $task = new Task();

        // Generate a UUID for the id field
        $task->id = Str::uuid();

        // Fill in the other task fields
        $task->fill($request->all());
        $task->animal_id = $animal_id;
        $task->user_id = auth()->user()->id;
        $task->save();

        return redirect()->route('animals.showtask', ['animal_id' => $animal_id])
        ->with('success', 'task created successfully.');

    }


    public function showtask($animal_id)
    {
        try {

            $user = auth()->user();
            $animal = Animal::find($animal_id);
            $tasks = Task::where('user_id', $user->id)->get();
            $tasks = Task::where('animal_id', $animal_id)
                 ->orderBy('created_at', 'desc') // Order by date in descending order (latest first)
                 ->paginate(5);
            // Check if the animal's status is 'sold'
            if ($animal->status === 'sold') {
                return redirect()->route('index')->with('error', 'This animal has already been sold and cannot add Task/edit.');
            }

            return view('animals.showtask', ['animal' => $animal, 'tasks' => $tasks,'user'=>$user]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', ' Holly smoke!!..An error occurred while displaying the tasks.');
        }
    }



    public function task($animal_id)
    {
        try {
            // Retrieve the animal by ID
            $animal = Animal::find($animal_id);
            $animal->user_id = auth()->user()->id;
            if (!$animal) {
                // Redirect to the home page with a "not found" flash message
                return Redirect::route('index')->with('error', 'Animal not found.');
            }

            return view('animals.task', ['animal' => $animal]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the task form.');
        }
    }

public function edittask($animal_id, $task_id)
{
    $animal = Animal::find($animal_id);
    try {
        $task = Task::findOrFail($task_id);
    } catch (\Exception $e) {
        // Handle the exception here, for example, redirect to an error page
        return redirect()->route('index')->with('error', 'task not found.');
    }


    return view('animals.taskedit', ['animal' => $animal, 'task' => $task]);
}

   // take care of the updating the animal treatment
public function updatetask(Request $request, $animal_id, $task_id)
{
    $validator = Validator::make($request->all(), [

        // Validation rules for treatment update fields
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $task = Task::findOrFail($task_id);
    $task->update($request->all());

    return redirect()->route('animals.showtask', ['animal_id' => $animal_id])
        ->with('success', 'task updated successfully.');
}
    // delete the animal treatment
public function deletetask($animal_id, $task_id)
{
    $task = Task::findOrFail($task_id);
    $task->delete();

    return redirect()->route('animals.showtask', ['animal_id' => $animal_id])
        ->with('success', 'task deleted successfully.');
}
}
