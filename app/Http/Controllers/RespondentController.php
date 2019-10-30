<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respondent;

class RespondentController extends Controller
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
        $respondent = Respondent::orderBy('age','asc')->paginate(5);
        return view('Respondenti.index', compact('respondent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Respondenti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'gender' => 'string',
            'age' => 'required|integer',
        ]);

        $respondent = new respondent($validated);
        $respondent->save();

        //Respondent::create($request->all());
        return redirect()->route('respondent.index')->with('success','Veiksmīgi sagalbāts!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respondent = Respondent::find($id);
        return view('Respondenti.show',compact('respondent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  return view('Respondenti.create', [
       //     'respondent' => Respondent::find($id),
       //     'action' => route('respondent.update', $id)
      //  ]);
        $respondent = Respondent::find($id);
       return view('Respondenti.edit',compact('respondent'));
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
      /*  $validated = $request->validate([
            'respondent_id' => 'required|exists:respondent,id',
            'name'=> 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'age' => 'required|integer',
        ]);

        $respondent = respondent::find($id);
        $respondent->setRawAttributes($validated);
        $respondent->save();
*/
       // return redirect('/respondent')->with('success', 'Saglabāts veiksmīgi!');
        Respondent::find($id)->update($request->all());
       return redirect()->route('respondent.index')->with('success','Veiksmīgi saglabāts!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Respondent::find($id)->delete();
        return redirect()->route('respondent.index')->with('success','Dzēsts');
    }
}

