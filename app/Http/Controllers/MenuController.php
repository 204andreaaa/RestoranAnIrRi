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
        return view('user.menu', ['menus' => $menus],['menuss' => $menuss]);
    }

    public function cart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->nama,
            'price' => $request->harga,
            'quantity' => 1,
        ]);
        return redirect(url('/menu'));
    }
    public function checkout()
    {
        return view('user.checkout');
    }
    public function cartdelete(Request $r)
    {
        \Cart::remove($r->id);
        return redirect(url('/checkout'));
    }
    public function cartupdate(Request $r)
    {
        \Cart::update($r->id, [
            'quantity' => -1,
        ]);
        return redirect(url('/checkout'));
    }
    public function deleteallcart(Request $r)
    {
        \Cart::Clear();
        return redirect(url('/checkout'));
    }
    public function tambahPesanan(Request $r)
    {
        \Cart::update($r->id_tambah, [
            'quantity' => 1,
        ]);
        return redirect(url('/checkout'));
    }
    public function kurangPesanan(Request $r)
    {
        \Cart::update($r->id_kurang, [
            'quantity' => -1,
        ]);
        return redirect(url('/checkout'));
    }
}
