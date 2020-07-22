<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('cm_id');
            $table->string('cm_name');
            $table->string('cm_email');
            $table->string('cm_content');
            $table->integer('cm_idproduct')->unsigned();
            $table->foreign('cm_idproduct')
                     ->references('pr_id')
                     ->on('product')
                     ->onDelete('cascade');          
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
        Schema::dropIfExists('comment');
    }
}
