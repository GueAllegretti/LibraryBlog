<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{

    //funzione per controllo aggiunta/modifica - middlewere
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = Library::all();

        return view('library.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('library.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $lybrary = Library::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'image'=>$request->file('image')->store('public/media'),
            'description'=>$request->description,
            'user_id'=>Auth::id(),
        ]);

        $library->books()->sync($request->books);
        return redirect(route('library.index'))->with('message', 'Hai inserito correttamente una libreria!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library, $name)
    {
        return view('library.show', compact('library', 'name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        $books = Book::all();
        return view('library.edit', compact('library', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        //dd($request->all(), $library);
        if($request->image){
            $library->update([
                'name'=>$request->name,
                'city'=>$request->city,
                'image'=>$request->file('image')->store('public/media'),
                'description'=>$request->description,
            ]);
        } else {
            $library->update([
                'name'=>$request->name,
                'city'=>$request->city,
                'description'=>$request->description,
            ]);
        };
        
        $library->books()->sync($request->books);
        return redirect(route('library.index'))->with('message', 'Hai modificato correttamente una libreria!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        $library->delete();
        return redirect(route('library.index'))->with('message', 'Hai eliminato una libreria!');
    }
}
