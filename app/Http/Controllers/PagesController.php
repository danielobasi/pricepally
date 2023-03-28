<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View {
        $data = array();
        $data['categories'] = Category::orderBy('title','ASC')->get();
        $data['subCategories'] = SubCategory::orderBy('title','ASC')->get();
        $data['adverts'] = Advert::where('status','active')->get();

        return view('pages.index',$data);
    }
    public function search(Request $request):View {


    }
}
