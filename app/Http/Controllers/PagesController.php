<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use App\Models\RecommendedProduct;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View {
        $data = array();
        $data['categories'] = Category::orderBy('title','ASC')->get();
        $data['subCategories'] = SubCategory::orderBy('title','ASC')->get();
        $data['shopItems'] = Deal::where('expire_time','<', Carbon::now()->toDateTime())->paginate(16);
        $data['recommendedItems'] = RecommendedProduct::paginate(3);
        $data['pallyItems'] = Product::paginate(16);

        return view('pages.index',$data);
    }
}
