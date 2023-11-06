<?php

namespace App\Http\Livewire;
// Import the Treatment model
use Livewire\Component;
use App\Models\Treatment;
use App\Models\Animal;
class Products extends Component
{
    public $selectedTreatments = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $designTemplate = 'tailwind';


   // public function mount()
    //{
     //   $this->selectedTreatments = collect();
    //}

    public function render()
{
   $bulkDisabled = count($this->selectedTreatments) < 1;

    return view('AnimalContent.showtreatment' . $this->designTemplate . '.treatments', [
        'treatments' => Treatment::get(),

        'bulkDisabled' => $bulkDisabled,
    ]);
}


    public function deleteSelected()
    {
        Treatment::query()
            ->whereIn('id', $this->selectedTreatments)
            ->delete();
        $this->selectedTreatments = [];
        $this->selectAll = false;
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedTreatments = Treatment::pluck('id');
        } else {
            $this->selectedTreatments = [];
        }
    }
}
