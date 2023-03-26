<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View {
        $data = array();
        //$data['categories'] = Category::orderBy('name','ASC')->get();

        return view('pages.index',$data);
    }
}
