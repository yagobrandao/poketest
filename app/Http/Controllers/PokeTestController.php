<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service\PokeTestService;

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
      $data = PokeTestService::attack($request->all());

      if($data === null){
         return response()->json([], 422);
      }

      return $data;
   }
}
