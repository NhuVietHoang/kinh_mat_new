<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function CreateProduct(){
        $categories = Categories::all();
        $tags = Tag::all();
        // dd($tags);
        return view('backend.pages.product.Createproduct')->with([
            'categories'=>$categories,
            'tags' => $tags
        ]);
    }
    public function postCreateProduct(ProductRequest $request){
        try {
            $product             =  new Product();
            $product->name       = $request ->name;
            $product->unit_price = $request ->unit_price;
            $product->slug       = $request ->slug;
            $product->code       = $request ->code;
            $product->category_id= $request ->category;
            $product->description= $request ->description;
            if($request->hasfile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                // return $name;
                $path = public_path('backend/images');
                $file ->move($path,$name);
                $product ->images = $name;
             
            }
            $product ->save();
            

            $product->tags()->attach($request->tags);
        } catch (Exception $ex) {

        }
        // dd($request->hasFile('image'));
        
// dd(334343);
        
        return redirect()->back()->with('success','tạo sảm phẩm thành công');

    }
    public function getListprd(){
        $product = Product::all();
        return view('backend.pages.product.listproduct')->with([
            'products'=>$product,
        ]);
    }
    public function editProduct($id){
        $categories = Categories::all();

        $tags = Tag::all();
        
        $product = Product::find($id);
        $product_id = DB::table('product_tag')->where('product_id',$product->id)->get();
        
        // foreach($product_id as $id){
        //     $tags = Tag::find($id->id)->name;
        //     $tag[] = $tags;
        // }
        return view('backend.pages.product.EditProduct',[
                'product'   =>$product,
                'categories'=>$categories,
                // 'category'=>$category
                'tags'=>$tags

        ]);
    }
    public function posteditProduct(Request $request){
        // dd($request);
        $product             = Product::find($request->id);
        $product ->name      = $request->name;
        $product ->unit_price = $request->unit_price;
        $product ->slug      = $request->slug;
        $product ->images    = $request->image;
        $product ->category_id= $request->category;
        $product ->save();
        return redirect('list-product');
    }
    public function deleteproduct($id){
        $product = Product::find($id);
        // dd($product);
        $product->delete();
        return redirect('list-product');
    }
}
