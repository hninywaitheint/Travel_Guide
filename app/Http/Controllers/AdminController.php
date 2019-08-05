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
use App\twocontentdetail;

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
        $adddattwocontenta = DB::table('placename_tables')
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
            'lat'=> 'required',
            'long' => 'required',
            'img_two' => 'required',
            'img_three' => 'required',
            'content1' => 'required',
            'content2' => 'required'

        ]);

        // $categoryMatch =  DB::table('placename_tables')
        // ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // ->select('placename_tables.*', 'categories.*');



        // $adddata = DB::table('placename_tables')
        // ->join('division_tables', 'division_tables.id', '=', 'placename_tables.did')
        // ->join('categories', 'categories.id', '=', 'placename_tables.cid')
        // // ->join('twocontents', 'placename_tables.id', '=', 'twocontents.pid')
        // ->select('placename_tables.*','division_tables.*', 'categories.*')
        // // ->where('placename_tables.id', '=', $id)
        // ->get();

        $division = DB::table('division_tables')->get();
        // echo $division;

        $category = DB::table('categories')->get();

        $categoryName = $request->Category;
        $divisionName = $request->division_Name;

$placename = DB::table('placename_tables')->get();



        // echo $adddata->toJson();

        // foreach($adddata as $add){
            // echo $add->division_Name . ';' . $add->Category . ' === ' . $categoryName . '+' . $divisionName . '<br>';
            // if($add->Category == $categoryName && $add->division_Name == $divisionName){
                // $image_one = $request->file('img_one');
                // $image_two = $request->file('img_two');
                // $image_three = $request->file('img_three');

                // $extension_one = $image_one->getClientOriginalExtension();
                // $extension_two = $image_two->getClientOriginalExtension();
                // $extension_three = $image_three->getClientOriginalExtension();

                // request()->image_one->move(public_path('images'),$image_one->getClientOriginalName());
                // request()->image_two->move(public_path('images'),$image_two->getClientOriginalName());
                // request()->image_three->move(public_path('images'),$image_three->getClientOriginalName());

                // echo "yout tal";
                // $editdatas =placename::create();



        // $placenameTable->did = $request->get('division_Name');
        $placenameTable = new placenameTable();
        $twocontentdetails = new twocontentdetail();
        foreach($division as $div)
            if($div->division_Name == $divisionName){
                $placenameTable->did = $div->id;

            }

            foreach($category as $cat)
            if($cat->Category == $categoryName){
                $placenameTable->cid = $cat->id;

            }




        $placenameTable->placeName = $request->get('placeName');
        // $placenameTable->cid = $request->get('Category');

        $placenameTable->img = $request->get('img_one');
        $placenameTable->placename_lat =  $request->get('lat');
        $placenameTable->placeName_long =  $request->get('long');
        $placenameTable->save();
        // $two_content =  twocontent::create();
        // $twocontent->first()->update(['img' => 'image_two']);
        // $twocontent->last()->update(['img' => 'image_three']);
 foreach($placename as $pname)

        $twocontentdetails->pid = $pname->id+1;
        $twocontentdetails->img1 = $request->get('img_two');
        $twocontentdetails->content1 = $request->get('content1');
        $twocontentdetails->img2 = $request->get('img_three');
        $twocontentdetails->content2 = $request->get('content2');
        $twocontentdetails->save();




        return redirect('/backend/index')->with('success','Contact Updates');


            }
        // }
    // }
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
