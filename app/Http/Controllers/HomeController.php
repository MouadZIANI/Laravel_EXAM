<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $factory = (new Factory())->withServiceAccount(__DIR__.'/coloco-student-firebase-adminsdk-m5a3h-b2d7e22de8.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $documents =$database->collection('cars')->documents();
        dump($documents);
//        function getData(){
//
////            foreach($documents as $document){
////                $title = $document->data()['title'];
////                if(!Demand::where('title', $title)->exists()) {
////                    $demand = new Demand();
////                    $demand->title =$document->data()['title'];
////                    $demand->max_budget=$document->data()['max_budget'];
////                    $demand->preferences=$document->data()['description'];
////                    $demand->city=$document->data()['city'];
////                    $demand->user_id=Auth::id();
////                    $demand->save();
////                }
////            }
//        }
    }
}
