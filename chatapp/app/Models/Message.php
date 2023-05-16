<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'conversation_id',
        'sender_id',
        'receiver_id',
        'last_time_message',
        'read',
        'body',
        'type'
    ];

    public function conversations()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
