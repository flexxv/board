<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class ShowController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        return view('admin.bulletin.show', compact('bulletin'));
    
    }
}

