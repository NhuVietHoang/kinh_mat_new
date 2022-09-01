<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function createCategory(){
        return view('backend.pages.category.CreateCategory');
    }
    public function getListCategory(){
        $category = DB::table('Categories')->paginate(4);

        return view('backend.pages.category.ListCategory')->with([
            'categories'=>$category
        ]);
    }

    public function postCategory(CategoryRequest $request){
        $category = new Categories();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category ->save();
        return redirect('list-category');
    }

    public function editCategory($slug){
      $category = DB::table('categories')->where('slug',$slug)->get();
    
      return view('backend.pages.category.EditCategory')->with([
        'categories'=>$category
      ]);
    }
    public function posteditCategory(Request $request){
        $product = Categories::find($request->id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product ->save();
        return redirect('list-category');
    }

}
