<?php

namespace App\Http\Controllers;

use App\Models\IctServiceRequest;
use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function store(Request $request){
        
        $input = $request -> all();
        
        IctServiceRequest::create([
            'description_of_request' =>  $input  ['description_of_request'],
        ]);

        return redirect('/request/defect');
    }
}
