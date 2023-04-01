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
        Schema::create('studentens', function (Blueprint $table) {
            $table->id();
            $table->string('student_nummer');
            $table->string('Klas');
            $table->string('naam');
            $table->string('adres');
            $table->string('email');
            $table->string('telefoon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentens');
    }
};
