<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parallax extends Model
{
    use HasFactory;
    public $table = 'parallax';
    protected $primaryKey = 'id';
    protected $fillable = ['parallax1','parallax2','parallax3'];
}
