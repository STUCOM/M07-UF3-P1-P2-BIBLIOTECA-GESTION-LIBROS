<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
  use HasFactory;
  public $timestamps = true;
    
    protected $fillable = [
      'isbn',
      'title',
      'author',
      'published_date',
      'description',
      'price',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($book) {
            $book->isbn = $book->generateISBN();
        });
    }

    public function generateISBN()
        {
            $isbn = '000'; 
            $isbn .= rand(100, 800);
            return $isbn;
    }
    


    public function categories()
{
    return $this->belongsToMany(Category::class, 'book_category');
}
}