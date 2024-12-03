<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{

    public function list()
    {
        try {
            $data = Layanan::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'layanan' => 'required',
            ]);

            $data = Layanan::create([
                'layanan' => $validatedData['layanan'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'layanan' => 'required',
            ]);

            $data = Layanan::where('id', $id)->update([
                'layanan' => $validatedData['layanan'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Layanan::find($id);
            if ($data) {
                $data->delete();
                return response()->json(['id' => '1', 'data' => $data]);
            } else {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }
}
