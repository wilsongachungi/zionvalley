<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Communication;

class TaskController extends Controller
{
	public function storeTask(Request $request)
	{
		$request->validate([
			'description' => 'required|string',
			'message' => 'nullable|string',
			'user_id' => 'required|exists:users,id', // Validate user_id
		]);

		$task = new Task();
		$task->description = $request->description;
		$task->message = $request->message;
		$task->user_id = $request->user_id; // Assign the provided user_id

		$task->save();

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

	public function assignment()
	{
		// Retrieve the tasks assigned to the currently authenticated user
		$tasks = auth()->user()->tasks;

		$comm = Communication::all();

		return view('user.assignments', compact('tasks', 'comm'));
	}

	public function delete_task(Task $task)
	{
		$task->delete();

		return redirect()->back()->with('success', 'Task deleted successfully');
	}
}
