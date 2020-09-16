<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\event;

class eventController extends Controller
{
  public function showAll()
  {
          return response()->json(event::all());
  }

  public function show($eventId)
  {
  	return response()->json(event::find($eventId));
  }

  public function bookevent($eventId)
  {
  	//create table user_event 
  	//take userId from Auth
  	//save user_id and and event_id in table user_event
  	return response()->json(['massege','event booked successfully']);
  }
}
