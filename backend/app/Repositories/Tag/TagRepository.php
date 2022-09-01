<?php 

namespace App\Repositories\Tag;

use App\Repositories\Tag\TagRepositoryInterface;
use App\Models\Tag;
use App\Repositories\RepositoryInternface;
use App\Repositories\BaseRepository;
use GuzzleHttp\Promise\Create;

 class TagRepository extends BaseRepository implements TagRepositoryInterface{

    /**
     * @return void
     */
        public function getModel()
        {
            return Tag::class;
        }
        public function getAllTag()
        {
          
            return $this->model->getAll();
        }
        public function create($attributes = [])
        {
            
        }
        public function update($id, $attributes = [])
        {
            
        }
        
 }


