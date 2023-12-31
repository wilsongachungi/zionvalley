<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Involve;
use App\Models\JobApplication;

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
			//'bookfor' => 'required',
			'phone' => 'required',
			'message' => 'required',
		]);

		$data = new appointment();

		$data->name = $request->name;
		$data->email = $request->email;
		$data->date = $request->date;
		$data->phone = $request->phone;
		// $data->bookfor = $request->bookfor;
		$data->message = $request->message;
		$data->status = 'In progress';

		// $request['status'] = 'In progress';

		if (Auth::id()) {
			//$request['user_id'] = Auth::user()->id;
			$data->user_id = Auth::user()->id;
		}

		// $appointment = Appointment::create($request->all());

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
			return redirect()->route('login'); // Redirect to the login page
		}

		$validator = Validator::make($request->all(), [
			'name' => 'required|string',
			'email' => 'required|email',
			// Add validation rules for other fields
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
			'idphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			'select' => 'required|string',
			'passport_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);

		// Handle file upload for 'idphoto'
		if ($request->hasFile('idphoto')) {
			$idphoto = $request->file('idphoto');
			$idphotoName = time() . '_idphoto.' . $idphoto->getClientOriginalExtension();
			$idphoto->storeAs('images', $idphotoName, 'public');
		}

		// Handle file upload for 'passport_image'
		if ($request->hasFile('passport_image')) {
			$passportImage = $request->file('passport_image');
			$passportImageName = time() . '_passport_image.' . $passportImage->getClientOriginalExtension();
			$passportImage->storeAs('images', $passportImageName, 'public');
		}

		// Create a new record in the database
		Involve::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'country' => $request->input('country'),
			'idnumber' => $request->input('idnumber'),
			'age' => $request->input('age'),
			'idphoto' => isset($idphotoName) ? $idphotoName : null,
			'select' => $request->input('select'),
			'passport_image' => isset($passportImageName) ? $passportImageName : null,
		]);

		return redirect()->back()->with('message', 'Thank you! uploaded successfully.');
	}

	public function job(Request $request)
	{
		if (!auth()->check()) {
			return redirect()->route('login'); // Redirect to the login page
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
			'idphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			'select' => 'required|string',
			'passport_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);

		// Handle file upload for 'idphoto'
		if ($request->hasFile('idphoto')) {
			$idphoto = $request->file('idphoto');
			$idphotoName = time() . '_idphoto.' . $idphoto->getClientOriginalExtension();
			$idphoto->storeAs('images', $idphotoName, 'public'); // Adjust the storage path as needed
		}

		// Handle file upload for 'passport_image'
		if ($request->hasFile('passport_image')) {
			$passportImage = $request->file('passport_image');
			$passportImageName = time() . '_passport_image.' . $passportImage->getClientOriginalExtension();
			$passportImage->storeAs('images', $passportImageName, 'public'); // Adjust the storage path as needed
		}

		// Create a new record in the database
		JobApplication::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'country' => $request->input('country'),
			'idnumber' => $request->input('idnumber'),
			'age' => $request->input('age'),
			'idphoto' => isset($idphotoName) ? $idphotoName : null,
			'select' => $request->input('select'),
			'passport_image' => isset($passportImageName) ? $passportImageName : null,
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

		$involves = Involve::all();


		return view('user.dashboard', compact('involves'));
	}
}
