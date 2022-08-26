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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('cover_path')->nullable();
            $table->string('year_of_publication')->nullable();
            $table->foreign('author_id')->references('authors')->on('id')->onDelete('null');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('null');
            $table->foreign('added_by')->references('name')->on('users')-onDelete('null');
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
};
