<?php

namespace App\Http\Controllers;

use App\Models\AditionalNote;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        //get notes
        $notes = Note::with('aditionalNote')->latest()->paginate(5);
        //render view with notes
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'title'  => 'required',
            'body'   => 'required'
        ]);

        //create note
        Note::create([
            'title'  => $request->title,
            'body'   => $request->body
        ]);

        //redirect to index
        return redirect()->route('notes.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Note $note)
    {
        # code...
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note)
    {
        //validate form
        $this->validate($request, [
            'title'  => 'required',
            'body'   => 'required'
        ]);

        //update note with new image
        $note->update([
            'title'  => $request->title,
            'body'   => $request->body
        ]);


        //redirect to index
        return redirect()->route('notes.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    public function destroy(Note $note)
    {
        dd($note);
        //delete note
        $note->delete();

        //redirect to index
        return redirect()->route('notes.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
