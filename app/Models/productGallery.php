<?php

namespace App\Models;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productGallery extends Model
{
    public $table = "products_galleries";

    protected $fillable = [
        'photos','products_id',
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->belongsTo(product::class, 'products_id', 'id');
    }

    use HasFactory;
}
