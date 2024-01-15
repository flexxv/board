<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;
use App\Services\Bulletin\Service;

class BaseController extends Controller
{
    public $service;


    public function __construct(Service $service) {
        $this->service = $service;
    }

}

