<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];

    //salesPerson
    public function salesPerson(){
        return $this->belongsTo(SalesPerson::class,'sales_people_id');
    }
    //teamLeader
    public function teamLeader(){
        return $this->belongsTo(TeamLeader::class,'team_leader_id');
    }
    //lead
    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}
