<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
    public function index(){

        // $party = new Party();

        // $party->name = 'Rakesh';

        // $party->save();

        // return "Data Inserted Successfully";

        $params=array(
            'name' => 'Rakesh',
            'email' => 'rakesh@example.com',
            'phone' => '1234567890',
            'address' => 'Delhi'
        );
        Party::create($params);
        return "Data Inserted Successfully";
    }
        // $name='Rakesh';
        // $phone='1234567890';
        // $city='Delhi';
        // return "Hello Rakesh";

    

     public function about($name){

        $age = 24;

        return view('about', compact('name', 'age'));
    }

        //using with function
       // return view('about')->with('name',$name)->with('age',$age);

        //using assosiative array
        // $data = [
        //     'name' => $name,
        //     'age' => $age        
        // ];



        //return view("about");

    

    public function welcome(){

        return view("welcome");

    }
}