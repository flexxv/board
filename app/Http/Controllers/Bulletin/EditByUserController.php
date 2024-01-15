<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class EditByUserController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        $categories = Category::all();
        return view('edit_by_user', compact('bulletin','categories'));
    }
}

