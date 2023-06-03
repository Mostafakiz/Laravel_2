<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelOwner extends Model
{
    use HasFactory;
    protected $fillable=["ownerName"];
    protected $table="owners";
    public function product(){
        return $this->belongsToMany(ModelProduct::class);
    }
    public function addOwner($data){
        return ModelOwner::create($data);
    }
}
