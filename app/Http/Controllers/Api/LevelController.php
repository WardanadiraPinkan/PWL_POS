<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'level_kode' => 'required|string',
            'level_nama' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Buat record baru
        $level = LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama
        ]);

        // Format response
        return response()->json([
            'level_kode' => $level->level_kode,
            'level_nama' => $level->level_nama,
            'updated_at' => $level->updated_at,
            'created_at' => $level->created_at,
            'level_id' => $level->level_id
        ], 201);
    }

    public function index()
    {
        $levels = LevelModel::all();
        return response()->json($levels);
    }

    public function show($id)
    {
        $level = LevelModel::find($id);
        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level tidak ditemukan'
            ], 404);
        }
        return response()->json($level);
    }

    public function update(Request $request, $id)
    {
        $level = LevelModel::find($id);
        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level tidak ditemukan'
            ], 404);
        }

        $level->update($request->all());
        return response()->json($level);
    }

    public function destroy($id)
    {
        $level = LevelModel::find($id);
        if (!$level) {
            return response()->json([
                'success' => false,
                'message' => 'Level tidak ditemukan'
            ], 404);
        }

        $level->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus'
        ]);
    }
}