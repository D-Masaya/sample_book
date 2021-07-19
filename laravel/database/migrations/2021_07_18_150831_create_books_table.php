<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // todo データベースのカラムを定義する
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false)->comment('ユーザーID');
            $table->unsignedBigInteger('category_id')->nullable(false)->comment('カテゴリーID');
            $table->string('name')->nullable(false)->comment('本の名前');
            $table->text('message')->nullable()->comment('本の感想');
            $table->string('photo')->nullable(false)->comment('本の写真ファイルまでのpath');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
