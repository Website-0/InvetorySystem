<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use App\Models\EquipmentItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $borroweds = Borrowed::all();
        $equipments = EquipmentItem::all();

        return view('dashboard', compact('borroweds', 'equipments'));
    }
}
