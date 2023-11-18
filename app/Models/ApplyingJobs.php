<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ApplyingJobs extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->hasOneThrough(User::class, UserProfile::class);
    }

    public function job(){
        return $this->belongsTo(PerusahaanJobShare::class);
    }
}
