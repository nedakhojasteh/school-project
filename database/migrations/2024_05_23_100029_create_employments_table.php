<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('telephone');
            $table->string('address');
            $table->string('degree');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};
