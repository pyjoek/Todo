<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = ["title","description"];

    public function categories()
    {
        return $this->hasMany(article::articles);
    }
}
