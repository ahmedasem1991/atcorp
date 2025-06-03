<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutLicense;
use App\Models\ContactUs;
use App\Models\Customer;
use App\Models\Gallery;
use App\Models\Trading;

use App\Models\MainSlider;
use App\Models\MessageFromCeo;
use App\Models\Newsletter;
use App\Models\NewsVideo;
use App\Models\Project;
use App\Models\TradingVision;

use App\Models\Quote;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\TechnologyAbout;
use App\Models\TechnologyVision;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home view 
    public function home(){
        $about = About::first();
        $ceo = MessageFromCeo::first();
        $members = TeamMember::take(4)->get();

        return view('home', compact('members' , 'ceo' , 'about'));
    }
    public function trading(){
        $trading = Trading::first();
        $members = TeamMember::take(4)->get();
        $visions = TradingVision::all();
        $services = Service::all();
        $partners = Customer::all();

        return view('trading', compact('trading','members','visions','services','partners'));
    }
    public function technology(){
        $aboutTech = TechnologyAbout::first();
        $members = TeamMember::take(4)->get();
        $visions = TechnologyVision::all();
        $services = Service::all();
        $partners = Customer::all();
        $projects = Project::all();


        return view('technology', compact('aboutTech','members','visions','services','partners','projects'));
    }
    public function aboutus(){
        $about = About::first();
        return view('aboutus', compact('quotes' , 'about' , 'licenses'));
    }
    public function services(){
        return view('services');
    }
    public function news(){
        $videos = NewsVideo::all();
        return view('news' , compact('videos'));
    }
    public function contact(){
        return view('contactus');
    }
    public function studio(){
        $gallery = Gallery::all();
        return view('studio' , compact('gallery'));
    }

    public function contactus(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }


    public function newsletter(Request $request){
        $request->validate([
            'email' => 'required',
        ]);

        $contact = new Newsletter();
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back();
    }    
}
