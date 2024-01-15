<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class EditController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        $categories = Category::all();
        return view('admin.bulletin.edit', compact('bulletin','categories'));
    }
}

