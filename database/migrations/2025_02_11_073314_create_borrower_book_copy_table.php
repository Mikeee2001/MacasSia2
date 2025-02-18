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
        Schema::create('borrower_book_copy', function (Blueprint $table) {
            $table->id('id');
            $table->date('Duedate');
            $table->timestamps();

            $table->unsignedBigInteger("borrower_copyID");
            $table->foreign("borrower_copyID")->references("id")->on("borrower")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrower_book_copy');
    }
};
