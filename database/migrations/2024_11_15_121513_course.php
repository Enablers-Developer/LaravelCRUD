<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();               
            $table->string('cid')->unique();     
            $table->string('cname');     
            $table->string('clocation'); 
            $table->string('cfee');
            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
