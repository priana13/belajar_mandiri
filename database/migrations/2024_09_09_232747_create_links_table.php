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

        // -> url
        // -> details
        // -> link_category_id
        // -> user_id

        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->text('detail')->nullable();
            $table->unsignedBigInteger('link_category_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
