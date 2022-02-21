<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanBerita extends Controller
{
    public function berita($id){
        echo "Ini Halaman Berita : " .$id;
    }
}
