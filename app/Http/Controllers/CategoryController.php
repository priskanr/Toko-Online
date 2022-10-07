<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
   app/Http/Controllers/HomeController.php  * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = category::all();
        $products = product::with(['galleries'])->paginate(32);

        return view('pages.category',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }
    /**
   app/Http/Controllers/HomeController.php  * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request, $slug)
    {
        $categories = category::all();
        $category = category::where('slug', $slug)->firstOrFail();
        $products = product::with(['galleries'])->where('categories_id', $category->id)->paginate(32);

        return view('pages.category',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
