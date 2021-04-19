<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PokeTest;

class PokeTestController extends Controller
{

   public function index(Request $request)
   {
      return PokeTest::attack($request->all());
   }
}
