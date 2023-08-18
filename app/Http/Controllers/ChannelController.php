<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channel = Channel::paginate(5);
        return view('index', compact('channel'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Channel::create($request->all());
        $data = $request->all();
        $data['ChannelName'] = 'Default Channel'; 
        Channel::create($data);
        return redirect()->route('channel.index')->with('thongbao', 'Thêm thông tin thành công');
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
    public function edit(Channel $channel)
    {
        return view('edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Channel $channel)
    {
        $channel->update($request->all());
        return redirect()->route('channel.index')->with('thongbao', 'Cập nhật thông tin thành công! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        $channel->delete();
        return redirect()->route('channel.index')->with('thongbao', 'Xóa thông tin thành công!');
    }
}
