<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_copy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("book_copyID");
            $table->foreign("book_copyID")->references("id")->on("borrower_book_copy")->onDelete("cascade");
      
            $table->unsignedBigInteger("bookID");
            $table->foreign("bookID")->references("id")->on("book")->onDelete("cascade");
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_copy');
    }
};
