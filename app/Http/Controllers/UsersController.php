<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
  public function getAllUsers () {
    $usuarios = Usuarios::get()->toJson(JSON_PRETTY_PRINT);
    return response($usuarios, 200);
  }

  public function createUser (Request $request) {
    $usuario = new Usuarios;
    $usuario->user = $request->user;
    $usuario->pass = Hash::make($request->pass);
    $usuario->type = $request->type;
    $usuario->save();

    return response()->json([
        "message" => "user record created"
    ], 201);
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

  public function authuser (Request $request) {
    Log::warning("Algem esta me chamando");
    if(Usuarios::whereraw("user='".$request->user."' AND pass='".$request->pass."'")->exists()) {
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
