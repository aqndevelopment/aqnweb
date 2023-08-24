<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kliens extends Model
{
    protected $table = 'tb_clients'; // Update the table name to match your existing table

    protected $primaryKey = 'id';   // Customize the primary key column name if needed

    protected $fillable = [
        'nama','desc','link','image'
    ];

    // Define relationships and other methods here
}
