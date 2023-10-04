<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        return 'ini Controller bagian show pada path News';
    }
    public function create()
    {
        return 'ini Controller bagian create pada path News';
    }
}
