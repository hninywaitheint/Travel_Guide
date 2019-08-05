<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use App\contentDetail;
use DB;
use App\morecontent;
use App\loginuser;
use App\placename;


class ContentController extends Controller
{



    public function showabout(){

        $divisions = DB::table('division_tables')
        ->select('*')->get();

        return view('frontend.about', compact('divisions'));
    }



    public function showdisplaytable(){
        $display = DB::table('placenames')
        ->join('divisions', 'divisions.id', '=', 'placenames.did')
        ->join('categories', 'categories.id', '=', 'placenames.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placenames.*', 'placenames.img', 'divisions.division_Name', 'categories.Category')
        ->get();

    //     // $displayimg = DB::table('twocontents')
    //     // ->join('placenames', 'placenames.id', '=', 'twocontents.pid')
    //     // ->select('twocontents.img')
    //     // ->where('placenames.id', '=', 'twocontents.pid')->get();

        return view('backend.index', compact('display'));
    // }

    // public function showmorecontent(){
    //     return view('frontend.morecontent');
    }

    public function showvisits(){
        return view('frontend.visit');
    }

    public function randommainpage(){
        $randomimg = DB::table('placename_tables')
        ->join('division_tables', 'placename_tables.did', '=', 'division_tables.id')
        ->join('categories', 'placename_tables.cid', '=', 'categories.id')
        ->select('placename_tables.*', 'division_tables.division_Name', 'categories.Category')
        ->orderBy(DB::raw('RAND()'))->take(21)->get();

        $division = DB::table('division_tables')
        ->select('*')->get();
        return view('frontend.mainpage',compact('randomimg','division'));
    }

    public function index() {
        $users = DB::table('morecontents')->select('*')->get();
        return view('frontend.morecontent',compact('users'));
    }


    public function showmorecontents($id){
        $image = DB::table('twocontents')->find($id);
        return view('frontend.morecontent',compact('image'));
    }


    public function showvisit($id){
        $image = DB::table('placenames')->find($id);

        $category = DB::table('placenames')
        ->select('cid')
        ->where('id', '=', $id)->pluck('cid');
        $category = $category[0];
        $moreimage = DB::table('placenames')
        ->join('divisions', 'placenames.did', '=', 'divisions.id')
        ->join('categories', 'placenames.cid', '=', 'categories.id')
        ->select('placenames.*', 'divisions.division_Name', 'categories.Category')
        ->where('placenames.cid', '=', $category)
        ->orderBy(DB::raw('RAND()'))->get();

        // $slideimages[] = DB::table('placenames')
        // ->join('divisions', 'placenames.did', '=', 'divisions.id')
        // ->join('categories', 'placenames.cid', '=', 'categories.id')
        // ->select('placenames.*')
        // ->where('placenames.cid', '=', $category)->get();
        // $slideimage=$slideimages[0];
        return view('frontend.visit',compact(['image','moreimage']));
    }

    public function showtwocontent($id){
        $twocontent = DB::table('placename_tables')->find($id);

        $detailcontent = DB::table('twocontents')
        ->select('pid')
        ->where('pid', '=', $id)->pluck('pid');
        $detailcontent = $detailcontent[0];

         $twocontents = DB::table('twocontents')
        ->select('twocontents.*')
        ->where('twocontents.pid', '=', $detailcontent)->get();

        $category = DB::table('placename_tables')
        ->select('cid')
        ->where('id', '=', $id)->pluck('cid');
        $category = $category[0];

        $division = DB::table('placename_tables')
        ->select('did')
        ->where('id', '=', $id)->pluck('did');
        $division = $division[0];

        $divisions = DB::table('division_tables')
        ->select('*')->get();


        $moreimage = DB::table('placename_tables')
        ->join('division_tables', 'placename_tables.did', '=', 'division_tables.id')
        ->join('categories', 'placename_tables.cid', '=', 'categories.id')
        ->select('placename_tables.*', 'division_tables.division_Name', 'categories.Category')
        ->where('placename_tables.cid', '=', $category)
        ->where('placename_tables.did', '=', $division)
        ->orderBy(DB::raw('RAND()'))->take(10)->get();
         return view('frontend.twocontent', compact(['twocontent','twocontents','moreimage','divisions']));
    }


    public function showaction($id){

        $divisionId = DB::table('division_tables')->find($id);

        $placenameDids = DB::table('placename_tables')
        ->select('did')
        ->where('did', '=', $id)->pluck('did');
        $placenameDid = $placenameDids[0];
        // echo $placenameDid;
        $moreimage = DB::table('placename_tables')
        ->join('division_tables', 'placename_tables.did', '=', 'division_tables.id')
        ->join('categories', 'placename_tables.cid', '=', 'categories.id')
        ->select('placename_tables.*', 'division_tables.division_Name', 'categories.Category')
        ->where('placename_tables.did', '=', $placenameDid)
        ->orderBy(DB::raw('RAND()'))->take(15)->get();

        $division = DB::table('division_tables')
        ->select('*')->get();


        $slideimages[] = DB::table('placename_tables')
        ->join('division_tables', 'placename_tables.did', '=', 'division_tables.id')
        ->join('categories', 'placename_tables.cid', '=', 'categories.id')
        ->select('placename_tables.*')
        ->where('placename_tables.did', '=', $placenameDid)->get();
        $slideimage=$slideimages[0];

        return view('frontend.action', compact(['moreimage','divisionId','division','slideimage']));
        // echo count($moreimage);


    }
//****************************************************login**********************88******************** */
    public function showloginuser(Request $request){
        $username = $request->get('username');
        $pass = $request->get('pass');
        $namepass = loginuser::all();
        $display = DB::table('placename_tables')
        ->join('division_tables', 'division_tables.id', '=', 'placename_tables.did')
        ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // ->join('twocontents', 'placenames.id', '=', 'twocontents.pid')
        ->select('placenames.*', 'placename_tables.img', 'division_tables.division_Name', 'categories.Category')
        ->get();

        $two_content = DB::table('twocontents')->get();

        foreach ($namepass as $value)
            if ($username == $value->username && $pass == $value->pass) {
                // dd('It come to me');
                return view('backend.index', compact('display','two_content'));
            }
            else{

                return view('auth.login')->with('alert', 'Deleted!');
            }
    }

    public function showadd(){
        return view('backend.add');
    }



}



