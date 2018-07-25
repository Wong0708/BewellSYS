<?php

namespace App\Http\Controllers;


 use Illuminate\Http\Request;


 use App\Http\Requests;

 use App\Http\Controllers\Controller;

 use Illuminate\Support\Facades\DB;
 use App\Schedule;
 use App\ScheduleDetail;


class ScheduleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $schedule = Schedule::find($id);
        if($schedule['id'] == null){
            return view('errors.404');
        }
        $schedule_dets = DB::table('bc_schedule_detail')->join('bc_schedule','bc_schedule_detail.orderID','=','bc_schedule.id')->get()->toArray();

        return  view("appdev.scheduledetail",['schedule' => $schedule])->with("schedule_dets",$schedule_dets);

    }
    public function getSchedule($id){

        $schedule = Schedule::find($id);
        if($schedule['id'] == null){
            return view('errors.404');
        }
        $schedule_dets = DB::table('bc_schedule_detail')->join('bc_schedule','bc_schedule_detail.scheduleID','=','bc_schedule.id')->get()->toArray();

        return  view("appdev.scheduledetail",['schedule' => $schedule])->with("schedule_dets",$schedule_dets);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
