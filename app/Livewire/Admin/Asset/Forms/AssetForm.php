<?php

namespace App\Livewire\Admin\Asset\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AssetForm extends Form
{
    public string|null $asesmen_id = null;
    public string|null $description = null;

    public function rules()
    {
        return [
            'masterSoalForm.id' => 'nullable|string',
            'masterSoalForm.name' => 'nullable|string',
            'masterSoalForm.description' => 'nullable|string',

        ];
    }

    public function attributes()
    {
        return [
            'masterSoalForm.id' => 'asesmen id',
            'masterSoalForm.name' => 'name',
            'masterSoalForm.description' => 'description',


        ];
    }

}
