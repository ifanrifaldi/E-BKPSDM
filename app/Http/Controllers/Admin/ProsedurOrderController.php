<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProsedurOrder;

class ProsedurOrderController extends Controller
{
    public function index()
    {
        $data['list_prosedur_order'] = ProsedurOrder::all();

        return view('backend.prosedur.order.index', $data);
    }

    
    public function store(Request $request)
    {
        $prosedur_order = New ProsedurOrder();
        $prosedur_order->nama = request('nama');
        $prosedur_order->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($prosedur_order)
    {
        $prosedur_order = ProsedurOrder::find($prosedur_order);
        $prosedur_order->nama = request('nama');
        $prosedur_order->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($prosedur_order)
    {
        ProsedurOrder::destroy($prosedur_order);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
