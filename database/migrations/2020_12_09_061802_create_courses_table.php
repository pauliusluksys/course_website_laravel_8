<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('meta_title',50)->unique();
            $table->string('title',50)->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('creator',191);
            $table->integer('time_to_complete')->unsigned();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('level_id')->default('1');
            $table->unsignedBigInteger('voucher_id')->nullable();
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('level_id')->references('id')->on('levels');
            // $table->foreign('voucher_id')->references('id')->on('product_voucher')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
