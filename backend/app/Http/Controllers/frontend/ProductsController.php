<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function getProduct($slug){
        $product =  DB::table('products')->where('slug',$slug)->get();
        // dd($product);
        // $comment = DB::table('comments')->where('id_product',$product->id)->get();
        
        return view('frontend.pages.product')->with([
            'products'=>$product,
            // 'comments'=>$comment
        ]);
    }

    public function postComment(CommentRequest $request){
        // dd($request->content);
       $comment = new Comment();
       $comment->id_customer = $request->id_customer;
       $comment->id_product  = $request->id_product;
       $comment->content    = $request->content;
       $comment->save();
       return redirect();
    }
}
