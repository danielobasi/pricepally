<?php

namespace App\Http\Livewire;

use App\Models\RecommendedProduct;
use Illuminate\View\View;
use Livewire\Component;

class RecommendedItems extends Component
{
    public int $perPage = 4;
    public function load(){
        $this->perPage += 4;
    }
    public function render():View
    {
        return view('livewire.recommended-items',[
            "recommendedItems" => RecommendedProduct::query()->paginate($this->perPage)
        ]);
    }
}
