<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use App\Models\RecommendedProduct;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View {
        $data = array();
        $data['categories'] = Category::orderBy('title','ASC')->get();
        $data['subCategories'] = SubCategory::orderBy('title','ASC')->get();
//        $data['deals'] = Deal::where('expire_time','>', Carbon::now()->toDateTime())->paginate(16);
//        $data['recommendedItems'] = RecommendedProduct::paginate(3);
//        $data['pallyItems'] = Product::paginate(16);
        $data['adverts'] = Advert::where('status','active')->get();

        return view('pages.index',$data);
    }
    public function search():View {

    }
}
