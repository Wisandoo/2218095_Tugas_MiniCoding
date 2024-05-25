<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use PDF;
use Illuminate\Http\Request;

class DoktersController extends Controller
{
    public function generatePDF()
    {
        $dokters = Dokter::all();
        $pdf = PDF::loadView('dokter.pdf', compact('dokters'));
        return $pdf->download('dokters.pdf');
    }
}
