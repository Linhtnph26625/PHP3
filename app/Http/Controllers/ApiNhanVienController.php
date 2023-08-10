<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;

class ApiNhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nhanviens = NhanVien::get();
        return response()->json($nhanviens);
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
    public function store(Request $request)
    {
        //
        $tenNhanVien = $request->input('tenNhanVien');
        $gioiTinh = $request->input('gioiTinh');
        $diaChi = $request->input('diaChi');
        $dienThoai = $request->input('dienThoai');
        $ngaySinh = $request->input('ngaySinh');
        $createdAt = now();
        $updatedAt = null;

        $data = [
            'tenNhanVien' => $tenNhanVien,
            'gioiTinh' => $gioiTinh,
            'diaChi' => $diaChi,
            'dienThoai' => $dienThoai,
            'ngaySinh' => $ngaySinh,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ];

        $nhanvien = NhanVien::create($data);

        return response()->json($nhanvien);
    }

    /**
     * Display the specified resource.
     */
    public function show(NhanVien $nhanvien)
    {
        //
        // $data=NhanVien::find($nhanvien);
        return response()->json($nhanvien);
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
    public function update(Request $request, NhanVien $nhanvien)
    {
        //
        $tenNhanVien = $request->input('tenNhanVien');
        $gioiTinh = $request->input('gioiTinh');
        $diaChi = $request->input('diaChi');
        $dienThoai = $request->input('dienThoai');
        $ngaySinh = $request->input('ngaySinh');
        $createdAt = now();
        $updatedAt = null;

        $nhanvien->tenNhanVien = $tenNhanVien;
        $nhanvien->gioiTinh = $gioiTinh;
        $nhanvien->diaChi = $diaChi;
        $nhanvien->dienThoai = $dienThoai;
        $nhanvien->ngaySinh = $ngaySinh;
        $nhanvien->created_at = $createdAt;
        $nhanvien->updated_at = $updatedAt;

        $nhanvien->save();
        return response()->json($nhanvien);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NhanVien $nhanvien)
    {
        //
        $nhanvien -> delete();
        return response()->json($nhanvien);
    }
}
