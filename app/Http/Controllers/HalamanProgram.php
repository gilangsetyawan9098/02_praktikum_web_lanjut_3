<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgram extends Controller
{
    public function JAVA(){
        echo "Halaman ini menunjukkan program menggunakan bahasa JAVA";
    }
    public function PYTHON(){
        echo "Halaman ini menunjukkan program menggunakan bahasa PYTHON";
    }
    public function CPLUS(){
        echo "Halaman ini menunjukkan program menggunakan bahasa C++";
    }
    public function PHP(){
        echo "Halaman ini menunjukkan program menggunakan bahasa PHP";
    }
}
