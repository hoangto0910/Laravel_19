<?php

namespace App\Http\Controllers\frontend;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('Taskmanager.indexTask', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Taskmanager.createTask");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taskModel = new Task();
        $taskModel->name = $request->name;
        $taskModel->content = $request->content;
        $taskModel->deadline = $request->deadline;
        $taskModel->status = $request->status;
        // dd($taskModel);
        $taskModel->save();
        setcookie('msg', 'Thêm thành công', time() + 4);
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view("Taskview.show");
        dd("show ". $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd(" edit id : $id");
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
        dd(" Update id : $id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        setcookie("msg", "Xóa Thành công", time() + 4);
        return redirect(route('tasks.index'));        
    }

    public function complete($id){
        echo "Hoàn Thành công việc có id là : $id";
    }

    public function reComplete($id){
        echo "Làm lại công việc có id là : $id";
    }

}
