<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_product', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("ownerId");
            $table->foreign("ownerId")->references("id")->on("owners");
            $table->unsignedBigInteger("productId");
            $table->foreign("productId")->references("id")->on("products");
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
        Schema::dropIfExists('owner_product');
    }
}
