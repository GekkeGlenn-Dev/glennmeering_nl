<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    /**
     * The welcome page of the website.
     *
     * @return Response
     */
    public function index()
    {
//        return Inertia::render('Welcome', [
//            'canLogin' => Route::has('login'),
//            'canRegister' => Route::has('register'),
//            'laravelVersion' => Application::VERSION,
//            'phpVersion' => PHP_VERSION,
//        ]);
        return Inertia::render('Public/Index');
    }

    /**
     * Dashboard home screen.
     *
     * @return Response
     */
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}
