<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class GuestController extends Controller
{

  public function index() {

    $emps = Employee::all();
    return view('emp-home', compact('emps'));
  }

  public function show($id) {

    $emp = Employee::findOrFail($id);
    return view('emp-show', compact('emp'));
  }

  
}
