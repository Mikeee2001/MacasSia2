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
        Schema::create('return', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name');
            $table->timestamps();
            $table->unsignedBigInteger("borrower");
            $table->foreign("borrower")->references("id")->on("borrower")->onDelete("cascade")->onUpdate("cascade");
            
            $table->unsignedBigInteger("Return_bookcopyID");
            $table->foreign("Return_bookcopyID")->references("id")->on("book_copy")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return');
    }
};
