<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Room;
use App\Booking;
use App\Tag;
use App\Client;
use App\Service;


use Illuminate\Http\Request;

class PanelController extends Controller
{
     public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function index()
    {
        $user = Auth()->User();
        return view('panel.index', compact('user'));
    }

    public function view_users()
    {
        // Controle de URL
        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('panel.users.index', compact('user', 'uriActual'));
    }

    public function view_room()
    {
        $rooms=Room::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('room.index', compact('user', 'uriActual', 'rooms'));
    }

    public function view_booking()
    {
        $bookings= Booking::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('booking.index', compact('user', 'uriActual', 'bookings'));
    }

    public function view_tag()
    {
        $tags= Tag::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('tag.index', compact('user', 'uriActual', 'tags'));
    }

    public function view_service()
    {
        $services= Service::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('service.index', compact('user', 'uriActual', 'services'));
    }

    public function view_client()
    {
        $clients= Client::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('client.index', compact('user', 'uriActual', 'clients'));
    }
}
