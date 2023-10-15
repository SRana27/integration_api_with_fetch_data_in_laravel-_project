<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductViewController extends Controller
{
    public function index()
    {
        $client =new \GuzzleHttp\Client();
        $url='http://localhost/laravel-api/public/api/login';
        $data['email']='sohel@gmail.com';
        $data['password']='123456789';

        $request = $client->post($url,[
           'form_params'=>$data
        ]);
        $response =$request->getBody();
      
        $info = json_decode($response,true);
        // return $info;
        $token =$info['data']['token'];


       $category_url ='http://localhost/laravel-api/public/api/categories';
        $categories_requests=$client->get($category_url,[
        'headers'=> ['Authorization'=>'Bearer'.' '. $token],
       ]);
      
      
       $category_response =json_decode($categories_requests->getBody(),true);
       $categories= $category_response['data'];
        
      return view('welcome',compact('categories'));

    }
}
   