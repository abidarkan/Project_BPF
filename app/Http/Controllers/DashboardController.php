<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Discussion;
use App\Models\Event;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->take(1)->get();
        $discussions = Discussion::orderBy('created_at', 'desc')->take(1)->get();
        $events = Event::orderBy('created_at', 'desc')->take(1)->get();

        return view('dashboard', compact('articles', 'discussions', 'events'));
    }
}
