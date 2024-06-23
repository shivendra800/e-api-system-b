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
        Schema::create('mc_onboardings', function (Blueprint $table) {
            $table->id();
            $table->string('entityId');
            $table->string('mobileNo');
            $table->string('paymentAddress');
            $table->string('merchantAccountNo');
            $table->string('accountType');
            $table->string('ifsc');
            $table->string('merchantLegalName');
            $table->string('channelId');
            $table->string('aggregatorCode');
            $table->string('merchantId');
            $table->string('mcc');
            $table->string('terminalId');
            $table->string('gstIn');
            $table->string('storeId');
            $table->string('merchantGenre');
            $table->string('onboardingType');
            $table->string('isVerified');
            $table->string('res_qrData');
            $table->string('res_terminalId');
            $table->string('res_orgTxnId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mc_onboardings');
    }
};
