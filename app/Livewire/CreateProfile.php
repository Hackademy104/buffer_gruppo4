<?php

namespace App\Livewire;

use Livewire\Component;

class CreateProfile extends Component
{
    public $name;
    public $surname;
    public $age;
    public $country;
    public $sex;

    protected $rules = [
        'name' => 'required|min:3',
        'surname' => 'required|min:3',
        'age' => 'required',
        'country' => 'required',
        'sex' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Il nome deve essere obbligatorio',
        'name.min' => 'Il nome deve rispettare minimo tre caratteri',
        'surname.required' => 'Il cognome deve essere obbligatorio',
        'surname.min' => 'Il cognome deve rispettare minimo tre caratteri',
        'age.required' => 'L`età deve essere obbligatoria',
        'country.required' => 'Il Paese deve essere obbligatorio',
        'sex.required' => 'Il sesso deve essere obbligatorio',
    ];


    public function render()
    {
        return view('livewire.create-profile');
    }
}
