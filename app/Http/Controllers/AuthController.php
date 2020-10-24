<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class AuthController extends Controller
{

  public function register(Request $request)
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    $token = auth()->login($user);

    return $this->respondWithToken($token);
  }

  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }

  public function list()
  {
    return User::all();
  }

  public function delete($id)
  {
    $user = User::find($id);
    $result = $user->delete();
    return("This user has been deleted ".$id);

  }

  function replace(Request $request)
  {
    try{
      $user = User::findOrFail($request->id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);

      $result = $user->save();
      return ("Record change successful");
    }

    catch(ModelNotFoundException $e){
      return("fail");
    }


  }





}
