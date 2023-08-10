<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // var_dump(NhanVien::all());
        // die();

        //$nhanviens = NhanVien::all(); //lay du lieu tu bang nhanVien
        $nhanviens = DB::table('nhanvien')->get();
        return view('admin.nhanvien.index', ['nhanviens' => $nhanviens]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.nhanvien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NhanVienRequest $request)
    {
        //
        $tenNhanVien = $request->input('tenNhanVien');
        $gioiTinh = $request->input('gioiTinh');
        $diaChi = $request->input('diaChi');
        $dienThoai = $request->input('dienThoai');
        $ngaySinh =  $request->input('ngaySinh');
        $created_at = now();

        $data = [
            'tenNhanv=Vien' => $tenNhanVien,
            'gioiTinh' => $gioiTinh,
            'diaChi'=> $diaChi,
            'dienThoai' => $dienThoai,
            'ngaySinh' => $ngaySinh
        ];

        DB::table('nhanvien')->insert([
            'tenNhanVien' => $tenNhanVien,
            'gioiTinh' => $gioiTinh,
            'diaChi'=> $diaChi,
            'dienThoai' => $dienThoai,
            'ngaySinh' => $ngaySinh,
            'created_at' => $created_at,
        ]);
        // NhanVien::create($data);
        // alert("Thêm nhân viên thành công!");
        return redirect()->route('nhanvien.index');
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
        $nhanvien = DB::table('nhanvien')->where('id', $id)->first();
        return view('admin.nhanvien.edit', compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNhanVienRequest $request, string $id)
    {
        //
        $tenNhanVien = $request->input('tenNhanVien');
        $gioiTinh = $request->input('gioiTinh');
        $diaChi = $request->input('diaChi');
        $dienThoai = $request->input('dienThoai');
        $ngaySinh =  $request->input('ngaySinh');
        $updated_at = now();

        DB::table('nhanvien')->where('id', $id)->update(['tenNhanVien'=>$tenNhanVien, 'gioiTinh' => $gioiTinh, 'diaChi' => $diaChi, 'dienThoai' => $dienThoai, 'ngaySinh' => $ngaySinh, 'updated_at' => $updated_at]);

        return redirect()->route('nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleted = DB::table('nhanvien')->where('id', '=', $id)->delete();
        return redirect()->route('nhanvien.index');
    }
}
