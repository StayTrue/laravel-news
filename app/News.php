<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class News extends Model
{
    public function category_name() {
        $category = Category::where('id', $this->category_id)->first();
        return $category->name;
    } 
}
