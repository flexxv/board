<?php

namespace App\Http\Controllers\Bulletin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bulletin\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Bulletin;
use App\Models\Category;

class UpdateByUserController extends BaseController
{
    public function __invoke(UpdateRequest $request, Bulletin $bulletin) {
        
        $data = $request->validated();
        $this->service->update($bulletin, $data);
        return redirect()->route('show_by_user', $bulletin->id);
    }
}

