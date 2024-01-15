<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bulletin\StoreRequest;
use App\Http\Resources\Bulletin\BulletinResource;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class StoreByUserController extends BaseController
{
    public function __invoke(StoreRequest $request) {
        
        $data = $request->validated();
    
        $this->service->store($data);

        
        return redirect()->route('index_by_user');
        
    }
}

