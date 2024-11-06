<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:m_user,username',
            'nama' => 'required|string',
            'password' => 'required|string|confirmed',
            'level_id' => 'required|integer'
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Create a new user record
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);

        // Return a success response with user data
        return response()->json([
            'success' => true,
            'user' => [
                'username' => $user->username,
                'nama' => $user->nama,
                'password' => $user->password,
                'level_id' => $user->level_id,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
                'user_id' => $user->user_id,
            ]
        ], 201);
    }
}
