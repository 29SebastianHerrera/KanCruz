<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Room;
use App\Booking;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms=Room::all();
        $tags=Tag::all();
        return view('room.index',['rooms'=>$rooms], ['tags'=>$tags]);
    }

    public function create()
    {
        $tags= Tag::all();
        return view ('room.create', compact('tags'));
    }

    public function store(Request $request)
    {

        $room=Room::create($request->all());
        $room->tags()->sync($request->tag_id);
        return redirect(route('room.index'));
    }


    public function show(Room $room)
    {
        $bookings = Booking::all();
        return view('room.show', compact ('bookings','room'));
    }

    public function edit(Room $room)
    {
        $tags=Tag::all();
        return view('room.edit',['room'=>$room],['tags'=>$tags]);
    }

    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        $room->tags()->sync($request->tag_id);
        return redirect (route('room.index'));
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect (route('room.index'))->with('success', 'Habitación eliminada satisfactoriamente');;
    }
}
