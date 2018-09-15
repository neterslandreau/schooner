<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CartController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return \Cart::all();
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
		if (request()->method() === 'POST') {

			$item = Item::where(['slug' => request('slug')])->first();

			$extras = [];
			if (request('extras')) {
				$extras = implode(',', request('extras'));
			}

			if ($row = \Cart::add(
				$item->slug,
				$item->name,
				request('quantity'),
				$item->price,
				['notes' => ['comments' => request('notes'), 'extras' => $extras]]
			)) {
				// $rtn['row'] = $row;
				// $rtn['cartTotal'] = \Cart::total();
				// $html = '<tr><td>hello</td></tr>';
				// return $rtn;
				$message = request('quantity') . ' ' . str_plural($item->name, request('quantity')) . ' was successfully added to your cart.';
				session()->flash('message', $message);
				return 'success';
			} else {
				return 'failed';
			}
		}
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request)
	{

		if (request()->method() === 'POST') {
			$slug = request('slug');
			$quantity = request('quantity');
			$notes = request('notes_'.$slug);

			if (\Cart::update($slug, ['qty' => $quantity, 'notes' => $notes])) {
				return number_format(\Cart::total(), 2);
			} else {
				return 'failed';
			}

		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Request $request)
	{
		if (request()->method() === 'POST') {
			if (\Cart::remove(request('slug'))) {
				return number_format(\Cart::total(), 2);
			} else {
				return 'failed';
			}
		}
	}

/* */
	protected function addRow($item)
	{
		// print_r($item);
//		 $row = '<tr id="row_".'$item->__raw_id'.">
//	 <form class="form-inline">
//	 <td>
//		 <label>'.$item->name.'</label>
//	 </td>
//	 <td>
//	 <label for "qty">Qty</label>
//		 <select id="qty_'.$item->__raw_id'.">
//		 @for ($x = 1; $x <= 10; $x++)
//			 <option value="'.$x.'" @if ($item->qty == $x) selected @endif>'.$x.'</option>
//		 @endfor
//		 </select>
//	 </td>
//	 <td>
//		 <button id="update_'.$item->__raw_id.'" class="btn btn-default" title="Update Quantity" type="button" value="update">
//			 <span class="glyphicon glyphicon-save"></span>
//		 </button>
//	 </td>
//	 <td>
//		 <button id="remove_'.$item->__raw_id.'" class="btn btn-default" title="Remove Item" type="button" value="remove">
//			 <span class="glyphicon glyphicon-remove"></span>
//		 </button>
//	 </td>
//	 </form>
// </tr>';
//		 return $row;	 
	}
/* */
}
