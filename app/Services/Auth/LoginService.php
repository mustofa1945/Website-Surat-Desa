<?php 
namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\Validation\BaseValidation;

class LoginService extends BaseValidation {

    public function handleValidation(array $data){

        $makeValidator = Validator::make($data, [
        
            'email' => [
                'required',
                'email', // Validasi email standar
            ],
            'password' => [
                'required',
                'string',
            ]
          
            ]);

        return $makeValidator->validate();
    }
    
    public function handleLogin(array $data){

        $user = User::where('email' , $data['email'])->first();


        if($user && Hash::check($data['password'] , $user->password)){
            Auth::login($user);

            return response()->json([
                'user' => true,
                'data-user' => $user,
            ], 200);
        }else{
            return response()->json([
                'user' => false,
                'data-user' => 'Not Found'
            ]);
        }

    }

    

}
?>