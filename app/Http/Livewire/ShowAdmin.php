<?php

namespace App\Http\Livewire;
use App\Models\Admin;

use Livewire\Component;

class ShowAdmin extends Component
{

        public $data;

    public function render()
    {
        $this->data=Admin::orderBy('id', 'desc')->get();


        return view('livewire.show-admin');
    }
}
