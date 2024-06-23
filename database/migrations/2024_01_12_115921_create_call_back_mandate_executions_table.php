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
        Schema::create('call_back_mandate_executions', function (Blueprint $table) {
            $table->id();
            $table->string('merchId');
            $table->string('merchantvpa');
            $table->string('customervpa');
            $table->string('merchanttransactionid');
            $table->string('transactiontimestamp');
            $table->string('transactionamount');
            $table->string('gatewaytransactionid');
            $table->string('gatewayresponsecode');
           
            $table->string('gatewayresponsemessage');
            $table->string('rrn');
            $table->string('checksum');
            $table->string('status');
            $table->string('callbackstatuscode')->nullable();
            $table->string('callbackstatusdescription')->nullable();
            $table->string('callbacktxnid')->nullable();
            $table->string('message')->nullable();
            $table->string('responseobject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_back_mandate_executions');
    }
};
