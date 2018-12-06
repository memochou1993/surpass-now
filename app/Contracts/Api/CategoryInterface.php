<?php

namespace App\Contracts\Api;

interface CategoryInterface
{
    public function getAllCategories();
    public function getCategory($hash_id);
}
