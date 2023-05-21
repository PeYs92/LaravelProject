<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('FirstName',50);
            $table->string('LastName',99);
            $table->enum('Gender',array('Male','Female'));
            $table->string('PhoneNumber',25);
            $table->string('Street',99);
            $table->string('City',99);
            $table->string('Country',99);
            $table->timestamps();
            
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};