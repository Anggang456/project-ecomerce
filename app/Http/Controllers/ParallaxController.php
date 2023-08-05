<?php

namespace App\Http\Controllers;
use App\Models\Parallax;
use Illuminate\Http\Request;
use App\Http\Controllers\CloudinaryStorage;

class ParallaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $parallax = Parallax::paginate(1);
        return view('parallax', compact('parallax'));
    }

    public function create(Request $request) {
        
        return view('parallax_create');
    }

    public function store(Request $request) {
        $parallax1  = $request->file('parallax1');
        $parallax2  = $request->file('parallax2');
        $parallax3  = $request->file('parallax3');
        $result1 = CloudinaryStorage::upload($parallax1->getRealPath(), $parallax1->getClientOriginalName()); 
        $result2 = CloudinaryStorage::upload($parallax2->getRealPath(), $parallax2->getClientOriginalName());
        $result3 = CloudinaryStorage::upload($parallax3->getRealPath(), $parallax3->getClientOriginalName());
        $data = Parallax::create([
            'parallax1' => $result1,
            'parallax2' => $result2,
            'parallax3' => $result3
        ]);
        return redirect()->route('parallax.index',compact('data'))->with(['success' => 'Data Berhasil Disimpan!']); 
    }
    public function edit(Parallax $parallax, Request $request) {
        return view('parallax_edit', compact('parallax'));
    }
    public function update(Request $request, $id) {
        $data = Parallax::find($id);
        $data->update($request->all());
        
        return redirect()->route('parallax.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
    public function destroy(Parallax $parallax) {
        $parallax->delete();
        return redirect()->route('parallax.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
