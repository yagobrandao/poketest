<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PokeTest;

/**
 * [Description PokeTestController]
 */
class PokeTestController extends Controller
{

   /**
    * @param Request $request
    * 
    * @return [type]
    */
   public function index(Request $request)
   {
      return PokeTest::attack($request->all());
   }
}
