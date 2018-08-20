<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Mail\Order;
use App\Invoice;
use \Stripe\Stripe;
// use Cartalyst\Stripe\Stripe;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class InvoicesController extends Controller
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

		// dd(\Cart::all());
		$this->validate(request(), [
			'phone' => 'required',
			'name' => 'required',
		]);

		if (!request('email')) {
			$request['email'] = 'none provided';
		}
		$email = request('email');
		$name = request('name');
		$phone = request('phone');
		$chargeType = 'cash';

		$invoice = Invoice::create([
			'phone' => $phone,
			'name' => $name,
			'email' => $email,
			'charge_type' => $chargeType,
			'total' => \Cart::total(),

		]);

		$order = new Order(request('phone'), request('name'));

		Mail::to(env('DINER_EMAIL'))
			->bcc('diner@think-knot.com')
			->send($order);
		// dd($order);
		// \SMS::send('my message', null, function($sms) {
		// 	$sms->attachImage('/dev/null');
		// 	$sms->to('+19545886692', 'verizonwireless');
		// });
		\Cart::clean();
		session()->flash('message', 'Your order has been placed. Thank you, '.request('name').'!');
		return redirect()->to('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function process(Request $request)
	{
		Stripe::setApiKey(env('STRIPE_SECRET'));

		$this->validate(request(), [
			'name' => 'required',
			'phone' => 'required',
			'stripeToken' => 'required'
		]);

		$token = request('stripeToken');

		$charge = \Stripe\Charge::create([
		    'amount' => number_format(\Cart::total()) * 100,
		    'currency' => 'usd',
		    'receipt_email' => request('stripeEmail'),
		    'source' => $token,
		]);
		$order = new Order(request('phone'), request('name'));

		Mail::to(env('DINER_EMAIL'))
			->bcc('diner@think-knot.com')
			->send($order);
		// dd($order);
		// \SMS::send('my message', null, function($sms) {
		// 	$sms->attachImage('/dev/null');
		// 	$sms->to('+19545886692', 'verizonwireless');
		// });
		\Cart::clean();
		session()->flash('message', 'Your order has been placed. Thank you, '.request('name').'!');
		return redirect()->to('/');
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
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
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
