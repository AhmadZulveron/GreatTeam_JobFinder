<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerusahaanJobShare extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function applyJob(){
        return $this->hasMany(ApplyingJobs::class);
    }
}
