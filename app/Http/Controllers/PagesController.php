<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function inicio()
    {
        return view('home');
    }

    public function cursos() 
    {
    	return view('courses');
    }

    public function profesores() 
    {
    	return view('teachers');
    }

    public function eventos()
    {
        return view('events');
    }

    public function acerca() 
    {
        return view('about');
    }

    public function coursesSingle() 
    {
        return view('courses-single');
    }

    public function gallery() 
    {
        return view('gallery');
    }

    public function noticias() 
    {
        return view('news');
    }


}
