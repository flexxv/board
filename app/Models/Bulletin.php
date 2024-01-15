<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Bulletin extends Model
{
    use HasFactory;
    use softDeletes;
    use Filterable;

    protected $guarded = [];
    protected $table = 'bulletins';

    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
