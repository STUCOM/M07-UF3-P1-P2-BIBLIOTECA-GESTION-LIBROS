<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
      'name',
    ];

    public function books()
{
    return $this->belongsToMany(Book::class, 'book_category');
}

}
