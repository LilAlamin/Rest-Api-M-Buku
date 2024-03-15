<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $primaryKey = 'id'; // Perubahan dilakukan disini
    protected $fillable = ['judul','author','publish_date'];
}
