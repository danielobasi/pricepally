<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public string $search = "";
    public function render()
    {
        return view('livewire.search',[
            "foodItems" => strlen($this->search) > 3 ? Product::where('name','LIKE', "%$this->search%")->paginate(10):[],
            "users" => strlen($this->search) > 3 ? User::where('name','LIKE', "%$this->search%")->paginate(10):[]
        ]);
    }
}
