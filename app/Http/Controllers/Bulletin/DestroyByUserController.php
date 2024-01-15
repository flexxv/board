<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class DestroyByUserController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        $bulletin->delete();
        return redirect()->route('index_by_user');
    }
}

