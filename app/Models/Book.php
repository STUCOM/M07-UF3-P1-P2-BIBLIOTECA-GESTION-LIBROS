<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public $timestamps = true;
    use HasFactory;
    protected $fillable = [
      'isbn',
      'title',
      'author',
      'published_date',
      'description',
      'price',
    ];
}