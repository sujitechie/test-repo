<?php

namespace App\Http\Livewire\Person;

use App\Models\Person;
use Livewire\Component;

class Create extends Component
{
    public Person $person;

    public function mount(Person $person)
    {
        $this->person = $person;
    }

    public function render()
    {
        return view('livewire.person.create');
    }

    public function submit()
    {
        $this->validate();

        $this->person->save();

        return redirect()->route('admin.people.index');
    }

    protected function rules(): array
    {
        return [
            'person.name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
