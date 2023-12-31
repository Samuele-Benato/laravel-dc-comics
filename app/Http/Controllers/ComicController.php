<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{


    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());

        $comic = new Comic;
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request->all(), $comic->id);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|string|max:50',
                'description' => "required|text",
                "thumb" => "required|text",
                "price" => "required|string|max:5",
                "series" => 'required|string|max:50',
                "sale_date" => "required|date",
                "type" => 'required|string|max:50'
            ],
            [
                'title.required' => 'Il nome è obbligatorio',
                'title.string' => 'Il nome deve essere una stringa',
                'title.max' => 'Il nome deve massimo di 50 caratteri',

                'description.required' => 'La descrizione è obbligatoria',

                'thumb.required' => 'L\'immagine è obbligatoria',

                'price.required' => 'Il prezzo è richiesto',
                'price.max' => 'Il nome deve massimo di 5 caratteri',

                'series.required' => 'La serie è richiesta',
                'series.string' => 'Il series deve essere una stringa',
                'series.max' => 'Il series deve massimo di 50 caratteri',

                'sale_date.required' => ' La data è obbligatoria',

                'type.required' => 'La tipologia è obbligatoria',
                'type.string' => 'Il type deve essere una stringa',
                'type.max' => 'Il type deve massimo di 50 caratteri',
            ]
        )->validate();

        return $validator;
    }
}