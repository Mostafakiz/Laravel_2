<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    use HasFactory;
    protected $fillale=["productName","productPrice"];
    protected $table="products";
    public function category(){
        return $this->belongsToMany(ModelCategory::class);
    }
    public function owner(){
        return $this->belongsToMany(ModelOwner::class);
    }
    public function addProduct($data){
        return ModelProduct::create($data);
    }
}
