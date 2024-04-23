<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPerson extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function teamLeader(){
        return $this->belongsTo(TeamLeader::class,'teamLeader_id');
    }

}
