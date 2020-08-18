<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags=Tag::all();
        return view('tag.index',['tags'=>$tags]);
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        Tag::create($request->all());
        return redirect(route('tag.index'));
    }

    public function show(Tag $tag)
    {
        return view('tag.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit',['tag'=>$tag]);
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        return redirect (route('tag.index'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect (route('tag.index'));
    }
}
