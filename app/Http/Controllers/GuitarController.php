<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guitar;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $validationGuitars = [
       'brand' => 'required|string|max:100',
       'model' => 'required|string|max:100',
       'year' => 'required|numeric|min:1900|max:2020',
       'color' => 'required|string|max:50',
       'price' => 'required|numeric|min:1|max:9999,99',
       'description' => 'required|string'
     ];

    public function index()
    {
        $guitars = Guitar::all();
        return view('guitars.index', compact('guitars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate($this->validationGuitars);
        $guitar = new Guitar;
        $guitar->fill($data);

        $save = $guitar->save();

        if ($save) {
          return redirect()->route('guitars.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
      if(empty($guitar)) {
          abort('404');
      }
        return view('guitars.show', compact('guitar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
      if(empty($guitar)) {
          abort('404');
      }
        return view('guitars.edit', compact('guitar'));
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

        $guitar = Guitar::find($id);
        if(empty($guitar)) {
            abort('404');
        }
        $data = $request->all();
        $request->validate($this->validationGuitars);
        $updated = $guitar->update($data);

        if ($updated) {
          return redirect()->route('guitars.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
      $guitar->delete();

      return redirect()->route('guitars.index');
    }
}
