<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): \Illuminate\Http\Response
    {
        //
        $data = Menu::all();
        return view('menu.menu',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\Http\Response
    {
        //
        $kategori = Kategori::all();
        return view('menu.add',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Http\Response
    {
        //
        $data = $request->all();
        // set data array foto to file foto
        $data['foto'] = $request->file('foto')->store('artikel/foto');
        // insert data to artkel with orm
        Menu::create($data);
        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu): \Illuminate\Http\Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu): \Illuminate\Http\Response
    {
        //
        $kategori = Kategori::all();
        return view('menu.edit',compact('menu', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu): \Illuminate\Http\Response
    {
        //
        $data = $request->all();
        try{
            $data['foto'] = $request->file('foto')->store('artikel/foto');
            $menu->update($data);
        }catch(\Throwable $th){
            $data['foto'] = $menu->foto;
            $menu->update($data);
        }
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu): \Illuminate\Http\Response
    {
        //
        $menu->delete();
        return redirect('menu');
    }
}
