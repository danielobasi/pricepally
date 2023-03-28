<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class PallyItems extends Component
{
    public int $perPage = 5;
    public function render():View
    {
        return view('livewire.pally-items',[
            "pallyItems" => Product::query()->paginate($this->perPage)
        ]);
    }
}
