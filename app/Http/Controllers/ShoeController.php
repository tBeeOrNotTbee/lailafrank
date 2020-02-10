<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\Shoe_img;
use App\Color;
use App\Stock;
use Illuminate\Http\Request;

class ShoeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $rules = [
            "name" => "string|unique:shoes,name",
            "description_es" => "string|required",
            "description_en" => "string|nullable",
            "description_por" => "string|nullable",
            "description_sw" => "string|nullable",
            "description_fr" => "string|nullable",
            "heels" => "required",
            "height_heels" => "string|required",
            "height_platform" => "string|required",
            "sole" => "required",
            "price" => "required",
            "chapped" => "required",
            "stock_control" => "required"
        ];



        $this->validate($req, $rules);

        $datos = [
            "name" => $req["name"],
            "description_es" => $req["description_es"],
            "description_en" => $req["description_en"],
            "description_por" => $req["description_por"],
            "description_sw" => $req["description_sw"],
            "description_fr" => $req["description_fr"],
            "heels" => $req["heels"],
            "height_heels" => $req["height_heels"],
            "height_platform" => $req["height_platform"],
            "sole" => $req["sole"],
            "price" => $req["price"],
            "chapped" => $req["chapped"],
            "stock_control" => $req["stock_control"],
            "cover" => $req["cover"],
            "hidden" => $req["hidden"],
            "offer" => $req["offer"],
            "category_id" => $req["category_id"]
        ];

        //dd($req->previewLargeCheck);

        $shoe = new Shoe($datos);

        $shoe->save();

        //Crear color por defecto.
        //$color = new Color(['shoe_id'=>$shoe->id, 'name'=>'Color único', 'color'=>'#000000']);

        //$shoe->color()->save($color);

        //imagenes

        if (isset($req->previewLarge)) {
            $previewLargeFile = $req->file('previewLarge')->store('public');

            $shoe_img = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewLargeFile),
                'category_id' => '3'
            ]);

            $shoe->shoe_img()->save($shoe_img);
        }
        //IMG PREVIEW A
        if (isset($req->previewA)) {
            $previewAFile = $req->file('previewA')->store('public');

            $shoe_imgA = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewAFile),
                'category_id' => '1'
            ]);

            $shoe->shoe_img()->save($shoe_imgA);
        }
        //IMG PREVIEW B
        if (isset($req->previewB)) {
            $previewBFile = $req->file('previewB')->store('public');

            $shoe_imgB = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewBFile),
                'category_id' => '2'
            ]);

            $shoe->shoe_img()->save($shoe_imgB);
        }

        return view('backend.backendVerProducto', compact("shoe"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
        //
    }

    public function actualizar(Request $req)
    {
        /* $rules = [
            "name" => "string|unique:shoes,name",
            "description_es" => "string|required",
            "description_en" => "string|nullable",
            "description_por" => "string|nullable",
            "description_sw" => "string|nullable",
            "description_fr" => "string|nullable",
            "heels" => "required",
            "height_heels" => "string|required",
            "height_platform" => "string|required",
            "sole" => "required",
            "price" => "required",
            "chapped" => "required",
            "stock_control" => "required"
        ];



        $this->validate($req, $rules); */

        $datos = [
            "id" => $req['id'],
            "name" => $req["name"],
            "description_es" => $req["description_es"],
            "description_en" => $req["description_en"],
            "description_por" => $req["description_por"],
            "description_sw" => $req["description_sw"],
            "description_fr" => $req["description_fr"],
            "heels" => $req["heels"],
            "height_heels" => $req["height_heels"],
            "height_platform" => $req["height_platform"],
            "sole" => $req["sole"],
            "price" => $req["price"],
            "chapped" => $req["chapped"],
            "stock_control" => $req["stock_control"],
            "cover" => $req["cover"],
            "hidden" => $req["hidden"],
            "offer" => $req["offer"],
            "category_id" => $req["category_id"]
        ];

        $shoe = Shoe::find($req['id']);
        $shoe->update($datos);

        $shoe_img = Shoe_img::where('shoe_id', '=', $shoe->id)->get();

        $updateOK = 1;

        return view('backend.backendVerProducto', compact('shoe', 'updateOK', 'shoe_img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Shoe $shoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        //
    }

    public function editarProductPreview(Request $req, $id)
    {
        $shoe = Shoe::find($id);

        //imagenes

        if (isset($req->previewLarge)) {
            $previewLargeFile = $req->file('previewLarge')->store('public');

            $shoe_img = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewLargeFile),
                'category_id' => '3'
            ]);

            $shoe->shoe_img()->save($shoe_img);
        }
        //IMG PREVIEW A
        if (isset($req->previewA)) {
            $previewAFile = $req->file('previewA')->store('public');

            $shoe_imgA = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewAFile),
                'category_id' => '1'
            ]);

            $shoe->shoe_img()->save($shoe_imgA);
        }
        //IMG PREVIEW B
        if (isset($req->previewB)) {
            $previewBFile = $req->file('previewB')->store('public');

            $shoe_imgB = new Shoe_img([
                'shoe_id' => $shoe->id,
                'img_path' => basename($previewBFile),
                'category_id' => '2'
            ]);

            $shoe->shoe_img()->save($shoe_imgB);
        }

        return redirect('/backend/editarProductPreview/'.$shoe->id);
    }

    public function cargaImgsProducts(Request $req, $id)
    {
        $shoe = Shoe::find($id);

        //dd($req->file('shoe_img'));

        foreach ($req->file('shoe_img') as $file) {
            $newImg = $file->store("public");

            $shoe_img = new Shoe_img(['shoe_id' => $shoe->id, 'img_path' => basename($newImg)]);

            $shoe->shoe_img()->save($shoe_img);
        }

        return redirect('/backend/verProducto/' . $id . '#shoeimg');
    }

    public function guardarColor(Request $req, $id)
    {
        $shoe = Shoe::find($id);
        $color = new Color(['name' => $req->name, 'color' => $req->color]);
        $shoe->color()->save($color);
        return redirect('/backend/verProducto/' . $id . '#color');
    }
}
