<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->text('desc')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('price');
            $table->string('phone');
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'bulletin_category_idx');
            $table->foreign('category_id', 'bulletin_category_fk')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'bulletin_user_idx');
            $table->foreign('user_id', 'bulletin_user_fk')->references('id')->on('users');
            

            //$table->foreign('category_id', 'bulletin_category_fk')->on('categories')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletins');
    }
}
