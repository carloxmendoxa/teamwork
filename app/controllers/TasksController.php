<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of tasks
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::orderBy('statusTask','asc')->orderBy('endDate', 'desc')->get();
		$teammembers = Teammember::all();
		return View::make('tasks.index', compact('tasks', 'teammembers'));
	}

	/**
	 * Show the form for creating a new task
	 *
	 * @return Response
	 */
	public function create()
	{
		$teammembers = Teammember::lists('name','id');
		return View::make('tasks.create',compact('teammembers'));
	}

	/**
	 * Store a newly created task in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Task::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Task::create($data);

		return Redirect::route('tasks.index');
	}

	/**
	 * Display the specified task.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified task.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::find($id);
		$teammembers = Teammember::lists('name','id');
		return View::make('tasks.edit', compact('task', 'teammembers'));
	}

	/**
	 * Update the specified task in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$task = Task::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Task::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$task->update($data);

		return Redirect::route('tasks.index');
	}

	/**
	 * Remove the specified task from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::destroy($id);

		return Redirect::route('tasks.index');
	}

}
