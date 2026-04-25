<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //inisialisasi table
    protected $table = 'buku';

    //inisialisasi PK
    protected $primariKey = 'id';

    //kolom data yang bisa diisi
    //protected $filabel = ['judul', 'penulis', 'tahun_terbit'];

    //kolom data yang tidak boleh diisi
    protected $guarded = ['id'];
}
