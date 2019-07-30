<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html\FormFacade;
use Illumiate\Support\Collection;
use App\placename;
use App\content;
use App\contentDetail;
use DB;
use App\morecontent;
use App\loginuser;
use App\twocontent;
use App\placenameTable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //  $display = DB::table('placenames')
        // ->join('divisions', 'divisions.id', '=', 'placenames.did')
        // ->join('categories', 'categories.id', '=', 'placenames.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        // ->select('placenames.*', 'placenames.img', 'divisions.division_Name', 'categories.Category', 'twocontents.content')
        // ->get();

        $display = DB::table('placename_tables')
        ->join('division_tables', 'division_tables.id', '=', 'placename_tables.did')
        ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placename_tables.*', 'placename_tables.img', 'division_tables.division_Name', 'categories.Category')
        ->get();
        // $editdata = placenames::find($id);
        // dd($display->count());
        $two_content = DB::table('twocontents')->get();
        return view('backend.index', compact('display','two_content'));
        // return view('backend.index', compact('display'));
        // echo $two_content;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adddata = DB::table('placename_tables')
        ->join('division_tables', 'division_tables.id', '=', 'placename_tables.did')
        ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placename_tables.*', 'placename_tables.img', 'division_tables.division_Name', 'categories.Category')
        // ->where('placenames.id', '=', $id)
        ->get();
        return view('backend.add', compact('adddata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'placeName' => 'required',
            'Category' => 'required',
            'division_Name' => 'required',
            'img_one' => 'required',
            'img_two' => 'required',
            'img_three' => 'required'
        ]);

        $adddata = DB::table('placenames')
        ->join('divisions', 'divisions.id', '=', 'placenames.did')
        ->join('categories', 'categories.id', '=', 'placenames.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placenames.*','divisions.*', 'categories.*')
        // ->where('placenames.id', '=', $id)
        ->get();

        $categoryName = $request->categoryName;
        $divisionName = $request->divisionName;

        foreach($adddata as $add){
            if($add->Category == $categoryName && $add->division_Name == $divisionName){
                $image_one = $request->file('img_one');
                $image_two = $request->file('img_two');
                $image_three = $request->file('img_three');

                $extension_one = $image_one->getClientOriginalExtension();
                $extension_two = $image_two->getClientOriginalExtension();
                $extension_three = $image_three->getClientOriginalExtension();

                request()->image_one->move(public_path('images'),$image_one->getClientOriginalName());
                request()->image_two->move(public_path('images'),$image_two->getClientOriginalName());
                request()->image_three->move(public_path('images'),$image_three->getClientOriginalName());

                $editdatas =placename::all();

        $editdatas->placeName = $request->get('placeName');
        $editdatas->cid = $add->cid;
        $editdatas->did = $add->did;
        $editdatas->img = $request->get('img_one');
        $editdatas->save();
        $two_content =  twocontent::all();
        $two_content->first()->update(['img' => 'image_two']);
        $two_content->last()->update(['img' => 'image_three']);

        return redirect('/backend/index')->with('success','Contact Updates');


            }
        }
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
    public function edit($id){


        $editdatas = DB::table('placename_tables')->find($id);

        // $twocontent = DB::table('twocontents')
        // ->select('pid')
        // ->where('id', '=', $id)->pluck('pid');
        // $twocontent = $twocontent[0];

        $editdataa = DB::table('placename_tables')
        ->join('division_tables', 'division_tables.id', '=', 'placename_tables.did')
        ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placename_tables.*', 'placename_tables.img', 'division_tables.division_Name', 'categories.Category')
        ->where('placename_tables.id', '=', $id)
        ->get();
        $editdata=$editdataa[0];

        $division = DB::table('division_tables')
        ->select('division_tables.*')->get();

        $category = DB::table('categories')
        ->select('categories.*')->get();

         $twocontent = DB::table('twocontents')->get();



        // echo $twocontent;
        return view('backend.edit', compact(['editdata','division','category']));

//*********************************************************************************************************88
        // $editdata = DB::table('placenames')->find($id);
        // $editdataa = DB::table('placenames')
        // ->select('placenames.*')->get();
        // return view('backend.editplace', compact('editdata', 'id'));

    }

    /**enames' npublic function destroy($id){
    //     $deletedata = DB::table('placenames')->find($id);

    //     $delepublic function destroy($id){
    //     $deletedata = DB::table('placenames')->find($id);

    //     $deletedata->delete();

    //     return redirect('/displaytable');
    // }
tedata->delete();

    //     return redirect('/displaytable');
    // }
ot found"
Environment & details:
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $request->validate([
            'placeName' => 'required',
            'Category' => 'required',
            'division_Name' => 'required',
            'img_one' => 'required',
            'img_two' => 'required',
            'img_three' => 'required',
            't' => 'required'
        ]);
         $editdatas =placenameTable::find($id);

        $editdatas->placeName = $request->get('placeName');
        $editdatas->cid = $request->get('Category');
        $editdatas->did = $request->get('division_Name');

        //  if($request->get('img_one') != null){
        //     $editdatas->img = $request->get('img_one');
        // }

        if($request->hasFile('image_one')){
            $image = $request->file('image_one');
            $extension = $image->getClientOriginalName();
            request()->image_one->move(public_path('images'), $image->getClientOriginalName());
            $editdatas->img = $image->getClientOriginalName();
        }

        $editdatas->save();
        $two_content =  twocontent::where('pid', '=', $id)->get();
        $two_content->first()->update(['img' => 'image_one']);
        $two_content->last()->update(['img' => 'image_two']);

        $editdatas->latitude = $request->get('placename_lat');
        $editdatas->longitude = $request->get('placeName_long');




        return redirect('/backend/index')->with('success','Contact Updates');

        // $editdatas->placeName = $request->get('placeName')->save($editdatas);

        //  return redirect('backend.edit')->with('success','Contact Updates');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del= placenameTable::find($id);
    //    dd('it come here');
       $del->delete();
    //    return view('backend.index', compact('display'));

        return redirect('/backend/index')->with('success','Content Delete');
    }
}
