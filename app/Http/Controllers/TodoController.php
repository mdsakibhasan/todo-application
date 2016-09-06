<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;

use Illuminate\Http\Request;
use App\Task;
use Input;

class TodoController extends Controller {

	
	public function index()
	{
		$data=Task::all();
		return view('home')->with('data',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	public function store(CreateTaskRequest $request)
	{			
		$data=[
			'name'=>Input::get('name'),
			'status'=>'incomplet'
		];
		$response=Task::create($data);
		if($response){
			return redirect()->back()->with('success','Task created successfully!!!');
		}
	}

	
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data=Task::find($id);
		return view('todo-edit')->with('data',$data);
	}

	public function update(CreateTaskRequest $request,$id)
	{
		$data=[
			'name'=>Input::get('name'),
			'status'=>Input::get('status')
		];
		$response=Task::find($id)->update($data);
		if($response){
			return redirect('/')->with('success','NOW Task updated sucessfully');
		}
	}
	public function destroy($id)
	{
		$response=Task::find($id)->delete();
		if($response){
			return redirect('/')->with('success','Task Deleted sucessfully !!!!!!!!!!!!!!!!!!!');
		}
	} 

}
