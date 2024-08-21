<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    function employer(){
        return $this->belongsTo(Employer::class);
    }
    function tag(string $value){
        $tag = Tag::firstOrCreate(["name"=> $value]);
        $this->tags()->attach($tag);
    }
    function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
