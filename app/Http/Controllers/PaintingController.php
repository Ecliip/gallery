<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
//use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $original = $request->file('image');
        $img_lg = Image::make($original);
        $img_lg->resize(600, null);
//        TODO: figure out how to store image in the storage
        $img_lg->save('public/images/new.png');
        $path_lg = $request->file('image')->store('images','public');
        $path_lg = $original.

//        $this->validate($request, [
//            'title'=>'required|min:2',
//            'description'=>'required|min:5|max:200',
//            'path_lg'=>'required'
//        ]);

        $painting = new Painting;
        $painting->title = $request->title;
        $painting->description = $request->description;
        $painting->date = $request->date;
        $painting->materials = $request->materials;
        $painting->path_sm = '-';
        $painting->path_md = '-';
        $painting->path_lg = $path_lg;
        $painting->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $painting = Painting::where('id', $id)->firstOrFail();
        return view('pages.painting')->with(['painting'=>$painting]);
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

    public function storeInPublic(Request $request)
    {

    }
}
