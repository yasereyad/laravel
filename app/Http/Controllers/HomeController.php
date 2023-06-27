<?php

namespace App\Http\Controllers;

use App\Models\Supject;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Semester;

class HomeController extends Controller
{
    public function index()
    {
             return view ('index');
    }
}
