<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Library::orderby('id' , 'asc') -> paginate(10);
        return view('library.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'book_name' => 'required' ,
            'author' => 'required' ,
            'price' => 'required' ,

        ]);
        Library::create($request -> post());
        return redirect() -> Route('library.index') -> with('success') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
        return view('library.edit' , compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Library $library)
    {
        $request -> validate([
            'book_name' => 'required' ,
            'author' => 'required' ,
            'price' => 'required' ,

        ]);
        $library -> fill($request -> post()) ->save();
        return redirect() -> Route('library.index') -> with('success') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        $library -> delete();
        return redirect() -> Route('library.index') -> with('success') ;
    }
}
