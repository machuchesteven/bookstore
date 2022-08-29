<?php
namespace App;
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
            $table->foreignId('author_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('publisher_id')->constrained()->nullOnDelete();
            $table->foreign('added_by')->references('id')->on('users')->nullable()->onDelete('set null');
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
