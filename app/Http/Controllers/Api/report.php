<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Models\post_report;
use App\Models\user_report;
class report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostReport()
    {
        return post_report::all();
    }
    public function postPostReport(Request $request){
        $post_report = new post_report;
        $post_report->post_id = $request->post_id;
        $post_report->user_id = $request->user_id;
        $post_report->reason = $request->reason;
        $post_report->message = $request->message;
        $post_report->status = 0;
        $post_report->created_at = date("Y-m-d H:i:m");

        $status =  $post_report->save();
        return response()->json($status);
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
