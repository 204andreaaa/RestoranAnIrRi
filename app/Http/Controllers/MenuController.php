<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all()->where('kategori', 1);
        $menuss = Menu::all()->where('kategori', 2);
        return view('user.index', ['menus' => $menus],['menuss' => $menuss]);
    }
}
