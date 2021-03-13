<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Unit as UnitModel;

class Unit extends Component
{
    public function render()
    {
        $units = UnitModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.unit', [
            'units' => $units
        ]);
    }
}
