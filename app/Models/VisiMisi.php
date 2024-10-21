<?php
// app/Models/VisiMisi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda, tambahkan properti ini
    protected $table = 'visi_misi';
}
