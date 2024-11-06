<?php
<<<<<<< HEAD
namespace App\Http\Controllers\Api;
=======

namespace App\Http\Controllers\Api;

>>>>>>> acabc904b5cc370a12981355460067b09d9655b2
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return response()->json([
            "kategori_id" => 30,
            "kategori_kode" => "MKN",
            "kategori_nama" => "Makanan",  // Diubah dari "Minuman" ke "Makanan"
            "created_at" => "2024-09-11T00:02:23.000000Z",
            "updated_at" => null
        ], 200);
    }

    public function store(Request $request)
    {
        return response()->json([
            "kategori_id" => 30,
            "kategori_kode" => "MKN",
            "kategori_nama" => "Makanan",  // Diubah dari "Minuman" ke "Makanan"
            "created_at" => "2024-09-11T00:02:23.000000Z", 
            "updated_at" => null
        ], 201);
    }

    public function show($id)
    {
        return response()->json([
            "kategori_id" => 30,
            "kategori_kode" => "MKN",
            "kategori_nama" => "Makanan",  // Diubah dari "Minuman" ke "Makanan"
            "created_at" => "2024-09-11T00:02:23.000000Z",
            "updated_at" => null
        ], 200);
    }

    public function update(Request $request, $id) 
    {
        return response()->json([
            "kategori_id" => 30,
            "kategori_kode" => "MKN",
            "kategori_nama" => "Makanan",  // Diubah dari "Minuman" ke "Makanan"
            "created_at" => "2024-09-11T00:02:23.000000Z",
            "updated_at" => null
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
