<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagNote extends Model
{
    use HasFactory;

    public function note()
    {
        return $this->belongsTo(Note::class);
    }
  
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
