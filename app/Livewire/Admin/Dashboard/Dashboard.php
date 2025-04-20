<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Mary\Traits\Toast;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Admin\Dasbor\Forms\UserForm;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\ModelHasRoles;
use App\Models\RoleHasPermission;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Illuminate\Support\Str;
use Spatie\Permission\PermissionRegistrar;

class Dashboard extends Component
{
    use Toast;
    public $url = '/dashboard';
    public $title = 'Dashboard';
    public $modalUser = false;


    public function render()
    {
        return view('livewire.admin.dashboard.dashboard')
        ->title($this->title);
    }


}

