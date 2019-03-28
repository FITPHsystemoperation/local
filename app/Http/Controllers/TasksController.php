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
            ->with('status', "Schedule:<strong>$task->subject</strong> recorded for this day");
    }

    public function show($date, Task $task)
    {
        return view('calendar.tasks.show', compact('task'))
            ->with('day', $this->getDay($date));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getDay($date)
    {
        $parts = explode('-', $date);

        return new Day( mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]), false );
    }
}
