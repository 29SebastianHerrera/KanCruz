<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::all();
        return view('service.index',['services'=>$services]);
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect(route('service.index'));
    }

    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('service.edit',['service'=>$service]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return redirect (route('service.index'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect (route('service.index'));
    }
}
