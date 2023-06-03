<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;
    protected $fillable=["categoryName"];
    protected $table="categories";
    public function products(){
        return $this->hasMany(ModelProduct::class);
    }
    public function addCategory($data){
        return ModelCategory::create($data);
    }
}
