<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $token = session('token');
        $apiUrl = config('services.external_api.base_url');
        $kecamatans = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get($apiUrl . 'api/get-kecamatan')->json()['data'];
        $anggotas = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,                    
            'Accept' => 'application/json',
        ])->get($apiUrl . 'api/data-anggota')->json()['data'];  
        $profile = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get($apiUrl . 'api/user-kordinator')->json()['data'];
        return view('index', compact('kecamatans', 'anggotas', 'profile'));
    } 
    public function daftar(){
        $apiUrl = config('services.external_api.base_url');
        $token = session('token');      
        $kecamatans = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get($apiUrl . 'api/get-kecamatan')->json(); 
        return view('daftar', [
            'kecamatans' => $kecamatans['data'],
        ]);
    } 
    public function getKelurahan(Request $request, $id){
        $apiUrl = config('services.external_api.base_url');
        $token = session('token');
        $kelurahans = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get($apiUrl . 'api/kelurahan/by-kecamatan/'.$id);
        return json_decode($kelurahans);
    } 
    public function getTps(Request $request, $id){
        $apiUrl = config('services.external_api.base_url');
        $token = session('token');
        $tps = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get($apiUrl. 'api/tps/by-kelurahan/'.$id);
        return json_decode($tps);
    }

}
