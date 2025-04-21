<?php

namespace App\Livewire\Admin\Permission\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PermissionForm extends Form
{
  public string|null $name = null;

  public function rules()
  {
      return [
          'name' => 'required|string|max:255',
      ];
  }

  public function attributes()
  {
      return [
          'name' => 'name',
      ];
  }
}
