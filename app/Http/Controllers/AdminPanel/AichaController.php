<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AichaController extends Controller
{
    public function index()
    {
        return view("homeAdminP.adminindex");
    }
}
