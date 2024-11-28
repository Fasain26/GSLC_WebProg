<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showMovie()
    {
        $movies = movies::paginate(4);
        return view('movie')->with('movies', $movies);
    }

    public function showAllGenre()
    {
        $genres = genres::all();
        return view('genre')->with("genres", $genres);
    }

    public function deleteMovie($id)
    {
        $movie = movies::find($id);

        if ($movie) {
            $movie->delete();
            
            session()->flash('deleteSuccess', 'The movie was deleted successfully.');
        } else {
            session()->flash('deleteError', 'Movie not found.');
        }

        return redirect()->back();
    }

    public function insertMovie(Request $request)
    {
        $genreId = $request->input('genre');

        $movie = new movies();
        $movie->genre_id = $genreId;
        $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->publish_date = $request->input('publish_date');

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads', 'public');
            $movie->photo = $photoPath;
        }

        $movie->save();

        return redirect()->back()->with('success', 'Movie added successfully!');
    }

}
