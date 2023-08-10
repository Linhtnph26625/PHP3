<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatLieu;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChatLieuRequest;
use App\Http\Requests\UpdateChatLieuRequest;

class ChatLieuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $chatlieu = ChatLieu::all();
        $chatlieus = DB::table('chatlieu')->get();
        return view('admin.chatlieu.index', ['chatlieus' => $chatlieus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.chatlieu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChatLieuRequest $request)
    {
        //
        $tenChatLieu = $request->input('tenChatLieu');
        $created_at = now();

        DB::table('chatlieu')->insert([
            'tenChatLieu' => $tenChatLieu,
            'created_at' => $created_at
        ]);

        return redirect()->route('chatlieu.index');

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
        $chatlieu = DB::table('chatlieu')->where('id', $id)->first();
        return view('admin.chatlieu.edit', compact('chatlieu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tenChatLieu = $request->input('tenChatLieu');
        $update_at = now();

        DB::table('chatlieu')->where('id', $id)->update([
            'tenChatLieu' => $tenChatLieu,
            'updated_at' => $update_at,
        ]);

        return redirect()->route('chatlieu.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChatLieu $chatlieu)
    {
        //
        $chatlieu -> delete();

        return redirect()->route('chatlieu.index');
    }
}
