<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class FarmflowController extends Controller
{
    public function index()
{
    // Retrieve the specific attributes from the database
    $animalsData = Animal::select('gender', 'breed', 'name','status')->get();
    $recordCount = count($animalsData);

    return view('Farmer.Farmflow', compact('animalsData','recordCount'));
}



}
