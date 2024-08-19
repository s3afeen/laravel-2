<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    public function create()
    {
    return view('movies.create');
    }

                        public function update(Request $request, $id)
                    {
                        $validatedData = $request->validate([
                            'name' => 'required',
                            'description' => 'required',
                            'genre' => 'required',
                        ]);

                        $movie = Movie::findOrFail($id);
                        $movie->update($validatedData);

                        return redirect()->route('movies.index')->with('success', 'Movie updated successfully!');
                    }



                    public function show($id)
                    {
                        $movie = Movie::findOrFail($id);
                        return view('movies.show', compact('movie'));
                    }

                    public function edit($id)
                    {
                        $movie = Movie::findOrFail($id);
                        return view('movies.edit', compact('movie'));
                    }

                    public function destroy($id)
                    {
                        $movie = Movie::findOrFail($id);
                        $movie->delete();

                        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully!');
                    }









    public function store(Request $request)
{
    // dd('Data saved');

    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'genre' => 'required',
    ]);

    Movie::create($validatedData);


return redirect()->route('movies.index')->with('success', 'Movie created successfully!');
@dd('Reached store method');

}

}
