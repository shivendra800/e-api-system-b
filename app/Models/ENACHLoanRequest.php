<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class ENACHLoanRequest extends Model
{
    use HasFactory,HasApiTokens;
    public function mconboarding()
    {
         return $this->belongsTo(McOnboarding:: class,'mconboardingid','id');
    }
    public function mcmandateqr()
    {
         return $this->belongsTo(McMandateQr:: class,'mcmandateqrid','id');
    }
}
