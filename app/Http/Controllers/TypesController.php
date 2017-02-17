<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
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
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',

        ]);

        $type = Type::create([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        session()->flash('message', 'Your menu type has been saved.');

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        $type = Type::where(['slug' => $slug])->first();

            if (request()->method() === 'POST') {
                // dd(request('featured'));
                 $this->validate(request(), [
                    'name' => 'required',
                    'description' => 'required',

                ]);
                $type = Type::where('slug', $slug)->first();
                $type->name = request('name');
                $type->description = request('description');
                $type->save();
                session()->flash('message', 'The menu type was successfully editted.');
                return redirect()->home();
            }

        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $slug)
    {
        $type = Type::where('slug', $slug)->first();
        $type->delete();
        session()->flash('message', 'The menu type has been deleted.');

        return redirect()->home();
    }
}
