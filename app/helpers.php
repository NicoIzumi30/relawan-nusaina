<?php

if (!function_exists('getApiUrl')) {
    /**
     * Mengembalikan URL API eksternal dari file konfigurasi.
     *
     * @return string
     */
    function getApiUrl()
    {
        return config('services.external_api.base_url');
    }
}

if (!function_exists('formatDate')) {
    /**
     * Format tanggal menjadi bentuk yang lebih mudah dibaca.
     *
     * @param  string  $date
     * @param  string  $format
     * @return string
     */
    function formatDate($date, $format = 'd-m-Y')
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}

if (!function_exists('generateUniqueId')) {
    /**
     * Menghasilkan ID unik yang bisa digunakan untuk penamaan file, dsb.
     *
     * @return string
     */
    function generateUniqueId()
    {
        return uniqid() . '-' . str_random(6);
    }
}

if (!function_exists('assetWithTimestamp')) {
    /**
     * Mengembalikan URL asset dengan timestamp untuk caching.
     *
     * @param  string  $path
     * @return string
     */
    function assetWithTimestamp($path)
    {
        $file = public_path($path);

        if (file_exists($file)) {
            return asset($path) . '?' . filemtime($file);
        }

        return asset($path);
    }
}

if (!function_exists('convertToJsonResponse')) {
    /**
     * Mengubah array atau objek menjadi JSON response.
     *
     * @param  mixed  $data
     * @param  int  $status
     * @return \Illuminate\Http\JsonResponse
     */
    function convertToJsonResponse($data, $status = 200)
    {
        return response()->json($data, $status);
    }
}

