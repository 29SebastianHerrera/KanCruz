<?php

namespace App\Http\Controllers;

use App\Trial;
use App\Room;
use App\Booking;

use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function index()
    {
        return view ('trial.index');
    }


    public function create()
    {
        $rooms = Room::all();
        return view('trial.create', compact('rooms'))->with('success', 'Reserva creada satisfactoriamente');
    }

    public function store(Request $request)
    {

        return redirect (route('trial.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

    }

    public function view()
    {
        return view ('trial.view');
    }
}
