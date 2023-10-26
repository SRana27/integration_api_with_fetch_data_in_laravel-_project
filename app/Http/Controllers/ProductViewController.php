<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductViewController extends Controller
{
    public function index()
    {
        $client =new \GuzzleHttp\Client();
        $url='http://localhost/laravel-api/public/api/login';
        $data['email']='sohel@gmail.com';//register user
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
    //    $url1 ='https://fakestoreapi.com/products?limit=6';
    //    $products_request = $client->get($url1);
    //    $product_response=json_decode( $products_request->getBody(),true);
    //   $products= $product_response;
    //   return view('welcome',compact('categories','products'));
      return view('welcome',compact('categories'));

    }

        public function categortList()
        {  
            $client =new \GuzzleHttp\Client();
            $url='http://localhost/laravel-api/public/api/login';
            $data['email']='sohel@gmail.com';//register user
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
               $data=[];
           foreach($categories as $category)
           {
            $data[]=$category['name'];
           }
            return $data;   

        }


    // public function show()
    // {
    //     $client = new \GuzzleHttp\Client();
    //     $url ='https://fakestoreapi.com/products';
    //     $products_request = $client->get($url);
    //     $product_response=json_decode( $products_request->getBody(),true);
    //    $products= $product_response;
    //    return view('welcome',compact('products'));
    // }


}
   