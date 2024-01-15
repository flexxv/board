<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke() {
        $categories = Category::all();
        return view('create', compact('categories'));
    }
}

