<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use App\Http\Filters\BulletinFilter;
use App\Http\Requests\Bulletin\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request) {
        $data = $request->validated();
        
        $filter = app()->make(BulletinFilter::class, ['queryParams' => array_filter($data)]);
        $bulletins = Bulletin::filter($filter)->paginate(12);
        $categories = Category::all();
        
        
        return view('admin.bulletin.index', compact('bulletins', 'categories'));
    }
}

