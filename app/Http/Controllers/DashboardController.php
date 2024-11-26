<?php

namespace App\Http\Controllers;

use App\Models\AdminDashMain;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = AdminDashMain::with('subMenus')->get();
        return view('admin.layout.header', compact('menus'));
    }
}
