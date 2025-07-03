<?php

namespace App\Http\Controllers;

use App\Models\IctServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IctServiceRequestController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'description_of_request' => 'required|string',
    //         'ict_service_request_type_id' => 'required|exists:ict_service_request_types,id',
    //         'ict_inventory_id' => 'required|exists:ict_inventories,id',
    //         'requested_by' => 'required|exists:users,name',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 422);
    //     }
    //     IctServiceRequest::create($request->all());
    //     // $serviceRequest = IctServiceRequest::create($request->all());

    //     // return response()->json($serviceRequest, 201);

    //     return redirect('/request/defect/date');
    // }


     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description_of_request' => 'required|string',
            'ict_service_request_type_id' => 'required|exists:ict_service_request_types,id',
            'ict_inventory_id' => 'required|exists:ict_inventories,id',
            'requested_by' => 'required|required|exists:users,name',
            'date_needed' => 'required|date',
            'created_by' => 'required|exists:users,id',
            // 'ict_technician_id' => 'required|exists:ict_technicians,id'

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // IctServiceRequest::create($validator);
        IctServiceRequest::create($request->all());
        // $serviceRequest = IctServiceRequest::create($request->all());

        // return response()->json($serviceRequest, 201);

        return redirect('/request/defect/date/confirmation')->with('success', 'Request Submitted');
    }
}