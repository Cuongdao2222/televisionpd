<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\product;

use App\Models\groupProduct;

class categoryController extends Controller
{
    public function index($slug)
    {

        $link = trim($slug);

        $findID = groupProduct::where('link', $link)->first();

        if(empty($findID)){
            abort('404');
        }
        
        $data = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.Name', 'products.Image', 'products.ProductSku', 'products.Price', 'products.Link', 'group_product.link')->where('group_product.id', $findID->id)->get();

        return view('Frontend.category')->with('data', $data);
    }

    public function details($slug)
    {
        $link = trim($slug);

        $findID = product::where('link', $link)->first();

        if(empty($findID)){
            abort('404');
        }

        $data =  product::findOrFail($findID->id);

        return view('Frontend.details', compact('data'));
    }
}
