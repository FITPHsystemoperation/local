<?php

namespace App\Http\Controllers;

use App\Task;
use App\Mytools\Day;
use App\Http\Requests\TasksFormRequest;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index($date)
    {
        return view('calendar.tasks.daily')
            ->with('day', $this->getDay($date));
    }

    public function create($date)
    {
        return view('calendar.tasks.create')
            ->with('day', $this->getDay($date));
    }

    public function store($date, TasksFormRequest $request)
    {
        $task = Task::create([
            'date' => $date,
            'subject' => $request->get('subject'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('tasks.index', $date)
            ->with('status', "Schedule:<strong>$task->subject</strong> successfully recorded");
    }

    public function show($date, Task $task)
    {
        return view('calendar.tasks.show', compact('task'))
            ->with('day', $this->getDay($date));
    }

    public function edit($date, Task $task)
    {
        return view('calendar.tasks.edit', compact('task'));
    }

    public function update(TasksFormRequest $request, $date, Task $task)
    {
        $request->validate(['date' => 'required|date']);

        $task->update([
            'date' => $request->get('date'),
            'subject' => $request->get('subject'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('tasks.index', $task->date)
            ->with('status', "Schedule:<strong>$task->subject</strong> successfully updated");
    }

    public function destroy($date, Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index', $task->date)
            ->with('status', "Schedule:<strong>$task->subject</strong> successfully removed");
    }

    protected function getDay($date)
    {
        $parts = explode('-', $date);

        return new Day( mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]), false );
    }
}
