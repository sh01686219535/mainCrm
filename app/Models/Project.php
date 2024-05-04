<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Relationship Between Project and Customer
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
