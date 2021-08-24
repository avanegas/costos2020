<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Http\Requests\OfertaRequest;
use Illuminate\Support\Facades\Storage;

class OfertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.ofertas.index')->only('index');
        $this->middleware('can:admin.ofertas.create')->only('create', 'store');
        $this->middleware('can:admin.ofertas.edit')->only('edit', 'update');
        $this->middleware('can:admin.ofertas.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.ofertas.index');
    }


    public function create()
    {
        return view('admin.ofertas.create');
    }

    public function store(OfertaRequest $request)
    {
        return $request->all();
        /*
        return $request->all();
        return $request->file('file');
        return Storage::put('posts', $request->file('file'));
        */
        $oferta = Oferta::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));
            $oferta->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.ofertas.edit',$oferta)->with('info', 'La oferta se creó con éxito');        //
    }

    public function edit(Oferta $oferta)
    {
        //$this->authorize('author', $oferta);
        return view('admin.ofertas.edit', compact('oferta'));
    }

    public function update(OfertaRequest $request, Oferta $oferta)
    {
        return $request->all();

        $this->authorize('author', $oferta);

        $oferta->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            if($oferta->image) {

                Storage::delete($oferta->image->url);
                $oferta->image->update([
                    'url' => $url
                ]);
            }else{
                $oferta->image()->create([
                    'url' => $url
                ]);
            }
            return redirect()->route('admin.ofertas.edit', $oferta)->with('info', 'La oferta se actualizó con éxito');
        }
    }

    public function destroy(Oferta $oferta)
    {
        $this->authorize('author', $oferta);

        $oferta->delete();

        return redirect()->route('admin.ofertas.index')->with('info', 'La oferta se eliminó con éxito');
    }
}
