<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YieldRecord;
use App\Models\Animal;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class YieldRecordController extends Controller
{
    public function storeyieldrecord(Request $request, $animal_id)
    {
        // Validation rules for the form fields (you can customize these)
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'quantity' => 'required|numeric',
            'trace_number' => 'required|unique:yield_records',
            'date' => 'required|date',
            'quality' => 'required',
            'grade' => 'required',
            'price' => 'required|numeric',
            'yield_method' => 'required',
            'yield_description' => 'nullable',
            'yield_time' => 'required|date_format:H:i',
        ]);

        //$request->merge(['trace_number' => Str::random(8)]);
        $yieldrecord = new YieldRecord();
        //$yieldrecord->str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        // Generate a UUID for the id field
        $yieldrecord->id = Str::uuid();

        // Fill in the other yieldrecord fields
        $yieldrecord->fill($request->all());
        $yieldrecord->animal_id = $animal_id;
        $yieldrecord->user_id = auth()->user()->id;
        $yieldrecord->save();

        return redirect()->route('animals.showyieldrecord', ['animal_id' => $animal_id])
        ->with('success', 'yieldrecord created successfully.');

    }


    public function showyieldrecord($animal_id)
{
    try{
    $user = auth()->user();
    $animal = Animal::find($animal_id);
    $yieldrecord = YieldRecord::where('user_id', $user->id)->get();
    if (!$animal) {
        return redirect()->route('index')->with('error', 'Animal not found.');
    }

    if ($animal->status === 'sold') {
        return redirect()->route('index')->with('error', 'This animal has already been sold and cannot add yield record/edit.');
    }

    // Retrieve all yield records for the animal
    $yieldrecords = YieldRecord::where('animal_id', $animal_id)->orderBy('created_at', 'desc')->get();

    // Group the yield records by product
    $groupedYieldRecords = $yieldrecords->groupBy('product');

    // Calculate total yield and average yield for each product
    $productStatistics = [];

    foreach ($groupedYieldRecords as $product => $records) {
        $totalYield = $records->sum('quantity');
        $averageYield = $records->isEmpty() ? 0 : $totalYield / $records->count();

        $productStatistics[] = [
            'product' => $product,
            'totalYield' => $totalYield,
            'averageYield' => $averageYield,
            'records' => $records,
        ];
    }

    return view('animals.showyieldrecord', ['animal' => $animal, 'productStatistics' => $productStatistics, 'yieldrecords' => $yieldrecords,'user'=>$user]);
} catch (\Exception $e) {
    return redirect()->route('index')->with('error', 'An error occurred while displaying the yieldrecord form.');
}
}






    public function yieldrecord($animal_id)
    {
        try {
            $user = auth()->user();
            // Retrieve the animal by ID
            $animal = Animal::find($animal_id);
            $animal->user_id = auth()->user()->id;

            if (!$animal) {
                // Redirect to the home page with a "not found" flash message
                return Redirect::route('index')->with('error', 'Animal not found.');
            }

            return view('animals.yieldrecord', ['animal' => $animal]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the yieldrecord form.');
        }
    }

public function edityieldrecord($animal_id, $yieldrecord_id)
{
    $user = auth()->user();
    $animal = Animal::find($animal_id);
    try {
        $yieldrecord = YieldRecord::findOrFail($yieldrecord_id);
    } catch (\Exception $e) {
        // Handle the exception here, for example, redirect to an error page
        return redirect()->route('index')->with('error', 'yieldrecord not found.');
    }

    //$yieldrecord = yieldrecord::findOrFail($yieldrecord_id);


    return view('animals.yieldrecordedit', ['animal' => $animal, 'yieldrecord' => $yieldrecord]);
}

   // take care of the updating the animal yieldrecord
public function updateyieldrecord(Request $request, $animal_id, $yieldrecord_id)
{
    $validator = Validator::make($request->all(), [

        'product' => 'required',
            'quantity' => 'required|numeric',
            //'trace_number' => 'required|unique:yield_records',
            'date' => 'required|date',
            'quality' => 'required',
            'grade' => 'required',
            'price' => 'required|numeric',
            'yield_method' => 'required',
            'yield_description' => 'nullable',
            'yield_time' => 'required|date_format:H:i',


    ]);



    $yieldrecord = YieldRecord::findOrFail($yieldrecord_id);
    $yieldrecord->update($request->all());

    return redirect()->route('animals.showyieldrecord', ['animal_id' => $animal_id])
        ->with('success', 'yieldrecord updated successfully.');
}
    // delete the animal yieldrecord
public function deleteyieldrecord($animal_id, $yieldrecord_id)
{
    $yieldrecord = YieldRecord::findOrFail($yieldrecord_id);
    $yieldrecord->delete();

    return redirect()->route('animals.showyieldrecord', ['animal_id' => $animal_id])
        ->with('success', 'yieldrecord deleted successfully.');
}


}
