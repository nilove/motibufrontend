<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Some dummy routes to simulate login and logout */

use GuzzleHttp\Exception\RequestException;

Route::post('test/upload', function () {
  if (Input::file('file')->isValid()) {
    Input::file('file')->move('./', time().'.jpg');
  }
});

Route::get('test/config/{hello}', function ($hello) {
  var_dump(Config::get('access.token'),
            Config::write('access.token', 'nigga nigga'),
            Config::get('access.token'),
            $hello);
});

Route::get('/', function()
{

//     // Send the Access token request if not already present
    // $access_token = Config::get('access.token');
    // if($access_token == 'invalid'){
    //     $client = new \GuzzleHttp\Client();
    //     $response = $client->post('http://api.motibu.com/oauth/access_token', [
    //         'body' => [
    //             'grant_type' => 'client_credentials',
    //             'client_id' => Config::get('motibu.CLIENT_ID'),
    //             'client_secret' => Config::get('motibu.CLIENT_SECRET')
    //         ]
    //     ]);

    //     $result = $response->json();

    //     if(array_key_exists('access_token',$result)){
    //        Config::write('access.token',$result['access_token']);
    //         // Session::put('ACCESS_TOKEN', $result['access_token']);
    //     }

    // }

    // Flash::message('Codebase Passed OAuth Authentication. Access Token is: '.Config::get('access.token') );

	return View::make('base');
});

function get_generic_access_token(){
    $client = new \GuzzleHttp\Client;

    $response = $client->post(Config::get('motibu.API_URL').'oauth/client_cred_grant_token', [
        'body' => [
            'client_id' => Config::get('motibu.CLIENT_ID'),
            'client_secret' => Config::get('motibu.CLIENT_SECRET'),
            'grant_type' => 'client_credentials'
        ]
    ]);

    $response = $response->json();

    Log::info($response);
    if(!array_key_exists('access_token', $response) && !strlen($response['access_token'])){
        return false;
    }else{
        Config::write('access.client_token',$response['access_token']);
        Config::set('access.client_token',$response['access_token']);
        return true;
    }
}

Route::get('invitation/claim/{code}', function($code){

    $status = true;
    if(!strlen(Config::get('access.client_token')))
        $status = get_generic_access_token();

    $result = [];

    if($status){
        try{

            $client = new \GuzzleHttp\Client;

            $response = $client->get(Config::get('motibu.API_URL').'invite/verify/'.$code, [
                'headers' => [
                    'Authorization' => 'Bearer '.Config::get('access.client_token')
                ]
            ]);

            $result = $response->json();

            Log::info($result);
        }catch(RequestException $e){
            if ($e->getResponse()->getStatusCode() == '400') {
                Log::info("Got response 400");

                //
                get_generic_access_token();
                $response = $client->get(Config::get('motibu.API_URL').'invite/verify/'.$code, [
                    'headers' => [
                        'Authorization' => 'Bearer '.Config::get('access.client_token')
                    ]
                ]);

                $result = $response->json();
            }
        }
    }

    Log::info($result);

    if($result['success'] == false){
        return View::make('invitation.claim',[
            'verified' => false
        ]);
    }

    return View::make('invitation.claim',[
        'verified' => true,
        'code'     => $code,
        'user_type' => $result['user_type']
    ]);
});

Route::post('invitation/claim/{code}', function($code){
    $status = true;
    if(!strlen(Config::get('access.client_token')))
        $status = get_generic_access_token();

    $result = [];

    if($status){
        $client = new \GuzzleHttp\Client;

        $response = $client->post(Config::get('motibu.API_URL').'invite/claim', [
            'headers' => [
                'Authorization' => 'Bearer '.Config::get('access.client_token')
            ],
            'body' => [
                'code' => $code,
                'user_type' => Input::get('user_type'),
                'password'  => Input::get('password'),
                'confirm_password' => Input::get('password_confirm')
            ]
        ]);

        $result = $response->json();

        Log::info($result);

    }

    return Redirect::to('/');
});


Route::post('/register', function(){
   $email = Input::get('email');
   $firstName = Input::get('fname');
   $lastName  = Input::get('lname');
   $password = Input::get('password');
   $password_confirmation = Input::get('password_confirmation');
   $is_external_vcard=Input::get('is_external_vcard');

   $request_body = [

   ];
    $status = true;
    if(!strlen(Config::get('access.client_token')))
        $status = get_generic_access_token();

    $result = [];

    if($status){
        $client = new \GuzzleHttp\Client;

        $response = $client->post(Config::get('motibu.API_URL').'register', [
            'headers' => [
                'Authorization' => 'Bearer '.Config::get('access.client_token')
            ],
            'body' => [
                'email' => $email,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'password' => $password,
                'confirm_password' => $password_confirmation,
                'client_base_url' => getenv('CLIENT_URL'),
                'is_external_vcard'=> $is_external_vcard
            ]
        ]);

        $result = $response->json();

        Log::info($result);

    }

    if($result['success'] == false)
        Response::json($result, 400);

    return \Response::json($result);

});


Route::post('/register_agency', function(){
   $email = Input::get('email');
   $agencyName = Input::get('agency_name');
   $firstName = Input::get('fname');
   $lastName  = Input::get('lname');
   $password = Input::get('password');
   $password_confirmation = Input::get('password_confirmation');
   $telephone = Input::get('telephone');

// dd(\Input::all());
   $request_body = [

   ];
    $status = true;
    if(!strlen(Config::get('access.client_token')))
        $status = get_generic_access_token();

    $result = [];

    if($status){
        $client = new \GuzzleHttp\Client;

        $response = $client->post(Config::get('motibu.API_URL').'register_agency', [
            'headers' => [
                'Authorization' => 'Bearer '.Config::get('access.client_token')
            ],
            'body' => [
                'agency_name' => $agencyName,
                'telephone' => $telephone,
                'email' => $email,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'password' => $password,
                'confirm_password' => $password_confirmation,
                'client_base_url' => getenv('CLIENT_URL')
            ]
        ]);

        $result = $response->json();

        Log::info($result);

    }

    if($result['success'] == false)
        Response::json($result, 400);

    return \Response::json($result);

});

Route::post('/place_order', function(){
   $request_body = [

   ];
    $status = true;
    if(!strlen(Config::get('access.client_token')))
        $status = get_generic_access_token();

    $result = [];

    if($status){
        $client = new \GuzzleHttp\Client;

        $response = $client->post(Config::get('motibu.API_URL').'public/place_order', [
            'headers' => [
                'Authorization' => 'Bearer '.Config::get('access.client_token')
            ],
            'body' => [
                'user_id' => \Input::get('user_id'),
                'plan_id' => \Input::get('plan_id'),
                'payment_info_card_no' => \Input::get('payment_info_card_no'),
                'payment_info_cvv' => \Input::get('payment_info_cvv'),
            ]
        ]);

        $result = $response->json();

        Log::info($result);

    }

    if($result['success'] == false)
        Response::json($result, 400);

    return \Response::json($result);

});

Route::get('/register/verify/{confirmation_code}', function($confirmation_code){
    $client = new \GuzzleHttp\Client;

    $response = $client->get(Config::get('motibu.API_URL').'register/verify/'.$confirmation_code, [
        'headers' => [
            'Authorization' => 'Bearer '.Config::get('access.client_token')
        ]
     ]);

    $result = $response->json();

    if($result['success']) {
        if (\Input::get('next_step') == 3)
            return Redirect::to('/?next_step=3&user_id='.\Input::get('user_id'));

        return Redirect::to('/');
    }

    return Response::make('Something Went Wrong! Try Again later.');
});

Route::get('login',['as' => 'login_path', function() {
   return View::make('session.login');
}]);

Route::post('login', function() {
    $email = Input::get('email');
    $password = Input::get('password');

    $client = new \GuzzleHttp\Client;

    // $response = $client->get(Config::get('motibu.API_URL').'users/login', [
    //    'headers' => [
    //        'MOTIBU_AUTH_USER' => $email,
    //        'MOTIBU_AUTH_PW' => $password
    //    ],
    //    'query' => ['access_token' => Config::get('access.token')]
    // ]);
    $response = $client->post(Config::get('motibu.API_URL').'oauth/access_token', [
       'body' => [
           'client_id' => Config::get('motibu.CLIENT_ID'),
           'client_secret' => Config::get('motibu.CLIENT_SECRET'),
           'username' => $email,
           'password' => $password,
           'grant_type' => 'password'
       ]
    ]);

    $result = $response->json();

    Session::put('USER', $result['user']);

    return \Response::json($result);
});

Route::get('user',['as' => 'user_path', function(){

    Flash::message('Codebase Passed OAuth Authentication. Access Token is: '.Config::get('access.token') );
    Flash::message('User Authenticated too.');
    return View::make('user.index');
}]);

Route::get('page/{view}', function ($view) {
    return View::make($view);
});

Route::post('begroan', function () {
  dd(Input::all());
});

