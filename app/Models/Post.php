<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'slug', 'content', 'date', 'user_id'];
    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
