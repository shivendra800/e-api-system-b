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
        Schema::create('revoke_mandates', function (Blueprint $table) {
            $table->id();
            $table->string('entityId');
            $table->string('umn');
            $table->string('refId');
            $table->string('channelId');
            $table->string('aggregatorCode');
            $table->string('resresult');
            $table->string('resvalidityStart');
            $table->string('resvalidityEnd');
            $table->string('resamount');
            $table->string('respayeeAddr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revoke_mandates');
    }
};
