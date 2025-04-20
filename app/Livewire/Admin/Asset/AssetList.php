<?php

namespace App\Livewire\Admin\Asset;

use Livewire\Component;
use App\Models\Asesmen;
use App\Models\Pertanyaan;
use App\Livewire\Admin\Pertanyaan\Forms\PertanyaanForm;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class AssetList extends Component
{
    public $title = '';
    public $url = '';

    public function render()
    {
        return view('livewire.admin.asset.asset-list')
        ->title($this->title);
    }
}
