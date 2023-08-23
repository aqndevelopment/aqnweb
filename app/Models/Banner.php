<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'tb_banner'; // Update the table name to match your existing table

    protected $primaryKey = 'id';   // Customize the primary key column name if needed

    protected $fillable = [
        'bg_image','image','small_title','title','link', 'desc', 'sort'
    ];

    // Define relationships and other methods here
}
