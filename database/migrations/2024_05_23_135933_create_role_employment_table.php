<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('role_employment', function (Blueprint $table) {
            $table->id();
            $table->foreign('employment_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('role_id')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();

            $table->unique(['employment_id', 'role_id'], 'unique_employment_role');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role_employment');
    }
};
