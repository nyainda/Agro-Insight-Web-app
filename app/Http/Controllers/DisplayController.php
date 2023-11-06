<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
    {
         $animals = Animal::all();
         $animalsData = Animal::select('gender', 'breed', 'name','status','internal_id')->get();
         $recordCount = Animal::count();
         return view('AnimalContent.display', compact('animals','recordCount','animalsData'));
     }
}
