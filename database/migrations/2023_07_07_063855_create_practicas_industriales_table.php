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
        Schema::create('practicas_industriales', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_the_institution', 50);
            $table->date('reception_date');
            $table->string('cite_or_number', 25);
            $table->string('sender', 50);
            $table->string('addressee', 50);
            $table->string('reference', 100);
            $table->string('number_of_sheets', 10);
            $table->string('folder_name_and_year', 50);
            $table->string('observation', 100);
            $table->string('pdf', 1024);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas_industriales');
    }
};
