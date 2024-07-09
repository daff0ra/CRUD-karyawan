<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','jabatan'];
    protected $table = 'karyawans';
    public $timestamps = false;
}
