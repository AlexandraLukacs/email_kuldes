<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LibUser extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    
    protected $fillable = [
        'name',
        'email',
        'permission'
    ];

    
    public function isAdmin()  {
        return $this->role === 0;
    }
}
