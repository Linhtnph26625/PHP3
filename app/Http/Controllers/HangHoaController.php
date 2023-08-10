<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HangHoaRequest;
use App\Http\Requests\UpdateHangHoaRequest;

class HangHoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $hanghoas = DB::table('hang_hoa')->get();
        $tenChatLieu = DB::table('chatlieu')->where('id', $hanghoas->chatlieu_id)->first();
        return view('admin.hanghoa.index', ['hanghoas' => $hanghoas], compact('tenChatLieu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hanghoa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HangHoaRequest $request)
    {
        //
        $tenHanghoa = $request->input('tenHangHoa');
        $soLuong = $request->input('soLuong');
        $donGiaNhap = $request->input('donGiaNhap');
        $donGiaBan = $request->input('donGiaBan');
        $ghiChu = $request->input('ghiChu');
        $chatlieu_id = $request->select('chatlieu_id');

        $anh = $request->file('anh')->getClientOriginalName();
        $request->file('anh')->storeAs('public/images', $anh);
        $created_at = now();

        DB::table('hang_hoa')->insert([
            'tenHangHoa' => $tenHanghoa,
            'soLuong' => $soLuong,
            'donGiaBan' => $donGiaBan,
            'donGiaNhap' => $donGiaNhap,
            'anh' => $anh,
            'ghiChu' => $ghiChu,
            'chatlieu_id' => $chatlieu_id,
        ]);

        return redirect()->route('hanghoa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
