<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function storeTask(Request $request)
	{
		$data = $request->validate([
			'user_id' => 'required|exists:users,id',
			'description' => 'required|string',
			'message' => 'nullable|string',
		]);

		$task = Task::create($data);

		return redirect()->back()->with('success', 'Task added successfully!');
	}

	public function list()
	{
		$users = User::all();

		return view('user.to_do_list', compact('users'));
	}

	public function see_list()
	{
		$tasks = Task::all();
		return view('user.tasks', ['tasks' => $tasks]);
	}
}
