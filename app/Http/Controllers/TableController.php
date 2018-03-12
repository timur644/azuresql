<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Item;


class TableController extends Controller
{

    public  function show ()
    {
      return view ('create-tb');
    }

    public function create(Request $request)

    {
        $table = $request->name;
        DB::statement("CREATE TABLE " .$table. "(id int, name nvarchar(50))");
        return view('create-tb');
    }



}