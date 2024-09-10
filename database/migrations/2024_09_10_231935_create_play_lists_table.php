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
        Schema::create('play_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('details')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('links', function (Blueprint $table) {                 
            $table->unsignedBigInteger('play_list_id');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('play_lists');

        Schema::create('links', function (Blueprint $table) {                 
            $table->dropColumn('play_list_id');
           
        });
    }
};
