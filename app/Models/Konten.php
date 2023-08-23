<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'tb_konten'; // Update the table name to match your existing table

    protected $primaryKey = 'id';   // Customize the primary key column name if needed

    protected $fillable = [
        'title','desc','link','image'
    ];

    // Define relationships and other methods here
}
