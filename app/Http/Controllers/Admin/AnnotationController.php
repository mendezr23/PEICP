<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    
    public function __construct()
    {
      $this->middleware('can:admin.annotations.index')->only('index');
      $this->middleware('can:admin.annotations.show')->only('edit','show');

    }


    public function index()
    {
        $records = Record::all();
        return view('admin.annotations.index',compact('records'));
    }

    public function show(Record $record)
    {
        
        return view('admin.annotations.show',compact('record'));
    }
    
    
}
