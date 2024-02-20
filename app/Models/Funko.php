<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funko extends Model
{
    protected $fillable= ['nombre','modelo','precio','cantidad','isDeleted'];
    use HasFactory;
    public function categoria()

    {
        return $this->belongsTo(Categoria::class);

    }
}
