<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToktokDescription extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "details",
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

}
