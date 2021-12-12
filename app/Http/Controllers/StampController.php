<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Carbon\Carbon;

class StampController extends Controller
{
    public function index()
    {
        $items = Work::all();
        return view('stamp', ['items' => $items]);
    }
    public function create()
    {
        $dt = Carbon::now('Asia/Tokyo');
        $time = $dt->nowWithSameTz()->format('H:i');
        $date = $dt->format('Y-m-d');
        Work::create([
            'user_name' => '兵庫正子',
            'date' => $date,
            'start_work_time' => $time,
            'end_work_time' => $time,
            'work_time' => $time
        ]);
        return redirect('/stamp');
    }
}
