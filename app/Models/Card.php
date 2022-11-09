<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'card';
    protected $primaryKey = 'id';
    protected $fillable = ['author', 'title', 'filter_id', 'htmlCode', 'cssCode', 'javascriptCode'];
}
