<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use App\Models\Involve;
use App\Models\Harambee;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
	public function redirect()
	{

		if (Auth::id()) {
			if (Auth::user()->usertype == '0') {
				return view('pages.index');
			} else {
				$involves = Involve::all();
				return view('user.dashboard', compact('involves'));
			}
		} else {
			return redirect()->back();
		}
	}

	public function index()
	{
		return view('pages.index');
	}

	public function appointment(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'date' => 'required|after:yesterday',
			'phone' => 'required',
			'message' => 'required',
		]);

		$data = new appointment();

		$data->name = $request->name;
		$data->email = $request->email;
		$data->date = $request->date;
		$data->phone = $request->phone;
		$data->message = $request->message;
		$data->status = 'In progress';


		if (Auth::id()) {

			$data->user_id = Auth::user()->id;
		}



		$data->save();

		return redirect()->back()->with('message', 'Thank you! Message sent sucessfully. Will contact you soon ');
	}


	public function message()
	{
		if (Auth::id()) {
			$userid = Auth::user()->id;

			$appoint = Appointment::where('user_id', $userid)->get();

			return view('pages.message', compact('appoint'));
		} else {
			return redirect()->back();
		}
	}

	public function home()
	{
		return view('pages.index');
	}

	public function community()
	{
		return view('pages.community');
	}

	public function project()
	{
		return view('pages.project');
	}

	public function contactzion()
	{
		return view('pages.contactzion');
	}

	public function harambee()
	{
		return view('pages.harambee');
	}


	public function accomodation()
	{
		return view('pages.accomodation');
	}

	public function join_membership()
	{
		return view('pages.join_membership');
	}

	public function join_cbo()
	{
		return view('pages.join_cbo');
	}

	public function team()
	{
		return view('pages.team');
	}

	public function cancel_message($id)
	{
		$data = Appointment::find($id);
		$data->delete();

		return redirect()->back();
	}

	public function involved(Request $request)
	{
		if (!auth()->check()) {
			return redirect()->route('login');
		}

		$validator = Validator::make($request->all(), [
			'name' => 'required|string',
			'email' => 'required|email',

		]);

		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}


		$request->validate([
			'name' => 'required|string',
			'email' => 'required|email',
			'phone' => 'required|string',
			'country' => 'required|string',
			'idnumber' => 'required|string',
			'age' => 'required|integer',
			// 'idphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			'select' => 'required|string',
			// 'passport_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);


		if ($request->hasFile('idphoto')) {
			$idphoto = $request->file('idphoto');
			$idphotoName = time() . '_idphoto.' . $idphoto->getClientOriginalExtension();
			$idphoto->storeAs('images', $idphotoName, 'public');
		}


		if ($request->hasFile('passport_image')) {
			$passportImage = $request->file('passport_image');
			$passportImageName = time() . '_passport_image.' . $passportImage->getClientOriginalExtension();
			$passportImage->storeAs('images', $passportImageName, 'public');
		}

		Involve::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'country' => $request->input('country'),
			'idnumber' => $request->input('idnumber'),
			'age' => $request->input('age'),
			// 'idphoto' => isset($idphotoName) ? $idphotoName : null,
			'select' => $request->input('select'),
			// 'passport_image' => isset($passportImageName) ? $passportImageName : null,
		]);

		return redirect()->back()->with('message', 'Thank you! uploaded successfully.');
	}

	public function job(Request $request)
	{
		if (!auth()->check()) {
			return redirect()->route('login');
		}

		$validator = Validator::make($request->all(), [
			'name' => 'required|string',
			'email' => 'required|email',
		]);

		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}

		$request->validate([
			'name' => 'required|string',
			'email' => 'required|email',
			'phone' => 'required|string',
			'country' => 'required|string',
			'idnumber' => 'required|string',
			'age' => 'required|integer',
			// 'idphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			'select' => 'required|string',
			// 'passport_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);

		if ($request->hasFile('idphoto')) {
			$idphoto = $request->file('idphoto');
			$idphotoName = time() . '_idphoto.' . $idphoto->getClientOriginalExtension();
			$idphoto->storeAs('images', $idphotoName, 'public');
		}

		if ($request->hasFile('passport_image')) {
			$passportImage = $request->file('passport_image');
			$passportImageName = time() . '_passport_image.' . $passportImage->getClientOriginalExtension();
			$passportImage->storeAs('images', $passportImageName, 'public');
		}

		JobApplication::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'country' => $request->input('country'),
			'idnumber' => $request->input('idnumber'),
			'age' => $request->input('age'),
			// 'idphoto' => isset($idphotoName) ? $idphotoName : null,
			'select' => $request->input('select'),
			// 'passport_image' => isset($passportImageName) ? $passportImageName : null,
		]);

		return redirect()->back()->with('message', 'Thank you! uploaded successfully.');
	}


	public function contact_us(Request $request)
	{
		$request->validate([
			'name' => 'required|string',
			'email' => 'required|email',
			'phone' => 'required|string',
			'message' => 'required|string',
		]);

		Contact::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'message' => $request->input('message'),
		]);

		return redirect()->back()->with('message', 'Thank you! Message sent successfully.');
	}

	public function show()
	{
		// Check if the user is authenticated
		if (auth()->check()) {
			// Check if the authenticated user's type is '1'
			if (auth()->user()->usertype != '1') {
				return redirect()->route('index'); // Redirect to home if the user is not authorized
			}

			// If the user is authorized, proceed with the following
			$userCount = User::count();
			$peopleWithHarambees = Harambee::distinct('sent_to')->count('sent_to');

			return view('user.dashboard', compact('userCount', 'peopleWithHarambees'));
		}

		// If the user is not authenticated, redirect to the login page
		return redirect()->route('login');
	}
}
