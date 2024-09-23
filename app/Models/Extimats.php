<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extimats extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function items(){
        return $this->belongsToMany(Item::class,'extimat_item')->withPivot('quantity','amount');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
    public function item(){
        return $this->belongsTo(Item::class,'item_id');
    }
}
