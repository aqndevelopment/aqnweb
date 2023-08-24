<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    protected $table = 'tb_karyawan'; // Update the table name to match your existing table

    protected $primaryKey = 'id';   // Customize the primary key column name if needed

    protected $fillable = [
        'image','nama','posisi','desc','linkedin','sort'
    ];

    // Define relationships and other methods here
}
