<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
    dd($request);
    }
}
