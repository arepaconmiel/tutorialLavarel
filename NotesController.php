<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Note;
use App\Http\Controllers\Controller;


class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        //var_dump($notes);
        return view('notes/listado', compact('notes'));
        //return view('notes/list', compact('notes'));
    }
    public function create()
    {
        return view('notes/create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'note' => ['required', 'max:200' ]
        ]);
        $data = $request->all();
        Note::create($data);

        return redirect('notes');
    }
    public function show($note)
    {
        dd($note);
    }
}
