<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class HomeController extends Guest
{
    public function index()
    {
        $all_ospiti = Guest::all();
        $data = [
            'ospiti' => $all_ospiti
        ];
        return view('welcome',$data);
    }
}
