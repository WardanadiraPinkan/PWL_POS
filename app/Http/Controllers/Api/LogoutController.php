<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            // Get token from request header
            $token = $request->header('Authorization');
            
            if (!$token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token tidak ditemukan'
                ], 401);
            }

            // Remove "Bearer " from token string
            $token = str_replace('Bearer ', '', $token);
            
            // Set token
            JWTAuth::setToken($token);
            
            // Invalidate token
            JWTAuth::invalidate();

            return response()->json([
                'success' => true,
                'message' => 'Logout Berhasil!'
            ], 200);

        } catch (TokenExpiredException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token kadaluarsa'
            ], 401);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak valid'
            ], 401);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak bisa dinonaktifkan'
            ], 500);
        }
    }
}