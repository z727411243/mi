<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建表
          Schema::create('liuyan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('author',32)->nullable();
            $table->text('content');
            $table->integer('addtime')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删除表
        Schema::drop("liuyan");
    }
}
