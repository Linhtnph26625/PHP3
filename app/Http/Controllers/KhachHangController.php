<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KhachHangRequest;
use App\Http\Requests\UpdateKhachHangRequest;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $khachhangs = DB::table('khach_hang')->get();
        return view('admin.khachhang.index', ['khachhangs' => $khachhangs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.khachhang.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KhachHangRequest $request)
    {
        //
        $tenKhachHang = $request->input('tenKhachHang');
        $diaChi = $request->input('diaChi');
        $ngaySinh = $request->input('ngaySinh');

        $avatar = $request->file('avatar')->getClientOriginalName();
        $request->file('avatar')->storeAs('public/images', $avatar);
        $created_at = now();

        DB::table('khach_hang')->insert([
            'tenKhachHang' => $tenKhachHang,
            'avatar' => $avatar,
            'diaChi' => $diaChi,
            'ngaySinh' => $ngaySinh,
            'created_at' => $created_at
        ]);

        return redirect()->route('khachhang.index');
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
        $khachhang = DB::table('khach_hang')->where('id', $id)->first();
        return view('admin.khachhang.edit', compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKhachHangRequest $request, string $id)
    {
        //
        $tenKhachHang = $request->input('tenKhachHang');
        $diaChi = $request->input('diaChi');
        $ngaySinh = $request->input('ngaySinh');
        $update_at = now();

        DB::table('khach_hang')->where('id', $id)->update([
            'tenKhachHang' => $tenKhachHang,
            'diaChi' => $diaChi,
            'ngaySinh' => $ngaySinh,
            'updated_at' => $update_at,
        ]);

        if($request->file('avatar' !== null)) {
            $avatar = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('public/images', $avatar);

            DB::table('khach_hang')->where('id', $id)->update([
                'avatar' => $avatar,
            ]);
        }

        return redirect()->route('khachhang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('khach_hang')->where('id', $id)->delete();
        return redirect()->route('khachhang.index');
    }
}
