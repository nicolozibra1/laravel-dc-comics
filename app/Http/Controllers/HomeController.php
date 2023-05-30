<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function home(){
        $comics = Comic::inRandomOrder()->limit(3)->get();
        $data = [
            'comics' => $comics,
        ];
        return view('home', $data);
    }
}
