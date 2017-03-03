<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use Illuminate\Http\Request;

class ItemsController extends Controller
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
        $types = Type::get();
        return view('items.create', compact('types'));
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
            'type_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'featured' => 'required',

        ]);
        $item = Item::create([
            'type_id' => request('type_id'),
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'featured' => request('featured')
        ]);
        if (request()->file('image')) {
            $filename = $item->slug . '.png';
            request()->file('image')->storeAs('public/items', $filename);
        }

        session()->flash('message', 'Your menu item has been saved.');

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        $item = Item::where(['slug' => $slug])->first();
        $types = Type::get();

            if (request()->method() === 'POST') {

                 $this->validate(request(), [
                    'name' => 'required',
                    'description' => 'required',
                    'price' => 'required',
                    'featured' => 'required',
                    'type_id' => 'required',

                ]);

                $item = Item::where('slug', $slug)->first();
                $item->name = request('name');
                $item->description = request('description');
                $item->price = request('price');
                $item->featured = request('featured');
                $item->type_id = request('type_id');
                $item->save();

                if (request()->file('image')) {
                    // dd(request()->file('image'));
                    $filename = $item->slug . '.png';
                    $path = request()->file('image')->storeAs('items', $filename, 's3');
                }

                session()->flash('message', 'The item was successfully editted.');
                return redirect()->home();
            }

        return view('items.edit', compact('item', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $slug)
    {
        $item = Item::where('slug', $slug)->first();
        $item->delete();
        session()->flash('message', 'The menu item has been deleted.');

        return redirect()->home();
    }
}
