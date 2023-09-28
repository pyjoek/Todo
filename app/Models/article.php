<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = "articles";
    protected $fillable = ["title","description","category_id"];

    public function articles()
    {
    return $this->belongsTo(category::category);
    }

}
