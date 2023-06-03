<?php

namespace App\Http\Controllers;

use App\Models\ModelCategory;
use App\Models\ModelProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function inseret(Request $request){
    //     $categoryId=ModelCategory::find($request->id);
    //     $product=$categoryId->products()->create([
    //         'productName'=>$request->input('prodeuctName'),
    //         'productPrice'=>$request->input('productPrice')]);
    //     $product->owner()->associate($product)->save();
    // }
}
