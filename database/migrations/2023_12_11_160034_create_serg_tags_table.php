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
        Schema::create('serg_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->index('post_id', 'sergl_tag_sergl_idx');
            $table->index('tag_id', 'sergl_tag_tag_idx');
            $table->foreign('post_id', 'sergl_tag_sergl_fn')->on('segls')->references('id');
            $table->foreign('tag_id', 'sergl_tag_tag_fn')->on('tags')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serg_tags');
    }
};
