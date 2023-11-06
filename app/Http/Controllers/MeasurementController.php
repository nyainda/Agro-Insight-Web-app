<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use App\Models\Animal;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class MeasurementController extends Controller
{


    public function storemeasurement(Request $request, $animal_id)
    {
        // Validation rules for the form fields (you can customize these)
        $validator = Validator::make($request->all(), [
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'condition_score' => 'nullable|numeric',
            'temp' => 'nullable|numeric',
            'fec' => 'nullable|integer',
            'heart_rate' => 'nullable|integer',
            'respiratory_rate' => 'nullable|integer',
            'systolic_bp' => 'nullable|integer',
            'diastolic_bp' => 'nullable|integer',
            'pulse_oximetry' => 'nullable|numeric',
            'date' => 'nullable|date',
        ]);


        $measurement = new Measurement();

        // Generate a UUID for the id field
        $measurement->id = Str::uuid();

        // Fill in the other measurement fields
        $measurement->fill($request->all());
        $measurement->animal_id = $animal_id;
        $measurement->user_id = auth()->user()->id;
        $measurement->save();

        return redirect()->route('animals.showmeasurement', ['animal_id' => $animal_id])
        ->with('success', 'measurement created successfully.');

    }


    public function showmeasurement($animal_id)
    {
        try {

            $user = auth()->user();
            $animal = Animal::find($animal_id);
            $measurements = Measurement::where('user_id', $user->id)->get();
            $measurements = Measurement::where('animal_id', $animal_id)
                 ->orderBy('created_at', 'desc') // Order by date in descending order (latest first)
                 ->paginate(5);
            // Check if the animal's status is 'sold'
            if ($animal->status === 'sold') {
                return redirect()->route('index')->with('error', 'This animal has already been sold and cannot add meaasurement/edit.');
            }

            return view('animals.showmeasurement', ['animal' => $animal, 'measurements' => $measurements,'user'=>$user]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the measurements.');
        }
    }



    public function measurement($animal_id)
    {
        try {
            // Retrieve the animal by ID
            $animal = Animal::find($animal_id);
            $animal->user_id = auth()->user()->id;
            if (!$animal) {
                // Redirect to the home page with a "not found" flash message
                return Redirect::route('index')->with('error', 'Animal not found.');
            }

            return view('animals.measurement', ['animal' => $animal]);
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while displaying the measurement form.');
        }
    }

public function editmeasurement($animal_id, $measurement_id)
{
    $animal = Animal::find($animal_id);
    try {
        $measurement = Measurement::findOrFail($measurement_id);
    } catch (\Exception $e) {
        // Handle the exception here, for example, redirect to an error page
        return redirect()->route('index')->with('error', 'Measurement not found.');
    }


    return view('animals.measurementedit', ['animal' => $animal, 'measurement' => $measurement]);
}

   // take care of the updating the animal treatment
public function updatemeasurement(Request $request, $animal_id, $measurement_id)
{
    $validator = Validator::make($request->all(), [

        // Validation rules for treatment update fields
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $measurement = Measurement::findOrFail($measurement_id);
    $measurement->update($request->all());

    return redirect()->route('animals.showmeasurement', ['animal_id' => $animal_id])
        ->with('success', 'measurement updated successfully.');
}
    // delete the animal treatment
public function deletemeasurement($animal_id, $measurement_id)
{
    $measurement = Measurement::findOrFail($measurement_id);
    $measurement->delete();

    return redirect()->route('animals.showmeasurement', ['animal_id' => $animal_id])
        ->with('success', 'measurement deleted successfully.');
}

private function calculateADG($measurements)
{
    $weightMeasurements = $measurements->where('weight', '>', 0)->sortBy('date');

    $totalWeightGain = 0;
    $totalDays = 0;

    for ($i = 0; $i < count($weightMeasurements) - 1; $i++) {
        $currentWeight = $weightMeasurements[$i]->weight;
        $nextWeight = $weightMeasurements[$i + 1]->weight;
        $daysBetweenMeasurements = $weightMeasurements[$i]->date->diffInDays($weightMeasurements[$i + 1]->date);

        $weightGain = $nextWeight - $currentWeight;

        $totalWeightGain += $weightGain;
        $totalDays += $daysBetweenMeasurements;
    }

    if ($totalDays > 0) {
        $adg = $totalWeightGain / $totalDays;
    } else {
        $adg = 0;
    }

    return $adg;
}
}
