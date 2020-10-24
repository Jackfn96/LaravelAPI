<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handset;


class HandsetsController extends Controller
{
  public function handsets()
  {
    return Handset::all();
  }
}
