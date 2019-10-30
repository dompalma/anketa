<?php

namespace App\Http\Controllers;

use App\Respondent;
use Illuminate\Http\Request;
use App\Anketa;

class AnketaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'create']);
    }

    public function index()
    {
        return view('Anketa.index', [
            'anketa'=> Anketa::all()->sortBy('Respondent_id'),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Anketa.create', [
            'action' => route('anketa.store')
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(Anketa::rules());

        $anketa = new Anketa($validated);
        $anketa->save();

        return redirect(route('anketa.index'))->with('success', 'Veiksmīgi saglabāts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anketa = Anketa::find($id);
        return view('Anketa.show',compact('anketa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // return view('Anketa.create', [
       //   'anketa' => Anketa::find($id),
       //  'action' => route('anketa.update', $id)
       // ]);
        $anketa = Anketa::find($id);
       return view('Anketa.edit',compact('anketa'));

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
        $validated = $request->validate(Anketa::rules());

        $anketa = Anketa::find($id);
        $anketa->setRawAttributes($validated);
        $anketa->save();

        return redirect(route('anketa.index'))->with('success', 'Saglabāts veiksmīgi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anketa::find($id)->delete();
        return redirect()->route('anketa.index')->with('success','Dzēsts');
    }
}
