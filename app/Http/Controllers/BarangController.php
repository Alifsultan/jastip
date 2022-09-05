<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BarangController extends Controller
{
    
    public function index()
    {
       $barang = barang::latest()->paginate();
        return view('/page/barang_index',compact('barang'))->with('i');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/page/barang_add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat_kirim' => 'required',
            'nama_barang' => 'required',
            'harga_barjas' => 'required',
            'pengiriman' => 'required',
            'total_harga' => 'required',
        ]);
        barang::create($request->all());
        return redirect()->route('index')->with('success','Barang berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    // public function show(barang $barang)
    // {
    //     return view('page/show',compact('barang'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('/page/barang_edit',compact('barang'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat_kirim' => 'required',
            'nama_barang' => 'required',
            'harga_barjas' => 'required',
            'pengiriman' => 'required',
            'total_harga' => 'required',
        ]);
        $barang->update($request->all());
        return redirect()->route('index')->with('success','Barang berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
        return redirect()->route('index')->with('success','Barang berhasil dihapus');
    }

    public function changeStatus(Request $request)
    {
        $barang = barang::find($request->id);
        $barang->status = $request->status;
        $barang->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}