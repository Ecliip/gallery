<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
//use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class PaintingController extends Controller
{

    /**
     * PaintingController constructor.
     */
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $paintings = Painting::all();
       return view('pages.gallery')->with(['paintings'=>$paintings]);
    }

    /**
     * Show the form for creating a new.jpg resource.
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
//        $path_lg = $request->file('image')->store('images','public');
        $original = $request->file('image');

        $imagePathLg = $this->helperResize($original, $request->title, 600, 'lg');
        $imagePathMd = $this->helperResize($original, $request->title, 300, 'md');
        $imagePathSm = $this->helperResize($original, $request->title, 150, 'sm');

        $this->validate($request, [
            'title'=>'required|min:2',
            'description'=>'required|min:5|max:200',
        ]);

        $painting = new Painting;
        $painting->title = $request->title;
        $painting->description = $request->description;
        $painting->date = $request->date;
        $painting->materials = $request->materials;
        $painting->path_sm = $imagePathSm;
        $painting->path_md = $imagePathMd;
        $painting->path_lg = $imagePathLg;
        $painting->save();
        return redirect()->back();
    }

    public function helperResize ($original, $title, $width, $sizeLetters) {
        $imageName = $title;
        $imageName = preg_replace("/\s/", '_', $imageName);
        $image = Image::make($original)->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 75);
        $path = "images/{$sizeLetters}/{$imageName}_{$sizeLetters}.jpg";
        Storage::put("public/{$path}", $image->getEncoded());
        return $path;
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
//        return view('pages.painting')->with(['painting'=>$painting]);
        return response()->json(["painting"=>$painting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $painting = Painting::findOrFail($id);
        return view('pages.edit-painting')->with(['painting'=>$painting]);
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
//        $this->validate($request, [
//            'title'=>'min:3|required',
//            'description'=>'min:10|required',
//        ]);

        $painting = Painting::findOrFail($id);
        $painting->title = $request->title;
        $painting->description = $request->description;
        $painting->date = $request->date;
        $painting->materials = $request->materials;
        $painting->save();
        return redirect('/paintings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        TODO delete images from storage
        $painting = Painting::findOrFail($id);
        Storage::delete($painting->path_lg);
        Storage::delete($painting->path_md);
        Storage::delete($painting->path_sm);
//        $painting->delete();

        return redirect('/paintings');
    }

    public function storeInPublic(Request $request)
    {

    }
}
