<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
           $table->increments('pr_id');
            $table->string('pr_name');
            $table->string('pr_slug');
            $table->integer('pr_price');
            $table->string('pr_img');
            $table->string('pr_waranty');
            $table->string('pr_accessories');
            $table->string('pr_condition');
            $table->string('pr_promotion');
            $table->tinyInteger('pr_status');
            $table->string('pr_description');
            $table->tinyInteger('pr_featured');
            $table->integer('pr_idcategory')->unsigned();
            $table->foreign('pr_idcategory')
                  ->references('ca_id')
                  ->on('icategory')
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
        Schema::dropIfExists('product');
    }
}
