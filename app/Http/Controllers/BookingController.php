<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Service;
use App\Room;
use App\Http\Resources\BookingCollection;

use App\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $bookings = Booking::all();
        $clients= Client::all();
        $services= Service::all();
        return view ('booking.index', compact('bookings', 'rooms','clients','services'));
    }

    public function create()
    {
        $rooms = Room::all();

        $clients = Client::all();
        $services= Service::all();
        return view('booking.create', compact('rooms','clients','services'))->with('success', 'Reserva creada satisfactoriamente');
    }

    public function storefront(Request $request)
    {
        $client = Client::create($request->input('name','email','phone'));

        $booking=Booking::create($request->input('name','email','phone'));

        $client -> services()->sync($request->service_id);

        $booking -> services()->sync($request->service_id);
        $booking-> rooms()->sync($request->room_id);


        return redirect (route('booking.index'));
    }

    public function store(Request $request)
    {
        $booking=Booking::create($request->all());
        $booking -> services()->sync($request->service_id);
        $booking-> rooms()->sync($request->room_id);
        return redirect (route('booking.index'));
    }

    public function show(Booking $booking)
    {
        $rooms = Room::all();
        $clients = Client::all();
        return view('booking.show', compact ('booking','rooms','clients'));
    }

    public function edit(Booking $booking)
    {
        $rooms = Room::all();
        $clients = Client::all();
        $services= Service::all();
        return view('booking.edit', compact('booking', 'rooms', 'clients', 'services'));
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        $booking -> services()->sync($request->service_id);
        $booking-> rooms()->sync($request->room_id);
        return redirect(route('booking.index'))->with('success', 'Reserva medificada satisfactoriamente');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect(route('booking.index'))->with('success', 'Reserva eliminada satisfactoriamente');
    }

    public function loadBookings()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
    }

    public function bookingData()
    {
        $bookings = Booking::all();

        return new BookingCollection($bookings);
    }
}
