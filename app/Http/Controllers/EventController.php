<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view("welcome", ["events" => $events]);
    }

    public function create(){
        return view("events.create");
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        if($request->hasFile("image") && $request->file("image")->isValid()){
            $requestImage = $request->image;
            $imageExtension= $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $imageExtension;

            $requestImage->move(public_path("img/events"), $imageName);
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with("msg", "Evento publicado com sucesso!");
    }
}
