<?php

namespace App\Http\Controllers;

use App\Models\InformasiTender;
use Illuminate\Http\Request;
use App\Exports\InformasiTenderExport;
use PDF;
use Excel;

class InformasiTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function beranda()
    {
        $total_tender = \App\Models\InformasiTender::all()->count();
        $total_user = \App\Models\User::all()->count();
        $blmtender = \App\Models\InformasiTender::where('tahap', 'Tender Belum Berjalan')->count();
        $sdgtender = \App\Models\InformasiTender::where('tahap', 'Tender Sedang Berjalan')->count();
        $sdhtender = \App\Models\InformasiTender::where('tahap', 'Tender Telah Selesai')->count();
        $ggltender = \App\Models\InformasiTender::where('tahap', 'Tender Gagal')->count();
        return view('tender.index', [
            'total_tender' => $total_tender,
            'total_user' => $total_user,
            'blmtender' => $blmtender,
            'sdgtender' => $sdgtender,
            'sdhtender' => $sdhtender,  
            'ggltender' => $ggltender
        ]);
        // return dd($peg);
        // return response()->json(['data' => $pegawai]);
    }
    
    public function index()
    {   
        $informasitender = \App\Models\InformasiTender::all();
        return view('tender.inftender', [
            'informasitender' => $informasitender,
        ]);
        
       
        // return dd($peg);
        // return response()->json(['data' => $pegawai]);
    }

    public function exportpdf(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $informasitender = \App\Models\InformasiTender::all();
        $data = PDF::loadview('tender.laporan ', compact('informasitender'));
        //mendownload laporan.pdf
    	return $data->download('rekaptender.pdf');
    }

    public function exportexcel(){
        //mendownload laporan excel
    	return Excel::download(new InformasiTenderExport, 'rekaptender.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiTender  $informasiTender
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiTender $informasiTender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiTender  $informasiTender
     * @return \Illuminate\Http\Response
     */
    public function edit(InformasiTender $informasiTender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformasiTender  $informasiTender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformasiTender $informasiTender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiTender  $informasiTender
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformasiTender $informasiTender)
    {
        //
    }
}
