<?php

namespace App\Http\Filters;
use Illuminate\Database\Eloquent\Builder;

class BulletinFilter extends AbstractFilter{
    public const TITLE = "title";
    public const DESC = "desc";
    public const PRICE = "price";
    public const ADDRESS = "address";
    
    public const CATEGORY_ID = "category_id";

    protected function getCallbacks(): array{
        return [
            self::TITLE => [$this, 'title'],
            self::DESC => [$this, 'desc'],
            self::PRICE => [$this, 'price'],
            self::ADDRESS => [$this, 'address'],
            self::CATEGORY_ID => [$this, 'category_id']

        ];
    }

    public function title(Builder $builder, $value) {
        $builder ->where("title","like","%{$value}%");
    }

    public function desc(Builder $builder, $value) {
        $builder ->where("desc","like","%{$value}%");
    }

    public function price(Builder $builder, $value) {
        
        $valueSplited = explode("-", $value);
        //dd($builder->price);
        $builder ->whereBetween("price", $valueSplited);
    }

    public function address(Builder $builder, $value) {
        $builder ->where("address","like","%{$value}%");
    }

    public function category_id(Builder $builder, $value) {
        $builder ->where("category_id", $value);
    }

}
