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
        $taskModel->priority = $request->priority;
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
        $task = Task::find($id);
        return view('Taskmanager.show', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view("Taskmanager.edit", [
            'task' => $task
        ]);
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
        $task = Task::find($id);
        $task->name = $request->name;
        $task->status = $request->status;
        $task->deadline = $request->deadline;
        $task->content = $request->content;
        $task->priority = $request->priority;
        $task->save();
        setcookie('msg', "Sửa thành công", time() + 4);
        return redirect()->route('tasks.index');
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
        $task = Task::find($id); // Lay ra 1 ban ghi anh xa lai 1 model , Goi den cac Key nhu 1 thuoc tinh
        // dd($task);
        if ($task->status == 1) {
            $task->status = 2;
        }
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function reComplete($id){
        $task = Task::find($id);
        if ($task->status == 2) {
            $task->status = 1;
        }
        $task->save();
        return redirect()->route('tasks.index');
    }

}
