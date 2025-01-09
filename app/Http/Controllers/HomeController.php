<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $reviews = ClientReview::all();
        return view('frontend.home', compact('reviews'));
    }
}
