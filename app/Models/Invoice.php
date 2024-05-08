<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function items(){
        return $this->belongsToMany(Item::class,'item_invoice')->withPivot('quantity','amount');
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function salesperson(){
        return $this->belongsTo(SalesPerson::class,'sales_people_id');
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
