<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cake extends Model
{
    use HasFactory;

    protected $fillable = ['name','price', 'chef_id'];

    public function chef(){
        return $this->belongsTo(chef::class);
    }
}
