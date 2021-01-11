<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TumkmNew extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
        $tumkms = tumkm::all();
        return view('indexpawb', ['tumkms' => $tumkms]);
    }


    public function beranda()
    {
        $tumkms = tumkm::all();
        return view('indexpawb', ['tumkms' => $tumkms]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_tumkm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDATAtumkm = $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);

        tumkm::create($validatedDATAtumkm);
        
        return redirect()->route('indexpawb');
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
       // tumkm::where('id', $tumkm)->edit();
        //return redirect()->route('indexpawb');
        $tuma=tumkm::findorfail($id);
        return view('editum', compact('tuma'));
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
        // $request->validate([
        //     'jenis' => 'required',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'kontak' => 'required',
        //     ]);
        //     $tumkms->update($request->all());
        //     $tumkms -> id -> $request->id;
            $tuma=tumkm::findorfail($id);
            $tuma->update($request->all());
            return redirect()->route('indexpawb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tumkm::where('id', $id)->delete();
        return redirect()->route('indexpawb');
    }
}
