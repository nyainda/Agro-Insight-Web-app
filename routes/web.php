<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FarmflowController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\YieldRecordController;
use App\Http\Controllers\SiteController;



// Default route
Route::get('/', function () {
    return view('welcome');
});

// Authenticated routes
Route::group(['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function () {

    // Dashboard
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Blog Routes
    Route::get('blog', [PostController::class, 'blog'])->name('blog'); // Displays a list of blog posts


    // Farmer Routes
    Route::view('Farmer/Fieldtech', 'Farmer.Fieldtech')->name('Fieldtech');
     // Display the Fieldtech view
    Route::get('Farmer/Farmflow', [FarmflowController::class, 'index'])->name('Farmflow');
    // Displays the Farmflow index
    Route::view('Farmer/Agroforecast', 'Farmer.Agroforecast')->name('Agroforecast');
    // Display the Agroforecast view
    Route::view('Farmer/Farmermarket', 'Farmer.Farmermarket')->name('Farmermarket');
    // Display the Farmermarket view
    Route::view('Farmer/CropCare', 'Farmer.CropCare')->name('CropCare');
    // Display the CropCare view
    Route::view('Farmer/AgroGuide', 'Farmer.AgroGuide')->name('AgroGuide');
     // Display the AgroGuide view
    Route::view('AnimalContent/Next', 'AnimalContent.Next')->name('Next');
    //display next view
    Route::view('settings', 'settings')->name('settings');
    //display setting view


    // Animal Routes

    //measurement
// routes/web.php





   // Route::get('/animals/{animal_id}/measurement', [MeasurementController::class, 'measuremet'])->name('animals.measurement');
    Route::post('/animals/{animal_id}/storemeasurement', [MeasurementController::class, 'storemeasurement'])->name('animals.storemeasurement');
    Route::get('/animals/{animal_id}/showmeasurement', [MeasurementController::class, 'showmeasurement'])->name('animals.showmeasurement');
    Route::get('/animals/{animal_id}/measurement', [MeasurementController::class, 'measurement'])->name('animals.measurement');
    //Route::get('/animals/{animal}/measurement', [MeasurementController::class, 'measurement'])->name('animals.measurement');
    Route::get('/animals/{animal_id}/measurement/{measurement_id}/edit', [MeasurementController::class, 'editmeasurement'])->name('animals.measurementedit');
    Route::put('/animals/{animal_id}/measurement/{measurement_id}', [MeasurementController::class, 'updatemeasurement'])->name('measurement.update');
    Route::get('/animals/{animal_id}/measurement/{measurement_id}', [MeasurementController::class, 'deletemeasurement'])->name('measurement.delete');


    Route::post('/animals/{animal_id}/storeyieldrecord', [YieldRecordController::class, 'storeyieldrecord'])->name('animals.storeyieldrecord');
    Route::get('/animals/{animal_id}/showyieldrecord', [YieldRecordController::class, 'showyieldrecord'])->name('animals.showyieldrecord');
    Route::get('/animals/{animal_id}/yieldrecord', [YieldRecordController::class, 'yieldrecord'])->name('animals.yieldrecord');
    Route::get('/animals/{animal_id}/yieldrecord/{yieldrecord_id}/edit', [YieldRecordController::class, 'edityieldrecord'])->name('animals.yieldrecordedit');
    Route::put('/animals/{animal_id}/yieldrecord/{yieldrecord_id}', [YieldRecordController::class, 'updateyieldrecord'])->name('yieldrecord.update');
    Route::get('/animals/{animal_id}/yieldrecord/{yieldrecord_id}', [YieldRecordController::class, 'deleteyieldrecord'])->name('yieldrecord.delete');


    Route::post('/animals/{animal_id}/storenote', [NoteController::class, 'storenote'])->name('animals.storenote');
    Route::get('/animals/{animal_id}/shownote', [NoteController::class, 'shownote'])->name('animals.shownote');
    Route::get('/animals/{animal_id}/note', [NoteController::class, 'note'])->name('animals.note');
    Route::get('/animals/{animal_id}/note/{note_id}/edit', [NoteController::class, 'editnote'])->name('animals.noteedit');
    Route::put('/animals/{animal_id}/note/{note_id}', [NoteController::class, 'updatenote'])->name('note.update');
    Route::get('/animals/{animal_id}/note/{note_id}', [NoteController::class, 'deletenote'])->name('note.delete');

    Route::post('/animals/{animal_id}/storetask', [TaskController::class, 'storetask'])->name('animals.storetask');
    Route::get('/animals/{animal_id}/showtask', [TaskController::class, 'showtask'])->name('animals.showtask');
    Route::get('/animals/{animal_id}/task', [TaskController::class, 'task'])->name('animals.task');
    Route::get('/animals/{animal_id}/task/{task_id}/edit', [TaskController::class, 'edittask'])->name('animals.taskedit');
    Route::put('/animals/{animal_id}/task/{task_id}', [TaskController::class, 'updatetask'])->name('task.update');
    Route::get('/animals/{animal_id}/task/{task_id}', [TaskController::class, 'deletetask'])->name('task.delete');


    // Display animal details
    Route::get('/AnimalContent/display/{animal_id}', [AnimalController::class, 'display'])->name('AnimalContent.display');
    // Display animal treatment details
    Route::get('/AnimalContent/treatment/{animal_id}', [AnimalController::class, 'treatment'])->name('AnimalContent.treatment');
    // Display the animal edit view
    Route::view('AnimalContent/edit', 'AnimalContent.edit')->name('edit');
    // Store animal feeding data
    Route::post('/animals/storefeeding/{animal_id}', [AnimalController::class, 'storefeeding'])->name('animals.storefeeding');
    // Store animal feeding data
    Route::get('/animals/feeding/{animal_id}', [AnimalController::class, 'feeding'])->name('animals.feeding');
    // Display animal feeding details
    Route::get('animals/showfeeding/{animal_id}', [AnimalController::class, 'showfeeding'])->name('animals.showfeeding');
    // Show animal feeding records
    Route::get('/animals/{animal_id}/feeding/{feeding_id}/edit', [AnimalController::class, 'editfeeding'])->name('animals.feedingedit');
     // Edit animal feeding record
    Route::put('/animals/{animal_id}/feeding/{feeding_id}', [AnimalController::class, 'updatefeeding'])->name('feeding.update');
    // Update animal feeding record
    Route::get('/animals/{animal_id}/feeding/{feeding_id}', [AnimalController::class, 'deletefeeding'])->name('feeding.delete');

     // Delete animal feeding record
    Route::view('AnimalContent/new', 'AnimalContent.new')->name('new');
    // Display the new animal view
    Route::post('/AnimalContent/storebill/{animal_id}', [AnimalController::class, 'storebill'])->name('AnimalContent.storebill');
    // Store animal bill data
    Route::post('/AnimalContent/storetreament/{animal_id}', [AnimalController::class, 'storetreament'])->name('AnimalContent.storetreament');
    // Store animal treatment data
    Route::get('AnimalContent/showtreatment/{animal_id}', [AnimalController::class, 'showtreatment'])->name('AnimalContent.showtreatment');
     // Show animal treatment records
    Route::get('/AnimalContent/{animal_id}/treatment/{treatment_id}/edit', [AnimalController::class, 'edittreatment'])->name('AnimalContent.treatmentedit');
    // Edit animal treatment record
    Route::put('/AnimalContent/{animal_id}/treatment/{treatment_id}', [AnimalController::class, 'updatetreatment'])->name('treatment.update');
    // Update animal treatment record
    Route::get('/AnimalContent/{animal_id}/treatment/{treatment_id}', [AnimalController::class, 'deletetreatment'])->name('treatment.delete');
    Route::get('/AnimalContent/{animal_id}/treatment/bulk-delete', [AnimalController::class, 'bulkDelete']) ->name('treatment.bulkDelete');

     // Delete animal treatment record
    Route::get('AnimalContent/bill_of_sale', [AnimalController::class, 'billOfSale'])->name('AnimalContent.bill_of_sale');
    // Display animal bill of sale
    Route::get('/bill_of_sale/{id}', [AnimalController::class, 'showBillOfSale'])->name('showBillOfSale');
    // Show animal bill of sale

    Route::get('/AnimalContent/showalltreatments', [AnimalController::class,'showAllTreatments'])->name('AnimalContent.showalltreatments');
    Route::get('/AnimalContent/showallfeedings', [AnimalController::class,'showAllFeedings'])->name('AnimalContent.showallfeedings');
    Route::get('/AnimalContent/showallmeasurements', [AnimalController::class,'showAllMeasurements'])->name('AnimalContent.showallmeasurements');
    Route::get('/AnimalContent/showallyieldrecords', [AnimalController::class,'showAllYieldrecords'])->name('AnimalContent.showallyieldrecords');
    Route::get('/AnimalContent/showallnotes', [AnimalController::class,'showAllnotes'])->name('AnimalContent.showallnotes');
    Route::get('/Task/showalltasks', [AnimalController::class,'showAlltasks'])->name('Task.showalltasks');


    Route::get('/AnimalContent', [AnimalController::class, 'index'])->name('index');
    // Display the animal index
    Route::get('AnimalContent/create', [AnimalController::class, 'create'])->name('AnimalContent.create');
    // Display the animal create view
    Route::post('AnimalContent/store', [AnimalController::class, 'store'])->name('AnimalContent.store');
    // Store animal data
    Route::match(['get', 'post'], '/AnimalContent/edit/{id}', [AnimalController::class, 'edit'])->name('AnimalContent.edit');
    // Edit animal data
    Route::put('AnimalContent/update/{id}', [AnimalController::class, 'update'])->name('AnimalContent.update');
    // Update animal data
    Route::get('AnimalContent/show/{id}', [AnimalController::class, 'show'])->name('AnimalContent.show');
    // Show animal details
    Route::get('AnimalContent/delete/{id}', [AnimalController::class, 'delete'])->name('AnimalContent.delete');
    // Delete animal record

    // About Us
    Route::get('about-us', [SiteController::class, 'about'])->name('about-us'); // Display the about us page

    // Search
    Route::get('/search', [PostController::class, 'search'])->name('search'); // Perform a search

    // View Posts by Category
    Route::get('category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category'); // View posts by category

    // View Single Post
    Route::get('{post:slug}', [PostController::class, 'show'])->name('view'); // View a single blog post
});
