<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity')->nullable()->default(0);
            $table->integer('unit_price')->nullable()->default(0);
            $table->string('slug');
            $table->integer('import_price')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->integer('category_id');
            $table->integer('status')->nullable()->default(0);
            $table->string('images');
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
        Schema::dropIfExists('products');
    }
};
