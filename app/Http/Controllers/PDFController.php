<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{

    public function PDF()
    {
        $id = 'borrowersname';
        $borroweds = Borrowed::where($id, 'Possimus architecto cum aliquid mollitia nihil deserunt.')->get();
        $pdf = PDF::loadView('PDF.test', compact('borroweds'))->setPaper('letter', 'portrait');
        return $pdf->stream();
    }
}
