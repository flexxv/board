<?php

namespace Database\Seeders;

use App\Models\Bulletin;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        Category::factory(1)->create([
            "title"=>"Автомобили",
            "image"=>"https://ulpravda.ru/pictures/news/middle/145268_middle.jpg"
        ]);

        Category::factory(1)->create([
            "title"=>"Недвижимость",
            "image"=>"https://aif-s3.aif.ru/images/030/603/ada72ccf4116658591bf31e73db00bdf.jpg"
        ]);

        Category::factory(1)->create([
            "title"=>"Электроника",
            "image"=>"https://opis-cdn.tinkoffjournal.ru/mercury/best-android-phones-9.yrfylfonin6j..jpg"
        ]);

        Category::factory(1)->create([
            "title"=>"Одежда, обувь, аксессуары",
            "image"=>"https://ss.sport-express.ru/userfiles/materials/187/1875288/volga.jpg"
        ]);

        Category::factory(1)->create([
            "title"=>"Для дома и дачи",
            "image"=>"https://davitamebel.ru/upload/resize_cache/product/841_631_1/e45c4c70-5cb9-11ec-aa34-00155db6cc01_im-00001452_kashemir-33/photo_00_im-00001452_kashemir-33_spalnyy-garnitur.jpg?1698757606"
        ]);

        Bulletin::factory(5)->create(
            [
                'title' => 'BMW X5 2019 года',
                'desc' => 'Продаю в идеальном состоянии, пройдено ТО, один владелец.',
                'price' => 3000000,
                'address' => 'Москва, ул. Ленина, 123',
                'image' => 'https://hips.hearstapps.com/hmg-prod/images/2024-bmw-x5-107-1675791495.jpg?crop=0.682xw:0.765xh;0.218xw,0.235xh&resize=768:*',
                'category_id' => 1,
                'user_id' => 1
            ]
        );

        Bulletin::factory(5)->create(
            [
                'title' => 'Уютная квартира в центре города',
                'desc' => '2-комнатная квартира с ремонтом, все удобства.',
                'price' => 7500000,
                'address' => 'Санкт-Петербург, Невский проспект, 45',
                'image' => 'https://novostroyki.shop/wp-content/uploads/2021/01/2250619.jpg',
                'category_id' => 2,
                'user_id' => 1
            ]
        );

        Bulletin::factory(5)->create(
            [
                'title' => 'iPhone 13 Pro 256 ГБ',
                'desc' => 'Современный смартфон с производительной камерой и мощным процессором.',
                'price' => 80000,
                'address' => 'Онлайн',
                'image' => 'https://spb-apple.ru/image/cache/catalog/Add/13promaxpro/30059052bb-700x700.jpg',
                'category_id' => 3,
                'user_id' => 1
            ]
        );

        Bulletin::factory(5)->create(
            [
                'title' => 'Куртка Columbia Windbreaker',
                'desc' => 'Легкая и стильная куртка для активного отдыха.',
                'price' => 5000,
                'address' => 'Челябинск, ТРЦ "Мега"',
                'image' => 'https://ir.ozone.ru/s3/multimedia-o/c1000/6617338260.jpg',
                'category_id' => 4,
                'user_id' => 1
            ]
        );

        Bulletin::factory(5)->create(
            [
                'title' => 'Садовое качельное кресло',
                'desc' => 'Удобное кресло для отдыха на свежем воздухе.',
                'price' => 3500,
                'address' => 'Новосибирск, ул. Гагарина, 78',
                'image' => 'https://baltiya-garden.ru/images/detskie-ploshchadki/stol/kacst/image-22-07-16-16_25-4.jpg.jpeg',
                'category_id' => 5,
                'user_id' => 1
            ]
        );

        

        
       
    }
}
