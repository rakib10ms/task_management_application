<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Task extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
