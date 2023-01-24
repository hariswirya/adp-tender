<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GrafikController extends Controller
{
    public function index()
    {
        $total_tender = \App\Models\InformasiTender::all()->count();
        $total_user = \App\Models\User::all()->count();
        $blmtender = \App\Models\InformasiTender::where('tahap', 'Tender Belum Berjalan')->count();
        $sdgtender = \App\Models\InformasiTender::where('tahap', 'Tender Sedang Berjalan')->count();
        $sdhtender = \App\Models\InformasiTender::where('tahap', 'Tender Telah Selesai')->count();
        $ggltender = \App\Models\InformasiTender::where('tahap', 'Tender Gagal')->count();
        return view('tender.grafik', [
            'total_tender' => $total_tender,
            'total_user' => $total_user,
            'blmtender' => $blmtender,
            'sdgtender' => $sdgtender,
            'sdhtender' => $sdhtender,
            'ggltender' => $ggltender,
        ]);
    }
}
