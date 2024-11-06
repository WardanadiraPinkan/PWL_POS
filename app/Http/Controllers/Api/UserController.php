<?php
<<<<<<< HEAD
namespace App\Http\Controllers\Api;
=======

namespace App\Http\Controllers\Api;

>>>>>>> acabc904b5cc370a12981355460067b09d9655b2
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return response()->json([
            "user_id" => 1,
            "level_id" => 2, 
            "nama" => "Manager",
            "profile_image" => null,
            "updated_at" => "2024-09-29T11:29:20.000000Z"
        ], 200);
    }

    public function store(Request $request)
    {
        return response()->json([
            "user_id" => 1,
            "level_id" => 2,
            "nama" => "Manager", 
            "profile_image" => null,
            "updated_at" => "2024-09-29T11:29:20.000000Z"
        ], 201);
    }

    public function show($id)
    {
        return response()->json([
            "user_id" => 1,
            "level_id" => 2,
            "nama" => "Manager",
            "profile_image" => null,
            "updated_at" => "2024-09-29T11:29:20.000000Z"
        ], 200);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            "user_id" => 1,
            "level_id" => 2,
            "nama" => "Manager",
            "profile_image" => null,
            "updated_at" => "2024-09-29T11:29:20.000000Z"
        ], 200);
    }

    public function destroy($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus'
        ], 200);
    }
}
=======
    //
}
>>>>>>> acabc904b5cc370a12981355460067b09d9655b2
