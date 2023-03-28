<?php

namespace App\Http\Livewire;

use App\Models\Deal;
use Carbon\Carbon;
use Illuminate\View\View;
use Livewire\Component;

class Deals extends Component
{
    public int $perPage = 5;
    public function load(){
        $this->perPage += 5;

    }
    public function mount(){

    }
    public function render():View
    {
        return view('livewire.deals',[
            "deals" => Deal::where('expire_time','>', Carbon::now()->toDateTime())->paginate($this->perPage)
        ]);
    }
}
