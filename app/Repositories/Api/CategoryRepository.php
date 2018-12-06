<?php

namespace App\Repositories\Api;

use Hashids;
use App\Category;
use App\Contracts\Api\CategoryInterface;

class CategoryRepository extends ApiRepository implements CategoryInterface
{
    /**
     *
     */
    protected $category;

    /**
     *
     *
     *
     */
    public function __construct(Category $category)
    {
        parent::__construct();

        $this->category = $category;
    }

    /**
     *
     *
     *
     */
    public function getAllCategories()
    {
        return $this->user->categories()->paginate($this->per_page);
    }

    /**
     *
     *
     *
     */
    public function getCategory($hash_id)
    {
        $id = Hashids::decode($hash_id);
        
        return $this->category->find($id);
    }
}
