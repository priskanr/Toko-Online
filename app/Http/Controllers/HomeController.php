<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;

class HomeController extends Controller
{
    /**
   app/Http/Controllers/HomeController.php  * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = category::take(6)->get();
        $products = product::with(['galleries'])->take(8)->get();

        return view('pages.home',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
