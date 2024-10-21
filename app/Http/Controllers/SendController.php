<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendController extends Controller
{
    public function store(Request $request)
    {
        $apiUrl = config('services.external_api.base_url');
        $token = session('token');
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'numeric'],
            'telepon' => ['required', 'numeric'],
            'ktp' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10480'],
            'kecamatan_id' => ['required', 'numeric'],
            'kelurahan_id' => ['required', 'numeric'],
            'tps_id' => ['required', 'numeric'],
        ], [
            'ktp.image' => 'File harus berupa gambar',
            'ktp.max' => 'File tidak boleh lebih dari 2 MB',
            'ktp.mimes' => 'File harus berupa jpeg, png, jpg, gif, svg',
            'ktp.required' => 'File KTP harus diisi',
            'tps_id.required' => 'TPS harus diisi',
            'kelurahan_id.required' => 'Kelurahan harus diisi',
            'kecamatan_id.required' => 'Kecamatan harus diisi',
            'nik.required' => 'NIK harus diisi',
            'telepon.required' => 'Telepon harus diisi',
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'nik.numeric' => 'NIK harus berupa angka',
            'telepon.numeric' => 'Telepon harus berupa angka',

        ]);
        // Siapkan data
        $data = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'telepon' => $request->telepon,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $request->kelurahan_id,
            'tps_id' => $request->tps_id,
        ];

        // Kirim file jika ada
        $httpRequest = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ]);

        if ($request->hasFile('ktp')) {
            $image = $request->file('ktp');
            $httpRequest->attach('foto_ktp', file_get_contents($image->getRealPath()), $image->getClientOriginalName());
        }

        $response = $httpRequest->post($apiUrl   . 'api/save-relawan', $data);
        // Cek respon dari server
        if ($response->successful()) {
            return redirect()->route('success');
        } else {
            return back()->with('error', 'Data gagal dikirim!');
        }
    }
}
