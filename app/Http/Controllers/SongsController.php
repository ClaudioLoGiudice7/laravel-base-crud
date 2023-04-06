<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("songs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $song = new Song;

        $song->title = $data["title"];
        $song->album = $data["album"];
        $song->author = $data["author"];
        $song->editor = $data["editor"];
        $song->length = $data["length"];
        $song->poster = $data["poster"];
        $song->release_date = $data["release_date"];
        $song->cover = $data["cover"];

        $song->save();

         // Reindirizzamento alla pagina di dettaglio della canzone appena salvata
        return redirect()->route('songs.show', ['id' => $song->id]);

        $data = $this->validation($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view("songs.show", compact("song"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view("songs.edit", compact ("song"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $data = $request->all();
        $song->update($data);
        return redirect()->route('songs.show', $song);
    
        $data = $this->validation($request->all(), $song->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }

    // App/Http/Controllers/PastaController.php

    private function validation($data) {
    $validator = Validator::make(
        $data,
        [
            'title' => 'required|string|max:20',
            'album' => "required|string|max:30",
            "author" => "required|string|max:5",
            "editor" => "string",
            "length" => "required|integer",
            "poster" => "nullable|string",
            "release_date" => "nullable|string",
            "cover" => "required"
        ],
        [
            'name.required' => 'Il titolo è obbligatorio',
            'name.string' => 'Il titolo deve essere una stringa',
            'name.max' => 'Il titolo deve essere massimo di 20 caratteri',

            'album.required' => 'L\'album è obbligatorio',
            'album.string' => 'L\album deve essere una stringa',
            'album.max' => 'L\'album deve essere massimo di 30 caratteri',

            'author.required' => 'L\'autore è obbligatorio',
            'author.string' => 'L\autore deve essere una stringa',
            'author.max' => 'L\'autore deve essere massimo di 5 caratteri',
            
            'editor.string' => 'L\'etichetta deve essere una stringa',
            
            'length.required' => 'La lunghezza è obbligatoria',
            'length.integer' => 'La lunghezza deve essere un numero',
            
            'poster.string' => 'L\'immagine deve essere una stringa',
            
            'release_date.string' => 'La data d\'uscita deve essere una stringa',

            'cover.required' => 'La cover deve essere obbligatoria'
        ]
        
    )->validate();

        return $validator;
    }
}