<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageFromCeo extends Model
{
    use HasFactory;
    protected $fillable = ['ceo_name', 'message', 'image'];

}
