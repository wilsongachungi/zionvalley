<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function storeTask(Request $request)
	{
		$data = $request->validate([
			'description' => 'required|string',
			'message' => 'nullable|string',
		]);

		$task = Task::create($data);

		return redirect()->back()->with('success', 'Task added successfully!');
	}

	public function list()
	{
		return view('user.to_do_list');
	}

	public function see_list()
	{
		$tasks = Task::all();
		return view('user.tasks', ['tasks' => $tasks]);
	}

	public function task()
	{
		$tasks = Task::all();
		return view('user.tasks', ['tasks' => $tasks]);
	}
}
