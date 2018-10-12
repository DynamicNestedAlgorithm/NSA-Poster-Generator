<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class PostersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poster.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // configure with favored image driver (gd by default)
        // $pic = Image::make(storage_path('uploads/'. $new_name'))
        if($request->hasFile('img')) {

            if($request->file('img')->isValid()) {
        
                $types = array('_original.', '_32.', '_64.', '_128.'); 
        
                $sizes = array( array('32','32'), array('64','64'), array('128','128'));
                $targetPath = '/Users/Ahmad/Desktop/NSA Poster Generator/public/uploads/';
        
            try {
                $file = $request->file('img');
                $file = $request->file('frame');
                $ext = $file->getClientOriginalExtension();
                $fName = time();
                $o_name = $fName . array_shift($types) . $ext;
                $original = Image::make($file->getRealPath());
                $original->save($targetPath . $o_name);
        
                                
                // paste another image
                $img->insert($file->getRealPath());

                // create a new Image instance for inserting
                $frame = Image::make($file->getRealPath());
                $img->insert($frame, 'center');

                // insert poster at bottom-right corner with 10px offset
                // $img->insert('public/poster.png', 'bottom-right', 10, 10);

                return $img->response('jpg');
        
            } 
             catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
            }
          }
        }

        // return $img->response('jpg');


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
