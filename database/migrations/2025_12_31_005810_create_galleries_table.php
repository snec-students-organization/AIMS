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
        // database/migrations/xxxx_xx_xx_create_galleries_table.php

Schema::create('galleries', function (Blueprint $table) {
    $table->id();
    $table->string('title')->nullable();
    $table->string('category')->nullable(); // Therapy, Activities, Events
    $table->string('image');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
