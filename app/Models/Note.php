<?php

namespace App\Models;

use App\Models\TagNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    
    public function tagNote()
    {
        return $this->hasMany(TagNote::class);
    }
}
