<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['estimate', 'development', 'callback']);
            $table->string('name');
            $table->string('phone');
            $table->text('description')->nullable();
            $table->enum('status', ['new', 'in_progress', 'review', 'done'])->default('new');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('requests');
    }
};
