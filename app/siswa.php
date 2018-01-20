<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    
    protected $table = 'siswas';
    protected $fillable = ['nis','nama_siswa','alamat','tempat_lahir','cita_cita','tanggal_lahir','hobi'];
}
