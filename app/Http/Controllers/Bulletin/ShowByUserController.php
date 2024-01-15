<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class ShowByUserController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        return view('show_by_user', compact('bulletin'));
    
    }
}

