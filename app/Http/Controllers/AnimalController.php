<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\AnimalContent;
use App\Models\Treatment;
use App\Models\Feeding;
use App\Models\Task;
use App\Models\Measurement;
use App\Models\YieldRecord;
use App\Models\Note;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
class AnimalController extends Controller
{
    public function index(Request $request)
{
    $user = auth()->user();
    $error = session('error');

    $animals = Animal::where('user_id', $user->id)

    ->orderBy('created_at', 'desc')
    ->paginate(5);
    //$treatments = Treatment::where('user_id', $user->id)->get();
    //$feedings = Feeding::where('user_id', $user->id)->get();
    //$yieldrecords= YieldRecord::where('user_id', $user->id)->get();
    // Count the animals associated with the user
    $recordCount = $animals->count();
    $maleCount = 0;
    $femaleCount = 0;
    $purchased = 0;
    $raised =0;
    $soldAnimal =0;

    // Check if the user is not new and has associated animals
    if (!$user->wasRecentlyCreated && $animals->isNotEmpty()) {
        $maleCount = $animals->where('gender', 'Male')->count();
        $femaleCount = $animals->where('gender', 'Female')->count();
        $raised = $animals->where('raised_purchased','Raised')->count();
        $purchased = $animals->where('raised_purchased','Purchased')->count();
        $soldAnimal = $animals->where('status','sold')->count();
    }

    return view('AnimalContent.index', compact('animals', 'error', 'recordCount', 'femaleCount', 'maleCount', 'user','raised','purchased','soldAnimal'));
}


    public function create()
    {
        return view('AnimalContent.create');
    }

    public function show($id)
{
    try {
        $animal = Animal::findOrFail($id);
        $user = auth()->user();

        if ($animal->user_id !== $user->id) {
            abort(403, 'Unauthorized');
        }

        // Retrieve the associated treatment data for the animal
        $treatment = Treatment::where('animal_id', $animal->id)->first();

        return view('AnimalContent.show', compact('animal', 'treatment','user'));
    } catch (QueryException $e) {
        // Handle the exception here
        return redirect()->route('index')->with('error', 'Invalid animal ID provided.');
    }
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'type' => 'required|string',
            'breed' => 'nullable|string',
            'gender' => 'nullable|string',
            'keywords' => 'nullable|string',
            'internal_id' => 'nullable|string',
            'status' => 'required|string',
            'death_date' => 'nullable|date',
            'deceased_reason' => 'nullable|string',
            'is_neutered' => 'nullable|boolean',
            'is_breeding_stock' => 'nullable|boolean',
            'coloring' => 'nullable|string',
            'retention_score' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'body_condition_score' => 'nullable|numeric',
            'horn_length' => 'nullable|numeric',
            'tail_length_shape' => 'nullable|string',
            'fur_feather_scale_type' => 'nullable|string',
            'eye_color' => 'nullable|string',
            'beak_shape' => 'nullable|string',
            'tail_feather_pattern' => 'nullable|string',
            'saddle_markings' => 'nullable|string',
            'hoof_type' => 'nullable|string',
            'gait_or_movement' => 'nullable|string',
            'teeth_characteristics' => 'nullable|string',
            //
            'description' => 'nullable|string',

            'tag_number' => 'nullable|string',
            'color' => 'nullable|string',
            'location' => 'nullable|string',
            'electronic_id' => 'nullable|string',
            'other_tag' => 'nullable|string',
            'other_color' => 'nullable|string',
            'other_location' => 'nullable|string',
            'registry_number' => 'nullable|string',
            'tattoo_left' => 'nullable|string',
            'tattoo_right' => 'nullable|string',
            'photographs' => 'nullable|array',
            'photographs.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'dna_profile' => 'nullable|string',
            'scars' => 'nullable|string',

            'birth_date' => 'required|date',
            'dam' => 'required|string',
            'sire' => 'required|string',
            'birth_weight' => 'required|numeric',
            'weight_unit' => 'required|in:lbs,kg',
            'age_to_wean' => 'required|numeric',
            'date_weaned' => 'required|date',
            'birth_time' => 'required|date_format:H:i',
            'birth_status' => 'required|in:Natural,Assisted',
            'colostrum_intake' => 'required|numeric',
            'health_at_birth' => 'required|in:Healthy,Sick',
            'milk_feeding' => 'nullable|string',
            'vaccinations' => 'nullable|string',
            'breeder_info' => 'nullable|string',
           // 'raised_purchased' => 'required|in:Raised,Purchased',
           // 'birth_photos' => 'nullable|array',
            'birth_photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',





        ]);
        //$animal->raised_purchased = $request->input('raised_purchased');


        if ($validator->fails()) {
            return redirect()
                ->route('AnimalContent.create')
                ->withErrors($validator,'requiredFields')
                ->withInput();
        }

        $animal = new Animal();
        if ($request->input('raised_purchased') === 'Purchased') {
            $animal->purchasedAnimal = $request->input('purchasedAnimal');
            $animal->purchaseDate = $request->input('purchaseDate');
            $animal->purchasePrice = $request->input('purchasePrice');
            $animal->vendor = $request->input('vendor');
            $animal->deficts = $request->input('deficts');
            $animal->treatments = $request->input('treatments');
            //$animal->healthStatus = $request->input('healthStatus');
        }
        // Fill the model with validated data
        $animal->fill($request->all());
        $animal->user_id = auth()->user()->id;
        // Save the animal to the database
        $animal->save();

        $action = $request->input('action');

        if ($action === 'create') {
            return redirect()->route('AnimalContent.show', ['id' => $animal->id])->with('success', 'Animal created successfully.');
        } elseif ($action === 'new_save') {
            return redirect()->route('index')->with('success', 'Animal saved successfully.');
        }
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            // Retrieve the animal with the given ID from the database
            $animal = Animal::find($id);

            if ($animal->user_id !== Auth::id()) {
                return abort(403); // Return a 403 Forbidden response
            }


            if (!$animal) {
                return redirect()->route('index')->with('error', 'Animal not found.');
            }

            // Check if the animal's status is 'sold'
            if ($animal->status === 'sold') {
                return redirect()->route('index')->with('error', 'This animal has already been sold and cannot be edited.');
            }

            // If the status is not 'sold,' allow editing
            return view('AnimalContent.edit', compact('animal'));
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred while loading the animal for editing.');
        }
    }


/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
         // Validate the form data
         $validatedData = $request->validate([
            //basic infomatiom of animal
            'name' => 'nullable|string',
            'breed' => 'nullable|string',
            'keywords' => 'nullable|string',
            'internal_id' => 'nullable|string',
            'status' => 'nullable|string',
            'death_date' => 'nullable|date',
            'deceased_reason' => 'nullable|string',

             // Validation for physical characteristics
             'is_neutered' => 'boolean',
             'is_breeding_stock' => 'boolean',
             'coloring' => 'nullable|string',
             'retention_score' => 'nullable|numeric',
             'weight' => 'nullable|numeric',
             'height' => 'nullable|numeric',
             'body_condition_score' => 'nullable|numeric',
             'horn_length' => 'nullable|numeric',
             'tail_length_shape' => 'nullable|string',
             'fur_feather_scale_type' => 'nullable|string',
             'eye_color' => 'nullable|string',
             'beak_shape' => 'nullable|string',
             'tail_feather_pattern' => 'nullable|string',
             'saddle_markings' => 'nullable|string',
             'hoof_type' => 'nullable|string',
             'gait_or_movement' => 'nullable|string',
             'teeth_characteristics' => 'nullable|string',
             'description' => 'nullable|string',
             'tag_number' => 'nullable|string',
             'color' => 'nullable|string',
             'location' => 'nullable|string',
             'electronic_id' => 'nullable|string',
             'other_tag' => 'nullable|string',
             'other_color' => 'nullable|string',
             'other_location' => 'nullable|string',
             'registry_number' => 'nullable|string',
             'tattoo_left' => 'nullable|string',
             'tattoo_right' => 'nullable|string',
             'photographs' => 'nullable|array',
             'photographs.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
             'dna_profile' => 'nullable|string',
             'scars' => 'nullable|string',



         ]);

         $animal = Animal::find($id);


         $animal->fill($validatedData);


         $animal->save();

         // Redirect back with a success message
         return redirect()->route('index')->with('success', 'Animal information updated successfully.');
     }

     public function delete($id)
    {

        $animal = Animal::find($id);
        $animal -> delete();

        return redirect()->route('index');
    }
        //deals with animal selling
    public function storebill(Request $request, $animal_id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'descriptions' => 'nullable|string',
            'date' => 'nullable|date',
            'keyword' => 'nullable|string',
            'sold_to' => 'nullable|string',
            'sale_price' => 'numeric|max:99999999.99',
        ]);
        //checking for errors if validator falls return to index with error required field
        if ($validator->fails()) {
            return redirect()
                ->route('index')
                ->withErrors($validator, 'requiredFields')
                ->withInput();
        }

        // Find the animal by ID
        $animal = Animal::find($animal_id);
        $animal->user_id = auth()->user()->id;
        //checking the animal if solid in the status, if solid return error
        if ($animal->status === 'sold') {
            return redirect()
                ->route('index')
                ->with('error', 'This animal has already been sold and cannot be sold again.');
        }

        // Generating a unique bill_of_sale_id (UUID) and store it in session
        $billOfSaleId = $request->session()->get('billOfSaleId');

        // Creating an instance of the AnimalContent model
        $animalContent = new AnimalContent($request->all());

        // Filling the model with validated data, including the generated bill_of_sale_id
        $animalContent->bill_of_sale_id = $billOfSaleId;


        // Saving the animal content to the database
        $animalContent->save();

        // Updating the status of the animal to 'sold'
        $animal->update(['status' => 'sold']);

        // Redirecting to the bill of sale page with the bill details
        return view('AnimalContent.bill_of_sale', [
            'animal' => $animal,
            'billOfSaleId' => $billOfSaleId,
            'descriptions' => $animalContent->descriptions,
            'date' => $animalContent->date,
            'keyword' => $animalContent->keyword,
            'soldTo' => $animalContent->sold_to,
            'salePrice' => $animalContent->sale_price,
        ]);
    }


     //display animal that is sold
     public function display(Request $request, $animal_id)
     {
         try {

            $user = auth()->user();
             // Fetch the Animal model by ID
             $animal = Animal::find($animal_id);
             $animal->user_id = auth()->user()->id;
             if (!$animal) {
                 return redirect()->route('index')->with('error', 'Bill of Sale not found.');
             }

             // Generate a unique billOfSaleId (UUID)
             $billOfSaleId = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

             // Store the generated billOfSaleId in the session
             $request->session()->put('billOfSaleId', $billOfSaleId);

             // Pass the data to the view
             return view('AnimalContent.display', ['animal' => $animal, 'billOfSaleId' => $billOfSaleId]);
         } catch (\Exception $e) {
             return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
         }
     }



                       //deals with adding  treament  to the animal

public function storetreament(Request $request,$animal_id)
{
    $validator = Validator::make($request->all(), [
        'type' => 'required|string|max:255',
        'product' => 'nullable|string|max:60',
        //'batch' => 'nullable|string|max:63',
        'amount' => 'nullable|string|max:60',
        'inventory_amount' => 'nullable|numeric|between:0,999999.99',
        'unit' => 'nullable|string|max:255',
        'mode' => 'nullable|string|max:255',
        'site' => 'nullable|string|max:60',
        'days_to_withdrawal' => 'nullable|integer|min:0',
        'retreat_date' => 'nullable|date',
        'technician' => 'nullable|string|max:63',
        //'currency' => 'nullable|string|max:10',
        'cost' => 'nullable|numeric|between:0,9999999.99',
        'record_transaction' => 'boolean',
        'treatment_description' => 'nullable|string',
        'dates' => 'nullable|date',
        'treatment_keywords' => 'nullable|string|max:20'


    ]);
    $treatment = new Treatment();
    $treatment->fill($request->all());
    $treatment->user_id = auth()->user()->id;
    $treatment->animal_id = $animal_id; // Associate the treatment with the animal
    $treatment->save();

    return redirect()->route('AnimalContent.showtreatment', ['animal_id' => $animal_id])
        ->with('success', 'Treatment created successfully.');

}
     // add animal treatment by checking animal id
     public function treatment($animal_id)
     {
         try {
             // Find the animal by ID
             $animal = Animal::find($animal_id);
             $animal->user_id = auth()->user()->id;
             if (!$animal) {
                 // Redirect to the home page with a "not found" flash message
                 return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
             }

             return view('AnimalContent.treatment', ['animal' => $animal]);
         } catch (QueryException $e) {
             // Handle the exception here
             return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
         }
     }


                                   // display the animal treatment



public function showtreatment($animal_id)
{
    try {
        $user = auth()->user();
        $animal = Animal::find($animal_id);
        $treatments = Treatment::where('user_id', $user->id)->get();
        $treatments = Treatment::where('animal_id', $animal_id)

        ->orderBy('created_at', 'desc') // Order by date in descending order (latest first)
        ->paginate(5);
        // Check if the animal's status is 'sold'
        if ($animal->status === 'sold') {
            return redirect()->route('index')->with('error', 'Holly Smoke !!!This animal has already been sold and cannot add treatement/edit.');
        }

        return view('AnimalContent.showtreatment', ['animal' => $animal, 'treatments' => $treatments,'user'=> $user]);
    } catch (\Exception $e) {
        //return redirect()->route('index')->with('error', 'An error occurred while displaying the treatments.');
    }
}

   // edit the animal treatment form
   public function edittreatment($animal_id, $treatment_id)
   {
       try {
           $animal = Animal::find($animal_id);
           $treatment = Treatment::findOrFail($treatment_id);

           return view('AnimalContent.treatmentedit', ['animal' => $animal, 'treatment' => $treatment]);
       } catch (QueryException $e) {
           // Handle the exception here
           return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
       } catch (ModelNotFoundException $e) {
           // Handle the case where the animal or treatment was not found
           return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
       }
   }
   // take care of the updating the animal treatment
   public function updatetreatment(Request $request, $animal_id, $treatment_id)
   {
       try {
           $validator = Validator::make($request->all(), [
               // Validation rules for treatment update fields
           ]);

           if ($validator->fails()) {
               return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
           }

           $treatment = Treatment::findOrFail($treatment_id);
           $treatment->update($request->all());

           return redirect()->route('AnimalContent.showtreatment', ['animal_id' => $animal_id])
               ->with('success', 'Treatment updated successfully.');
       } catch (ModelNotFoundException $e) {
           return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
       }
   }

    // delete the animal treatment
public function deletetreatment($animal_id, $treatment_id)
{
    $treatment = Treatment::findOrFail($treatment_id);
    $treatment->delete();

    return redirect()->route('AnimalContent.showtreatment', ['animal_id' => $animal_id])
        ->with('success', 'Treatment deleted successfully.');
}

// Bulk Treatment Deletion
public function bulkDelete(Request $request, $animal_id)
{
    $selectedIds = $request->input('ids');

    if (!empty($selectedIds)) {
        // Loop through the selected IDs and delete each treatment
        foreach ($selectedIds as $treatmentId) {
            $treatment = Treatment::find($treatmentId);
            if ($treatment) {
                $treatment->delete();
            }
        }

        return redirect()->route('AnimalContent.showtreatment', ['animal_id' => $animal_id])
            ->with('success', 'Selected treatments deleted successfully.');
    } else {
        return redirect()->route('AnimalContent.showtreatment', ['animal_id' => $animal_id])
            ->with('error', 'No treatments selected for deletion.');
    }
}



         //this deals with adding feeding of animal



public function storefeeding(Request $request,$animal_id)
{
    $validator = Validator::make($request->all(), [
        'amount' => 'nullable|numeric|between:0,9999999.99',
        'unit' => 'nullable|string|max:255',
        'feed_details' => 'nullable|string',
        'feed_weight' => 'nullable|numeric|between:0,9999999.99',
        'weight_unit' => 'nullable|string|max:255',
        'feeding_currency' => 'nullable|string',
        'estimated_cost' => 'nullable|numeric|between:0,9999999.99',
        'feeding_description' => 'nullable|string',
        'feeding_date' => 'nullable|date',
        'repeat_days' => 'nullable|numeric|min:1',

    ]);

    $repeatDays = $request->input('repeat_days', 1);

    $initialFeedingDate = $request->input('feeding_date');

    for ($i = 0; $i < $repeatDays; $i++) {
        $feeding = new Feeding();
        $feeding->fill($request->all());
        $feeding->animal_id = $animal_id;
        $feeding->user_id = auth()->user()->id;
        $feeding->feeding_date = $initialFeedingDate;
        $feeding->save();


        $initialFeedingDate = date('Y-m-d', strtotime($initialFeedingDate . ' +1 day'));
    }

    return redirect()->route('animals.showfeeding', ['animal_id' => $animal_id])
        ->with('success', 'feeding  created successfully.');

}

public function feeding($animal_id)
{
    //$animal->user_id = auth()->user()->id;
    // Retrieve the animal by ID
    $animal = Animal::find($animal_id);
    $animal->user_id = auth()->user()->id;

    if (!$animal) {

        return Redirect::route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }

    return view('animals.feeding', ['animal' => $animal]);
}
public function showfeeding($animal_id)
{
    try {
        $user = auth()->user();
        $animal = Animal::find($animal_id);
        //$animals = Animal::paginate(5);
        $feedings = Feeding::where('user_id', $user->id)->get();
        $feedings = Feeding::where('animal_id', $animal_id)
        //->whereDate('created_at', '<', Carbon::now())
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        // Check if the animal's status is 'sold'
        if ($animal->status === 'sold') {
            return redirect()->route('index')->with('error', 'This animal has already been sold and cannot add feeeding/edit.');
        }

        return view('animals.showfeeding', ['animal' => $animal, 'feedings' => $feedings,'user'=>$user]);
    } catch (\Exception $e) {
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}



public function editfeeding($animal_id, $feeding_id)
{
    try {
        $animal = Animal::find($animal_id);
        $feeding = Feeding::findOrFail($feeding_id);

        return view('animals.feedingedit', ['animal' => $animal, 'feeding' => $feeding]);
    } catch (\Exception $e) {
        return redirect()->route('index')->with('error', 'An error occurred while editing the feeding.');
    }
}


   // take care of the updating the animal treatment
   public function updatefeeding(Request $request, $animal_id, $feeding_id)
   {
       try {
           $validator = Validator::make($request->all(), [
               // Add your validation rules for feeding update fields here
           ]);

           if ($validator->fails()) {
               return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
           }

           $feeding = Feeding::findOrFail($feeding_id);
           $feeding->update($request->all());

           return redirect()->route('animals.showfeeding', ['animal_id' => $animal_id])
               ->with('success', 'Feeding updated successfully.');
       } catch (\Exception $e) {
           return redirect()->route('index')->with('error', 'An error occurred while updating the feeding.');
       }
   }

    // delete the animal treatment
    public function deletefeeding($animal_id, $feeding_id)
    {
        try {
            $feeding = Feeding::findOrFail($feeding_id);
            $feeding->delete();

            return redirect()->route('animals.showfeeding', ['animal_id' => $animal_id])
                ->with('success', 'Treatment deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
        }
    }



// show All treatments

public function showAllTreatments()
{
    try {

        $user = auth()->user();
        // Retrieve all animals and their treatments
        //$animals = Animal::all();
        $treatments = Treatment::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        //$animals = Animal::paginate(5);
        //$treatments = Treatment::all();

        // Create an associative array to group treatments by animal ID
        $animalTreatments = [];
        foreach ($treatments as $treatment) {
            $animalId = $treatment->animal_id;
            if (!isset($animalTreatments[$animalId])) {
                $animalTreatments[$animalId] = [];
            }
            $animalTreatments[$animalId][] = $treatment;
        }

        // Pass the data to the view
        return view('AnimalContent.showalltreatments', compact('animals', 'animalTreatments'));
    } catch (\Exception $e) {
        // Handle the error here and return an error view
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}

// show All treatments

public function showAllFeedings()
{
    try {
        $user = auth()->user();
        // Retrieve all animals and their treatments
       // $animals = Animal::all();
        $feedings = Feeding::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);
       // $feedings = Feeding::all();
        //$animals = Animal::paginate(3);
        //$feedings = Feeding::paginate(3);


        // Create an associative array to group treatments by animal ID
        $animalFeedings = [];
        foreach ($feedings as $feeding) {
            $animalId = $feeding->animal_id;
            if (!isset($animalFeedings[$animalId])) {
                $animalFeedings[$animalId] = [];
            }
            $animalFeedings[$animalId][] = $feeding;
        }

        // Pass the data to the view
        return view('AnimalContent.showallfeedings', compact('animals', 'animalFeedings'));

    } catch (\Exception $e) {
        // Handle the error here and return an error view
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}

public function showAllMeasurements()
{
    try {

        $user = auth()->user();
        // Retrieve all animals and their treatments
        //$animals = Animal::all();
        $measurements = Measurement::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        //$measurements = Measurement::all();
        //$animals = Animal::paginate(4);
        // Create an associative array to group treatments by animal ID
        $animalMeasurements = [];
        foreach ($measurements as $measurement) {
            $animalId = $measurement->animal_id;
            if (!isset($animalMeasurements[$animalId])) {
                $animalMeasurements[$animalId] = [];
            }
            $animalMeasurements[$animalId][] = $measurement;
        }

        // Pass the data to the view
        return view('AnimalContent.showallmeasurements', compact('animals', 'animalMeasurements'));

    } catch (\Exception $e) {
         //Handle the error here and return an error view
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}



public function showAllYieldrecords()
{
   try {

        $user = auth()->user();
        $yieldrecords = YieldRecord::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        // Create an associative array to group treatments by animal ID
        $animalyieldrecords = [];
        foreach ($yieldrecords as $yieldrecord) {
            $animalId = $yieldrecord->animal_id;
            if (!isset($animalyieldrecords[$animalId])) {
                $animalyieldrecords[$animalId] = [];
            }
            $animalyieldrecords[$animalId][] = $yieldrecord;
        }

        // Passing the data to the view
        return view('AnimalContent.showallyieldrecords', compact('animals', 'animalyieldrecords','user','yieldrecords'));

    } catch (\Exception $e) {
         //Handle the error here and return an error view
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}

public function showAllnotes()
{
   try {

        $user = auth()->user();
        $notes = Note::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        // Create an associative array to group treatments by animal ID
        $animalnotes = [];
        foreach ($notes as $note) {
            $animalId = $note->animal_id;
            if (!isset($animalnotes[$animalId])) {
                $animalnotes[$animalId] = [];
            }
            $animalnotes[$animalId][] = $note;
        }

        // Passing the data to the view
        return view('AnimalContent.showallnotes', compact('animals', 'animalnotes','user','notes'));

    } catch (\Exception $e) {
        \Log::error($e);
         //Handle the error here and return an error view
        return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}

public function showAlltasks()
{
   try {

        $user = auth()->user();
        $tasks = Task::where('user_id', $user->id)->get();
        $animals = Animal::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        // Create an associative array to group treatments by animal ID
        $animaltasks = [];
        foreach ($tasks as $task) {
            $animalId = $task->animal_id;
            if (!isset($animaltasks[$animalId])) {
                $animaltasks[$animalId] = [];
            }
            $animaltasks[$animalId][] = $task;
        }

        // Passing the data to the view
        return view('Task.showalltasks', compact('animals', 'animaltasks','user','tasks'));

    } catch (\Exception $e) {
        \Log::error($e);
         //Handle the error here and return an error view
       return redirect()->route('index')->with('error', 'Holly Smoke!! Sorry, something went wrong please try again..');
    }
}


}
