<?php

namespace App\Http\Controllers;
use App\Models\Stream;
use App\Models\Department;

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
        // Validate request
        $validatedData = $request->validate([
            'stream_name'   => 'required|string',
            'description'   => 'nullable|string',
            'stream_icon'   => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'status'        => 'nullable|in:1,0',
            'show_web'      => 'nullable|in:1,0',
            'order'         => 'nullable|integer'
        ]);

        // Handle image upload
        $iconName = null;
        if ($request->hasFile('stream_icon')) {
            $file = $request->file('stream_icon');
            $iconName = 'Stream_' . time() . '.' . $file->getClientOriginalExtension();

            $folderPath = public_path('uploads/stream');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            $file->move($folderPath, $iconName);
        }

        // Save stream
        Stream::create([
            'name'        => $validatedData['stream_name'],
            'description' => $validatedData['description'] ?? null,
            'icon'        => $iconName,
            'status'      => $request->status ?? 1,
            'show_web'    => $request->show_web ?? 1,
            'order'       => $request->order ?? 0,
        ]);

        return response()->json(['success' => 'Stream added successfully!']);
    }


    /**
     * Edit stream (for Edit tab)
     */
    public function stream_edit($id)
    {
        // Fetch stream data
        $stream = Stream::findOrFail($id);
        return response()->json($stream);
    }


    /**
     * Update stream
     */
    public function stream_update(Request $request, $id)
    {
        // Validate request
        $validatedData = $request->validate([
            'stream_name'  => 'required|string',
            'description'  => 'nullable|string',
            'stream_icon'  => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'status'       => 'nullable|in:1,0',
            'show_web'     => 'nullable|in:1,0',
            'order'        => 'nullable|integer'
        ]);

        $stream = Stream::findOrFail($id);

        // Update basic fields
        $stream->name        = $request->stream_name;
        $stream->description = $request->description;
        $stream->status      = $request->status ?? 0;
        $stream->show_web    = $request->show_web ?? 0;
        $stream->order       = $request->order ?? 0;

        // Handle icon update
        if ($request->hasFile('stream_icon')) {

            // Delete old icon
            if ($stream->icon && file_exists(public_path('uploads/stream/' . $stream->icon))) {
                unlink(public_path('uploads/stream/' . $stream->icon));
            }

            $file = $request->file('stream_icon');
            $iconName = 'Stream_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/stream'), $iconName);

            $stream->icon = $iconName;
        }

        $stream->save();

        return response()->json(['success' => 'Stream updated successfully!']);
    }


    // Stream Show
    public function stream_show($id)
    {
        // Fetch stream data
        $stream = Stream::findOrFail($id);
        return response()->json($stream);
    }

    // Delete icon from edit form
    public function stream_icon_delete($id)
    {
        $stream = Stream::findOrFail($id);

        if ($stream->icon && file_exists(public_path('uploads/stream/' . $stream->icon))) {
            unlink(public_path('uploads/stream/' . $stream->icon));
        }

        $stream->icon = null;
        $stream->save();

        return response()->json([
            'success' => 'Stream icon deleted successfully.'
        ]);
    }

    /**
     * Delete stream
     */
    public function stream_destroy($id)
    {
         $stream = Stream::findOrFail($id);

        // Delete icon if exists
        if ($stream->icon && file_exists(public_path("uploads/stream/{$stream->icon}"))) {
            @unlink(public_path("uploads/stream/{$stream->icon}"));
        }


        // Delete stream record
        $stream->delete();

        return response()->json(['success' => 'Stream deleted successfully.']);
    }



    //===============Department Controller Logic ==========================
   public function department_list()
{
    $departments = Department::with('stream')
        ->orderBy('order')
        ->get();

    $streams = Stream::orderBy('name')->get();

    return view('backend.master-data.department', compact('departments', 'streams'));
}

public function department_store(Request $request)
{
    $validated = $request->validate([
        'stream'            => 'required|exists:streams,id',
        'department_name'   => 'required|string',
        'description'       => 'nullable|string',
        'status'            => 'nullable|in:1,0',
        'show_web'          => 'nullable|in:1,0',
        'order'             => 'nullable|integer',
    ]);

    Department::create([
        'stream_id'        => $request->stream,
        'department_name'  => $request->department_name,
        'description'      => $request->description,
        'status'           => $request->status ?? 1,
        'show_web'         => $request->show_web ?? 1,
        'order'            => $request->order ?? 0,
    ]);

    return response()->json([
        'success' => 'Department added successfully!'
    ]);
}


public function department_edit($id)
{
    $department = Department::findOrFail($id);
    return response()->json($department);
}

public function department_show($id)
{
    $department = Department::findOrFail($id);
    return response()->json($department);
}


public function department_update(Request $request, $id)
{
    $validated = $request->validate([
        'stream'            => 'required|exists:streams,id',
        'department_name'   => 'required|string',
        'description'       => 'nullable|string',
        'status'            => 'nullable|in:1,0',
        'show_web'          => 'nullable|in:1,0',
        'order'             => 'nullable|integer',
    ]);

    $department = Department::findOrFail($id);

    $department->update([
        'stream_id'        => $request->stream,
        'department_name'  => $request->department_name,
        'description'      => $request->description,
        'status'           => $request->status ?? 0,
        'show_web'         => $request->show_web ?? 0,
        'order'            => $request->order ?? 0,
    ]);

    return response()->json([
        'success' => 'Department updated successfully!'
    ]);
}


public function department_destroy($id)
{
    $department = Department::findOrFail($id);
    $department->delete();

    return response()->json([
        'success' => 'Department deleted successfully.'
    ]);
}



}
