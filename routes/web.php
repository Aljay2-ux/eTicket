<?php

use App\Http\Controllers\IctServiceRequestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\SocialController;
use App\Models\IctInventory;
use App\Models\IctServiceRequest;
use App\Models\IctServiceRequestType;
use App\Models\RequestForm;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
// Route::get('login', [LoginController::class, 'create'])->name('login');
// Route::post('login', [LoginController::class, 'store']);

Route::get('/auth/{provider}/redirect', [SocialController::class, 'redirect'])
    ->where('provider', 'google');

Route::get('/auth/{provider}/callback', [SocialController::class, 'callback'])
    ->where('provider', 'google');

//     Route::get('/request/defect', [RequestController::class, 'create']);
  

// Route::post('/request/defect', [RequestController::class, 'store']);
    


// Route::get('/', function () {
//     return Inertia::render('Prof/Front', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });


Route::middleware('auth')->group(function (){

    Route::get('/', function(){
        return Inertia::render('Home');
    });
 
   Route::get('/create', function (Request $request) {

    // Use the request instance to get the 'search' input
    $search = $request->input('search');
    $filters = $request->only(['search']);

    return Inertia::render('Create', [
        
        'create' => User::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]),
            'filters' => $filters,
    ]);
})->name("create");

Route::get('/create', function () {

    return Inertia::render('Create');
});

Route::post('/create', function (Request $request) {
     
     $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
            
        ]);

        return redirect('/create');
});

Route::get('/register' ,function(){
        return Inertia::render('Auth/Register');
});

Route::get('/users' ,function(){
        return Inertia::render('Users');
});

Route::get('/request' ,function(){
        return Inertia::render('Request/RequestForm',[
            'assets' => IctInventory::get()->map(
                function ($inner){
                    return [
                        'code' => $inner -> code,
                        'equipment_type' => $inner -> ict_equipment_type -> name,
                        'date_acquired' => $inner -> date_acquired,
                        'id' => $inner -> id,
                        'serial_no' => $inner -> serial_no,
                    ];
                }
            ),
            
            
        ]);
});

Route::get('/profile' ,function(){
        return Inertia::render('Profile');
});

Route::get('/status' ,function(){
        return Inertia::render('Status');
});

Route::get('/request/defect' ,function(Request $request){
    
        return Inertia::render('Request/Defect',[
            'assets' => IctInventory::where("id", $request->input("asset_id")  ) ->get()->map(
                function ($inner){
                    return [
                        'code' => $inner ->  code,
                        'equipment_type' => $inner -> ict_equipment_type -> name,
                        'date_acquired' => $inner -> date_acquired,
                        
                        
                    ];
                }
            ), 'request_types' => IctServiceRequestType::all(),
                'asset_id' => $request->input("asset_id"),
                'asset_name' => $request->input("asset_name"),
            
            
        ]);
});

// Route::get('/request/defect/date' ,function(Request $request){
//         return Inertia::render('Request/Date',[
//             'assets_id' => IctInventory::where("id", $request->input("asset_id")  ) ->get()->map(
//                 function ($inner){
//                     return [
//                         'code' => $inner ->  code,
//                         'equipment_type' => $inner -> ict_equipment_type -> name,
//                         'date_requested' => $inner -> date_acquired,
                        
                        
//                     ];
//                 }
//             ), 'request_types' => IctServiceRequestType::all(),
//                 'asset_id' => $request->input("asset_id"),
//                 // 'asset_name' => $request->input("asset_name"),
            
            
//         ]);
// });

Route::get('/request/defect/date' ,function(Request $request){
       return Inertia::render('Request/Date',[
            'assets' => IctInventory::where("id", $request->input("asset_id")  ) ->get()->map(
                function ($inner){
                    return [
                        'code' => $inner ->  code,
                        'equipment_type' => $inner -> ict_equipment_type -> name,
                        'date_acquired' => $inner -> date_acquired,
                        
                        
                    ];
                }
            ), 'request_types' => IctServiceRequestType::all(),
                'asset_id' => $request->input("asset_id"),
                'asset_name' => $request->input("asset_name"),
            
            
        ]);
            
            
});

Route::get('/request/defect/date/confirmation' ,function(){
        return Inertia::render('Request/Confirmation');
});

// Route::post('/request/defect' ,function(Request $request){
        
//     return redirect('/request/defect',[
//             'assets' => IctInventory::get()->map(
//                 function ($inner){
//                     return [
//                         'code' => $inner -> code,
//                         'equipment_type' => $inner -> ict_equipment_type -> name,
//                         'date_acquired' => $inner -> date_acquired,
//                     ];
//                 }
//             ), 'asset_id'  => $request->input("asset_id"),
            
            
//         ]);
// });

Route::post('/save_request' ,function(){
        
    // $attribute = Request::validate([
    //     'description' => 'required',
    // ]);

    // RequestForm::create($attribute);

    // return redirect('/save_request');
});

Route::post('/request/defect/date/confirmation' ,function(){
        
    return redirect('/request/defect/date/confirmation');
});
Route::post('/' ,function(){
        return redirect('/');
});

Route::post('/status' ,function(){
        return redirect('/status');
});

Route::get('/try' ,function(){
       return Inertia::render('Request/Try');
});

});

Route::view('try','add_request');

Route::post('/request/defect', [RequestFormController::class, 'store']);


Route::post('/request/defect', [IctServiceRequestController::class, 'store']);
Route::post('/request/defect/date', [IctServiceRequestController::class, 'store']);