<?php
namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat    = Obat::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('obat', 'pembeli'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $obat                         = Obat::find($request->id_obat);
        $transaksi                    = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah            = $request->jumlah;
        $transaksi->id_obat           = $request->id_obat;
        $transaksi->id_pembeli        = $request->id_pembeli;
        $transaksi->total             = $obat->harga * $request->jumlah;
        $transaksi->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli   = Pembeli::all();
        $obat      = Obat::all();
        return view('transaksi.edit', compact('transaksi', 'pembeli', 'obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $obat                         = Obat::find($request->id_obat);
        $transaksi                    = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah            = $request->jumlah;
        $transaksi->id_obat           = $request->id_obat;
        $transaksi->id_pembeli        = $request->id_pembeli;
        $transaksi->total             = $obat->harga * $request->jumlah;
        $transaksi->save();
        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil Dihapus');
    }
}
