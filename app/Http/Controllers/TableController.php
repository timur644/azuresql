<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Item;


class TableController extends Controller
{

    //показ формы
    public  function show ()
    {
      return view ('create-tb');
    }

    //соз-е таблицы
    public function create(Request $request) //это то что вводит юзер
    {
        //его сохраняем в пер-ю $table
        $table = $request->name;
        //передаём команду создать таблицу
        DB::statement("CREATE TABLE " .$table. "(id int, name nvarchar(50))");
        
        //опять показываем форму
        return view('create-tb');
    }
}