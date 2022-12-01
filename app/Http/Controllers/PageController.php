<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $skills = Skill::all();

        return view('page.home', compact('skills'));
    }

    public function contact()
    {
        return view('page.contact');
    }
}
