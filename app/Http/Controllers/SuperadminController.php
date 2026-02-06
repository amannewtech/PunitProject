<?php

namespace App\Http\Controllers;
use App\Models\Stream;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    //===============Stream Controller Logic ==========================
    public function stream_list(){
         $streams = Stream::orderBy('order')->get();
        return view('backend.master-data.stream', compact('streams'));
    }

    /**
     * Store stream
     */
     public function stream_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'show_web' => 'required|boolean',
            'order' => 'nullable|integer',
        ]);

        $stream = Stream::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Stream added successfully',
            'data' => $stream
        ]);
    }

    /**
     * Edit stream (for Edit tab)
     */
    public function stream_edit($id)
    {
        $stream = Stream::findOrFail($id);
       return response()->json(
            Stream::findOrFail($id)
        );
    }

    /**
     * Update stream
     */
    public function stream_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'show_web' => 'required|boolean',
            'order' => 'nullable|integer',
        ]);

        $stream = Stream::findOrFail($id);
        $stream->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Stream updated successfully',
            'data' => $stream
        ]);
    }

    /**
     * Delete stream
     */
    public function stream_destroy($id)
    {
        Stream::findOrFail($id)->delete();

        return redirect()
            ->route('streams.index')
            ->with('success', 'Stream deleted successfully');
    }


    //===============Department Controller Logic ==========================
    public function department_list(){

        return view('backend.master-data.department');
    }

}