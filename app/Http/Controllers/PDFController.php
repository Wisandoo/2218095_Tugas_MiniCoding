<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Ambil data dokter dari database
        $dokters = \App\Models\Dokter::all();

        // Render tampilan Blade ke dalam HTML
        $html = view('Dokter.pdf', compact('dokters'))->render();

        // Buat objek DomPDF
        $dompdf = new Dompdf();

        // Load HTML ke dalam DomPDF
        $dompdf->loadHtml($html);

        // Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'landscape');

        // Render HTML ke dalam PDF
        $dompdf->render();

        // Keluarkan hasil PDF ke browser
        return $dompdf->stream('data_dokter.pdf');
    }
}
