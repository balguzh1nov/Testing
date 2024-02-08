<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }

    public function show($id)
    {
        return News::findOrFail($id);
    }

    public function store(Request $request)
    {
        return News::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->all());

        return $news;
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return 204; // No content
    }

    public function incrementViews($id)
    {
        $news = News::findOrFail($id);
        $news->views++;
        $news->save();

        return response()->json(['views' => $news->views]);
    }

}
