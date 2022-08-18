<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class staffController extends Controller
{
    
    public function index()
    {
       $staff = staff::latest()->paginate();
        return view('/page/staff',compact('staff'))->with('i');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/page/create');
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
            'nama_makanan' => 'required',
            'harga_barjas' => 'required',
            'pengiriman' => 'required',
            'total_harga' => 'required',
        ]);
        staff::create($request->all());
        return redirect()->route('index')->with('success','Data user berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    // public function show(staff $staff)
    // {
    //     return view('page/show',compact('staff'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        return view('/page/edit',compact('staff'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat_kirim' => 'required',
            'nama_makanan' => 'required',
            'harga_barjas' => 'required',
            'pengiriman' => 'required',
            'total_harga' => 'required',
        ]);
        $staff->update($request->all());
        return redirect()->route('index')->with('success','Data user berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        $staff->delete();
        return redirect()->route('index')->with('success','Data user berhasil dihapus');
    }

   
    public function kurir()
    {
        $staff = staff::latest()->paginate();
        return view('/page/kurir',compact('staff'))->with('i');
    }
    
    public function kirim(staff $staff)
    {
        return view('/page/kirim',compact('staff'));
    }
    public function kirimkan(Request $request , staff $staff)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat_kirim' => 'required',
            'nama_makanan' => 'required',
            'harga_barjas' => 'required',
            'pengiriman' => 'required',
            'total_harga' => 'required',
        ]);
        staff::create($request->all());
        return redirect()->route('kurir')->with('success','Data user berhasil di input');
    }
}