<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class DestroyController extends BaseController
{
    public function __invoke(Bulletin $bulletin) {
        $bulletin->delete();
        return redirect()->route('admin.bulletin.index');
    }
}

