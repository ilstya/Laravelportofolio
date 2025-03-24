<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'API Laravel untuk E-Commerce',
                'description' => 'Membangun REST API.',
                'image' => 'https://cdn.pixabay.com/photo/2017/08/30/07/56/code-2691125_1280.jpg'
            ],
            [
                'title' => 'Sistem Manajemen Pengguna',
                'description' => 'Membuat sistem CRUD dengan Laravel dan MySQL.',
                'image' => 'https://cdn.pixabay.com/photo/2016/11/19/14/16/code-1839406_1280.jpg'
            ],
            [
                'title' => 'Otomasi Testing dengan Selenium',
                'description' => 'pengujian otomatis menggunakan Selenium dan Cucumber',
                'image' => 'https://cdn.pixabay.com/photo/2016/06/19/12/51/laptop-1466822_1280.jpg'
            ]
        ];

        return view('home', compact('projects'));
    }
}
