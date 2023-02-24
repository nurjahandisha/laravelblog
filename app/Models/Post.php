<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
      return $this->belongsTo(category::class);
    }

    
    public function subcategory(){
        return $this->belongsTo(subcategory::class);
}







}