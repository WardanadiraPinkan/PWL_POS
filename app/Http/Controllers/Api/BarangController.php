<?php
// app/Http/Controllers/Api/BarangController.php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'harga_jual' => 'required|numeric',
                'harga_beli' => 'required|numeric',
                'kategori_nama' => 'required|string'
            ]);
            // Insert ke database menggunakan Query Builder
            $result = DB::table('barang')->insert([
                'harga_jual' => $request->harga_jual,
                'harga_beli' => $request->harga_beli,
                'kategori_nama' => $request->kategori_nama,
                'created_at' => now()
            ]);
            if ($result) {
                return response()->json([
                    'message' => 'Berhasil menambah data'
                ], 201);
            }
            return response()->json([
                'message' => 'Gagal menambah data'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal menambah data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function index()
    {
        try {
            $barang = DB::select('
                SELECT 
                    ROW_NUMBER() OVER (ORDER BY id) as barang_id,
                    id,
                    harga_jual,
                    harga_beli,
                    kategori_nama,
                    created_at
                FROM barang
            ');
            return response()->json($barang, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal mengambil data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}