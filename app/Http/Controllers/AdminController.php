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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Null_;


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
        // $two_content = DB::table('twocontentdetails')->get();

        $two_content = DB::table('twocontentdetails')->get();
        // ->join('placename_tables', 'placename_tables.id', '=', 'twocontentdetails.pid')
        // ->select('twocontentdetails.*')
        // ->where('plcename_tables.id', '=', 'twocontentdetails.pid')->get();
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

        $division = DB::table('division_tables')->get();
        $divisionName = $request->division_Name;

        $category = DB::table('categories')->get();
         $categoryName = $request->Category;



        $placename = DB::table('placename_tables')->get();
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
        // 's3' => [        // 's3' => [
        //     'driver' => 's3',
        //     'key' => env('AWS_ACCESS_KEY_ID'),
        //     'secret' => env('AWS_SECRET_ACCESS_KEY'),
        //     'region' => env('AWS_DEFAULT_REGION'),
        //     'bucket' => env('AWS_BUCKET'),
        //     'url' => env('AWS_URL'),
        // ]
        //     'driver' => 's3',
        //     'key' => env('AWS_ACCESS_KEY_ID'),
        //     'secret' => env('AWS_SECRET_ACCESS_KEY'),
        //     'region' => env('AWS_DEFAULT_REGION'),
        //     'bucket' => env('AWS_BUCKET'),
        //     'url' => env('AWS_URL'),
        // ]
            $placenameTable->img = $request->get('img_one');




            // $image_one = $request->file('image_one');
            // $extension = $image_one->getClientOriginalExtension();
            // request()->image_one->move(public_path('images'), $image_one->getClientOriginalName());

            // $placenameTable->img = $image_one->getClientOriginalName();



            $placenameTable->placename_lat =  $request->get('lat');
            $placenameTable->placeName_long =  $request->get('long');
            $placenameTable->save();

               //
        foreach($placename as $pname)
            $twocontentdetails->pid = $pname->id+1;


            // $image_two = $request->file('image_two');
            // $extension = $image_two->getClientOriginalExtension();
            // request()->image_two->move(public_path('images'), $image_two->getClientOriginalName());
            // $twocontentdetails->img = $image_two->getClientOriginalName();

            $twocontentdetails->img1 = $request->get('img_two');
            $twocontentdetails->content1 = $request->get('content1');
            $twocontentdetails->img2 = $request->get('img_three');



            // $image_three = $request->file('image_three');
            // $extension = $image_three->getClientOriginalExtension();
            // request()->image_three->move(public_path('images'), $image_three->getClientOriginalName());
            // $twocontentdetails->img = $image_three->getClientOriginalName();

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

        $detailcontent = DB::table('twocontentdetails')
        ->select('pid')
        ->where('pid', '=', $id)->pluck('pid');
        $detailcontent = $detailcontent[0];


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

         $twocontent[] = DB::table('twocontentdetails')
         ->select('twocontentdetails.*')
         ->where('twocontentdetails.pid', '=', $detailcontent)
         ->first();

         $twocontents = $twocontent[0];

        //  echo $twocontents;



        // echo $editdataa;
         return view('backend.edit', compact(['editdata','division','category','twocontents']));

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
            'content1' => 'required',
            'content2' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'

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

            // $filename = time().'.'.$extension;
            // $image->move('images/', $filename);
            // $editdatas->img = $filename;

            request()->image_one->move(public_path('images'), $image->getClientOriginalName());
            $editdatas->img = $image->getClientOriginalName();
        }



        // $image = Input::file('image');
        // $filename  = time() . '.' . $editdatas->getClientOriginalExtension();
        // $path = public_path('images/' . $filename);
        // Image::make($editdatas->getRealPath())->resize(468, 249)->save($path);
        // $editdatas->image = 'img/products/'.$filename;
        // $product->save();



        $editdatas->placename_lat = $request->get('latitude');
        $editdatas->placeName_long = $request->get('longitude');
        $editdatas->save();


         $two_content =  twocontentdetail::where('pid', '=', $id)->first();
         $two_content->content1 = $request->get('content1');
         $two_content->content2 = $request->get('content2');
         $two_content->save();


         if($request->hasFile('image_two')) {
            $image = $request->file('image_two');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);
            $two_content->img1 = $request->file('image_two')->getClientOriginalName();
        }

        $two_content->save();

        //  $two_content->first()->update(['img1' => 'image_one']);
        $two_content->first()->update(['img2' => 'image_two']);


        //  $two_content->img1 = $request->get('imgage_two');
        // $two_content->img2 = $request->get('image_three');





        // $two_content->update();



        // echo "b";
        // $two_content->img1 = $request->get('img1');
        // $two_content->img2 = $request->get('img2');
        // $two_content->update();






// echo $two_content;


        // return redirect('/backend/index')->with('success','Contact Updates');

        // $editdatas->placeName = $request->get('placeName')->save($editdatas);

         return redirect('/backend/index')->with('success','Contact Updates');


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

    // $place = DB::table('placename_tables')->find($id);
    // // return view('backend.index', compact('display'));

    $detailcontent = DB::table('twocontentdetails')
        ->select('pid')
        ->where('pid', '=', $id)->pluck('pid');
        $detailcontent = $detailcontent[0];

        DB::delete('delete from twocontentdetails where pid = ? ',[$id]);
        $del->delete();


        // $del = DB::table('placename_tables')
        // ->join('twocontentdetails', 'twocontentdetails.pid', '=', 'placename_tables.id')
        // // ->delete('placename_tables.*', 'twocontentdetails.*')
        // // ->from('placename_tables', 'twocontentdetails')
        // ->where('placename_tables.id', '=', $detailcontent)
        // ->where('twocontentdetails.pid', '=', $detailcontent)
        // ->delete();
// $del = DB::table('placename_tables')->join('twocontentdetails','twocontentdetails.pid', '=', 'placename_tables.id')
// ->find($id);
//      $del->delete();

// DB::delete('delete from placename_tables,twocontentdetails where placename_tables.id = ? ',[$detailcontent]);


        return redirect('/backend/index')->with('success','Content Delete');
    }
    // public static function boot()
// {
//     parent::boot();

//     static::deleted(function($id){
//         $id->twocontentdetails()->delete();
//     });
// }
}
