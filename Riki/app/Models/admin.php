<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $tables = "admin";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $KeyType = "string";
}
