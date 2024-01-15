<?php

namespace App\Services\Bulletin;
use App\Models\Bulletin;

class Service {
    
    public function store($data) {
        Bulletin::create($data);
    }

    public function update($bulletin, $data) {
        $bulletin->update($data);
    }
}