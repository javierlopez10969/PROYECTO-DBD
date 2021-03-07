<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        if($user != NULL){
            return response()->json($user);
        }
        return response()->json([
            "message"=>"No se encontró el user",
        ],404);
    }
	

    public function show($id)
    {
        if(is_numeric($id)){
            $user = User::find($id);
            if($user == NULL){
                return response()->json([
                    'message'=>'No se encontro el user'
                ]);
            }
            return response()->json($user);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function register(Request $request)
    {



        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'rol' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            ]);

        if ($validator->fails())
        {
            return response()->json(['status_code'=> 400, 'message' => 'Bad Request']);
        }
        $user = new User();
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = bcrypt($request->password);
        $user ->save();

        return response()->json([
            'status _code' => 200,
            'message' => ' User created Succefully'
        ]);   
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'email' => 'required|email',
            'password' => 'required'

            ]);

        if ($validator->fails())
        {
            return response()->json(['status_code'=> 400, 'message' => 'Bad Request']);
        }

        $credentials = request(['email','password']);

        if (!Auth::attempt($credentials))
        {
            return response()->json([
                'status _code' => 500,
                'message' => 'Unauthorized'
                
            ]);
        }

        $user = User::where('email',$request->email)->first();

        $tokenResult = $user->createToken('authToken')->plainTextToken;
        return redirect()->route('bienvenida');

/*
        return response()->json([
            'status _code' => 200,
            'token' => $tokenResult

        ]);
   */
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status _code' => 200,
            'token' => 'Token deleted Succcessfully'
        ]);
    }


        //Modifcar una tupla específica
        public function update(Request $request, $id)
        {
            if(is_numeric($id)){
                $user = Auth::user();
                if($user == NULL){
                    return response()->json([
                        'message'=>'No se encontro el usuario'
                    ]);
                }
                else{
                    if($request->name != NULL){
                        $user->name = $request->name;
                    }
                    if($request->telefono != NULL){
                        $user->telefono = $request->telefono;
                    }
                    if($request->telefono != NULL){
                        $user->email = $request->telefono;
                    }
                    $user->save();
                    return response()->json($user);
                }  
            }
            else{
                return response()->json([
                    'message'=>'id invalido'
                ],404);
            }
        }
}
