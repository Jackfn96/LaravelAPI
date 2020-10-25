<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class AuthController extends Controller
{
  // Register new user
  public function register(Request $request)
  {
    if (User::where('email', '=', $request->email)->exists()) {
      return ("Email already exists, please try again.");
    }

    else{
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    $token = auth()->login($user);

    return $this->respondWithToken($token);
    }
  }

  // Returns access token if user were to require login functionality
  protected function respondWithToken($token)
  {
    return response()->json([
      'result' => 'Registration successful',
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }

  // Returns list of all registered users
  public function users()
  {
    return User::all();
  }

  // Delete a specified user by user id
  public function delete($id)
  {
    try{
    $user = User::findorFail($id);
    $result = $user->delete();
    return("The user has been deleted id:".$id);
  }

    catch(ModelNotFoundException $e) {
      return("Record deletion failed, user id does not exist");
  }
  }

  // Update user details
  function update(Request $request)
  {
    try{
      $user = User::findOrFail($request->id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);

      if (User::where('email', '=', $request->email)->exists()) {
        return ("Email already exists, please try again.");
      }

      else{
        $result = $user->save();
        return ("Record change successful");
      }
    }

    // If user id is not found:
    catch(ModelNotFoundException $e){
      return("Record change failed, user id does not exist");
    }
  }
}
