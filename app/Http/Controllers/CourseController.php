<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use App\Course;
use App\Client;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('courses.create')->with('clients', $clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validation
        $this->validate($request, [
            'cursa' => 'required',
            'clientID' => 'required',
            'plecareData' => 'required',
            'plecareLocatie' => 'required',
            'sosireData' => 'required',
            'sosireLocatie' => 'required',
            'intoarcereData' => 'required',
            'intoarcereLocatie' => 'required',
            'europaletiIncarcat' => 'required',
            'europaletiDescarcat' => 'required',
            'pret' => 'required',
            'kilometriParcurs' => 'required',
            'notes' => 'required'
        ]);


        //Create post

        $course = Course::create([
            'cursa' => $request->cursa,
            'clientID' => $request->clientID,
            'plecareData' => $request->plecareData,
            'plecareLocatie' => $request->plecareLocatie,
            'sosireData' => $request->sosireData,
            'sosireLocatie' => $request->sosireLocatie,
            'intoarcereData' => $request->intoarcereData,
            'intoarcereLocatie' => $request->intoarcereLocatie,
            'europaletiIncarcat' => $request->europaletiIncarcat,
            'europaletiDescarcat' => $request->europaletiDescarcat,
            'pret' => $request->pret,
            'kilometriParcurs' => $request->kilometriParcurs,
            'notes' => $request->notes
        ]);


        //Flash message
        Session::flash('success', 'Tura a fost adaugata');



        return redirect()->route('courses.index');
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
        $course = Course::find($id);

        $clients = Client::all();

        return view('courses.edit')->with('course', $course)
            ->with('clients', $clients);
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

        $this->validate($request, [
            'cursa' => 'required',
            'clientID' => 'required',
            'plecareData' => 'required',
            'plecareLocatie' => 'required',
            'sosireData' => 'required',
            'sosireLocatie' => 'required',
            'intoarcereData' => 'required',
            'intoarcereLocatie' => 'required',
            'europaletiIncarcat' => 'required',
            'europaletiDescarcat' => 'required',
            'pret' => 'required',
            'kilometriParcurs' => 'required',
            'notes' => 'required'
        ]);


        $course = Course::find($id);


        $course->cursa = $request->cursa;
        //$course->clientID = $request->clientID;
        $course->plecareData = $request->plecareData;
        $course->plecareLocatie = $request->plecareLocatie;
        $course->sosireData = $request->sosireData;
        $course->sosireLocatie = $request->sosireLocatie;
        $course->intoarcereData = $request->intoarcereData;
        $course->intoarcereLocatie = $request->intoarcereLocatie;
        $course->europaletiIncarcat = $request->europaletiIncarcat;
        $course->europaletiDescarcat = $request->europaletiDescarcat;
        $course->pret = $request->pret;
        $course->kilometriParcurs = $request->kilometriParcurs;
        $course->notes = $request->notes;

        $course->save();

        Session::flash('success', 'Cursa a fost modificata');

        return redirect()->route('courses.index');
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