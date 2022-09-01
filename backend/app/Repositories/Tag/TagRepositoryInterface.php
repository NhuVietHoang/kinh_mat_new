<?php
namespace App\Repositories\Tag;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Repositories\RepositoryInterface;

interface TagRepositoryInterface extends RepositoryInterface
{
    public function getAllTag();
}
?>