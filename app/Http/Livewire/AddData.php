<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Livewire\Component;

class AddData extends Component
{
    public $role, $password , $email, $name;
    public $event;

    public function render()
    {
        return view('livewire.add-data');
    }
    public function edit($event)
{
    $this->event=null;
    if($event)
    {
        $this->event=$event;
        $this->name=$this->event->name;
        $this->password=$this->event->password;
    }
}
    public function store()
    {

        $this->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);


        Admin::Create([
            'name' => $this->name,
            'password' => $this->password,
            'role' => $this->role,
            'email' => $this->email,

        ]);

        session()->flash(
'm',
            'Data Created Successfully.'
        );


    }
}
