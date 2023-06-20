<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = ['fotoProfile', 'namaLengkap', 'status', 'tempatTinggal', 'tanggalLahir', 'jenisKelamin', 'email', 'hobi', 'whatsapp', 'instagram', 'telegram', 'twittter'];
}
