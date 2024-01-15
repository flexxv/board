<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use App\Http\Filters\BulletinFilter;
use App\Http\Requests\Bulletin\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request) {

        
        
        $data = $request->validated();
        
        $filter = app()->make(BulletinFilter::class, ['queryParams' => array_filter($data)]);
        $bulletins = Bulletin::filter($filter)->paginate(12);
        $categories = Category::all();
        //dd($bulletins);
        //$bulletins = $query -> get();
        //$bulletins = Bulletin::where(12);
        //$bulletins = Bulletin::where(12);
        
        return view('main', compact('bulletins', 'categories'));
    }
}

