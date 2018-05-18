<?php

namespace App\Http\Controllers;

use App\Affair;
use Illuminate\Http\Request;
use App\Http\Requests\AffairForm;

class AffairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affairs = Affair::all();
        return response()->json(['affairs' => $affairs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $affair = new Affair();
            $affair->document_type_id = $request->input('document_type_id');
            $affair->name = $request->input('name');
            $affair->description = $request->input('description');
            $affair->save();
            return response()->json(['message' => 'Affair saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function show(Affair $affair)
    {
        $affair = Affair::find($id);
        return response()->json(['affair' => $affair]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function edit(Affair $affair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affair $affair)
    {
        if($request->ajax())
        {
            $affair = Affair::find($id);
            $affair->document_type_id = $request->input('document_type_id');
            $affair->name = $request->input('name');
            $affair->description = $request->input('description');
            $affair->save();
            return response()->json(['message' => 'Affair updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affair $affair)
    {
        $affair = Affair::find($id);
        $affair->delete();
        return response()->json(['message' => 'Affair removed']);
    }
}
