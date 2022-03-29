<?php
use Illuminate\Support\Facades\Route;

// API ---------------------------------------------------------------------------------------------------------------------------------------------------------
Route::group([
    'namespace' => 'PipIWYG\SablUI\Http\Controllers'
], function() {
    // Generic route for all API Requests to a dynamic query parameter
    Route::match([
//        'PUT',
//        'POST',
        'GET',
        //'DELETE', <-- Not Implemented
        //'PATCH', <-- Not Implemented
    ], '/', [
        'as' => 'api.sabl-ui.home',
        'uses' => 'SablUIController@home',
    ]);
});
