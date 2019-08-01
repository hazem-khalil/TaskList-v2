<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Task extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publish($task)
    {
        Task::create([
            'name' => $task,
            'user_id' => auth()->id()
        ]);
    }  
}
