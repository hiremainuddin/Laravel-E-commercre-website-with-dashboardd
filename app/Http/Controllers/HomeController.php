<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Return home page
   public function index()
   {
   	return view('frontend.home');
   }
   // Return details page
   public function detail_page()
   {
   	return view('frontend.product-detail');
   }

}
