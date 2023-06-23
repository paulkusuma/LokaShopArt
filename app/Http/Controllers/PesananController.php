<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Http\Requests\StorepesananRequest;
use App\Http\Requests\UpdatepesananRequest;
use App\Models\pesanandetail;
use Illuminate\Http\Request;
use App\Models\product;
use Carbon\Carbon;
use Auth;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function pesan(Request $request, $slug)
    {
        $products = product::where('slug', $slug)->first();
        $tanggal = Carbon::now();

        // // Validasi Stok
        // if ($request->Jumpesan > $products->stok) {
        //     return redirect('pesanan/{product}');
        // }


        $cekPesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($cekPesanan)) {
            $pesanan = new pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->date = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumPrice = 0;
            $pesanan->save();
        }

        $pesananBaru = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $cekPesananDetail = pesanandetail::where('product_id', $products->id)->where('pesanan_id', $pesananBaru->id)->first();
        if (empty($cekPesananDetail)) {
            $pesanandetail = new pesanandetail;
            $pesanandetail->product_id = $products->id;
            $pesanandetail->pesanan_id = $pesananBaru->id;
            $pesanandetail->jumlah = $request->Jumpesanan;
            $pesanandetail->jumlah_harga = $products->price * $request->Jumpesanan;
            $pesanandetail->save();
        } else {
            $pesanandetail = pesanandetail::where('product_id', $products->id)->where('pesanan_id', $pesananBaru->id)->first();
            $pesanandetail->jumlah = $pesanandetail->jumlah + $request->Jumpesanan;

            $pesanandetailbaru = $products->price * $request->Jumpesanan;
            $pesanandetail->jumlah_harga = $pesanandetailbaru;
            $pesanandetail->update();
        }
        $pesanTotal = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanTotal->jumPrice = $pesanTotal->jumlah_harga + $products->price * $request->Jumpesanan;
        $pesanTotal->save();

        return redirect('/');

    }

    public function checkout()
    {
        $pesanTotal = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $detailpesanan = pesanandetail::where('product_id', $pesanTotal->id)->get();

        return view('dashboard.pesan.checkout', [
            'detailpesanan' => $detailpesanan
        ]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepesananRequest $request, pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesanan $pesanan)
    {
        //
    }
}