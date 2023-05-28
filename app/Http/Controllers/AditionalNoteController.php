<?php

namespace App\Http\Controllers;

use App\Models\AditionalNote;
use Illuminate\Http\Request;

class AditionalNoteController extends Controller
{
    public function store(Request $request, $note_id)
    {
        //validate form
        $this->validate($request, [
            'note'   => 'required'
        ]);

        //create aditionalNotes
        AditionalNote::create([
            'note_id'     => $note_id,
            'note'   => $request->note
        ]);

        //redirect to index
        return redirect()->route('notes.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    public function destroy(AditionalNote $aditionalNotes)
    {
        //delete aditionalNotes
        $aditionalNotes->delete();

        //redirect to index
        return redirect()->route('notes.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
