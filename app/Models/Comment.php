<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
