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
        Schema::create('call_back_mandate_creations', function (Blueprint $table) {
            $table->id();
            $table->string('entityId');
            $table->string('payeevpa')->nullable();
            $table->string('payervpa')->nullable();
            $table->string('txnnote')->nullable();
            $table->string('transactiontimestamp')->nullable();
            $table->string('mandateamount')->nullable();
            $table->string('responsecode');
            $table->string('responsemessage');
           
            $table->string('mandatetxnid')->nullable();
            $table->string('refId')->nullable();
            $table->string('frequency')->nullable();
            $table->string('validitystart')->nullable();
            $table->string('validityend')->nullable();
            $table->string('rrn');
            $table->string('checksum');

            $table->string('status');
            $table->string('callbackstatuscode')->nullable();
            $table->string('callbackstatusdescription')->nullable();
            $table->string('callbacktxnid')->nullable();
            $table->string('message')->nullable();
            $table->string('responseobject')->nullable();

            $table->string('umn');
            $table->string('merchant_id');
            $table->string('payer_name');
            $table->string('payee_name');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_back_mandate_creations');
    }
};
