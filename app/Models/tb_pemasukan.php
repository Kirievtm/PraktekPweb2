<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pemasukan extends Model
{
    use HasFactory;
    
    // public $timestamps = false;
    // protected $primarykey = 'id_pemasukan';
    protected $table = 'tb_pemasukan';
    protected $guarded = [];
    
    
}
