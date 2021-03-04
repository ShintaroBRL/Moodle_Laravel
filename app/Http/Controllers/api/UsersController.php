<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class UsersController extends Controller{

  public function login (Request $request) {
    if(Usuarios::whereraw("user='".$request->user."' AND pass='".$request->pass."'")->exists()) {
      $usuario = Usuarios::whereraw("user='".$request->user."' AND pass='".$request->pass."'")->first();
      return response()->json([
        "token" => $usuario->token,
        "id" => $usuario->id,
        "type" => $usuario->type,
        "name" => $usuario->user
      ], 202);
    } else {
      return response()->json([
        "message" => "user not found"
      ], 404);
    }
  }

  public function register (Request $request) {
    $token = Str::random(60);
    $usuario = new Usuarios;
    $usuario->user = $request->user;
    $usuario->pass = $request->pass;
    $usuario->type = 1;
    $usuario->token = $token;
    $usuario->save();

    return response()->json([
      "token" => $usuario->token,
      "id" => $usuario->id,
      "type" => $usuario->type,
      "name" => $usuario->user
    ], 202);
  }

  public function getAllUsers () {
    Log::warning("Algem esta me chamando getAllUsers");
    $usuarios = Usuarios::get()->toJson(JSON_PRETTY_PRINT);
    return response($usuarios, 200);
  }

  public function getUser ($id) {
    if (Usuarios::where('id', $id)->exists()) {
      $usuario = Usuarios::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
      return response($usuario, 200);
    } else {
      return response()->json([
        "message" => "user not found"
      ], 404);
    }
  }

  public function updateUser (Request $request, $id) {
    if (Usuarios::where('id', $id)->exists()) {
      $usuario = Usuarios::find($id);
      $usuario->user = is_null($request->user) ? $usuario->user : $request->user;
      $usuario->pass = is_null($request->pass) ? $usuario->pass : $request->pass;
      $usuario->type = is_null($request->type) ? $usuario->type : $request->type;
      $usuario->save();

      return response()->json([
        "message" => "records updated successfully"
      ], 200);
    } else {
      return response()->json([
        "message" => "user not found"
      ], 404);
    }
  }

  public function deleteUser ($id) {
    if(Usuarios::where('id', $id)->exists()) {
      $usuario = Usuarios::find($id);
      $usuario->delete();

      return response()->json([
        "message" => "records deleted"
      ], 202);
    } else {
      return response()->json([
        "message" => "user not found"
      ], 404);
    }
  }
  
}
