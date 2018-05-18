<?php

namespace App\Http\Controllers;

use App\Parameter;
use Illuminate\Http\Request;
use App\Http\Requests\ParameterForm;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parameters = Parameter::all();
        return response()->json(['parameters' => $parameters]);
    }//

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
            $parameter = new Parameter();
            $parameter->name = $request->input('name');
            $parameter->description = $request->input('description');
            $parameter->value = $request->input('value');
            $parameter->save();
            return response()->json(['message' => 'Parameter saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function show(Parameter $parameter)
    {
        $parameter = Parameter::find($id);
        return response()->json(['parameter' => $parameter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function edit(Parameter $parameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parameter $parameter)
    {
        if($request->ajax())
        {
            $parameter = Parameter::find($id);
            $parameter->name = $request->input('name');
            $parameter->description = $request->input('description');
            $parameter->value = $request->input('value');
            $parameter->save();
            return response()->json(['message' => 'Parameter updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parameter $parameter)
    {
        $parameter = Parameter::find($id);
        $parameter->delete();
        return response()->json(['message' => 'Parameter removed']);
    }
}
