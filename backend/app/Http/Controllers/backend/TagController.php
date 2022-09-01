<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
// use Repositories\Tag\TagRepositoryInterface;

use App\Repositories\Tag\TagRepositoryInterface;

class TagController extends Controller
{
    //
    protected $TagRepository;
    public function __construct(TagRepositoryInterface $TagRepository)
    {
        $this->TagRepository = $TagRepository;
   
       
    }
    public function createTag(){
        return view('backend.pages.tag.createTag');
    }
    public function postTag(Request $request){
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag ->save();
        return redirect('create-tag')->with('success','thêm tag thành công');
    }
    public function getTag(){
    
        $tag = $this->TagRepository->getAll();
        return view('backend.pages.tag.listTag')->with([
            'tags'=>$tag
        ]);
    }
}
