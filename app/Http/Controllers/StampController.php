<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Work;
use Carbon\Carbon;

class StampController extends Controller
{
    public function index()
    {
        $items = Work::all();
        return view('stamp', ['items' => $items]);
    }
    public function create_work_start()
    {
        $dt = Carbon::now('Asia/Tokyo');
        $time = $dt->nowWithSameTz();
        $date = $dt;
        Work::create([
            'user_name' => Auth::user()->name,
            'date' => $date,
            'start_work_time' => $time
        ]);
        return redirect('/stamp');
    }
    public function create_work_end()
    {
        $dt = Carbon::now('Asia/Tokyo');
        $time = $dt->nowWithSameTz()->format('H:i');
        $date = $dt->format('Y-m-d');
        $name = Auth::user()->name;
        $work = Work::where('user_name',$name)->first();
        $work->end_work_time = $time;
        $work_compute = (int)$work->end_work_time - (int)$work->start_work_time;
        logger((int)$work->end_work_time);
        logger((int)$work->start_work_time); 
        logger($work_compute);
        $work->work_time = (string)$work_compute;
        $work->save();
        return redirect('/stamp');
    }
}
