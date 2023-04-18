<?php

namespace App\Http\Interfaces;

use Illuminate\Http\Request;


interface TodoInterface extends BaseInterface
{
  public function save(Request $request);
}