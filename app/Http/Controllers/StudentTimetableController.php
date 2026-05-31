<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Hall;
use App\Models\Subject;
use App\Models\Timetable;
use Illuminate\Http\Request;

class StudentTimetableController extends Controller
{
    //
    public function index()
    {
        $student_timetables = Timetable::with(['subject', 'day', 'hall'])->get();

        return view('timetables.index', compact('student_timetables'));
    }

    public function create()
    {
        $student_timetables = Timetable::get();
        $days = Day::pluck('day_name', 'id');
        $subjects = Subject::pluck('subject_name', 'id');
        $halls = Hall::pluck('lecture_hall_name', 'id');

        return view('timetables.create', compact('student_timetables', 'days', 'subjects', 'halls'));
    }

    public function store(Request $request)
    {
        $result = Timetable::create([
            'user_id' => auth()->user()->id,
            'day_id' => $request->get('day_id'),
            'subject_id' => $request->get('subject_id'),
            'hall_id' => $request->get('hall_id'),
            'time_from' => $request->get('time_from'),
            'time_to' => $request->get('time_to'),
        ]);

        if (! $result) {
            return redirect()->route('timetables.index')
                ->with('success', 'Timetable not created');
        }

        return redirect()->route('timetables.index')
            ->with('success', 'Timetables created successfully.');
    }

    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect()->route('timetables.index')
            ->with('success', 'Timetabe deleted successfully');
    }

    public function edit(Timetable $timetable)
    {
        $days = Day::pluck('day_name', 'id');
        $halls = Hall::pluck('lecture_hall_name', 'id');
        $subjects = Subject::pluck('subject_name', 'id');

        return view('timetables.edit', compact('days', 'subjects', 'halls', 'timetable'));
    }

    public function update(Request $request, Timetable $timetable)
    {
        $request->validate([
            'day_id' => 'required',
            'subject_id' => 'required',
            'hall_id' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        $result = $timetable->update($request->all());

        if (! $result) {
            return redirect()->route('timetables.index')
            ->with('failed', 'Timetable not updated');
        }

        return redirect()->route('timetables.index')
            ->with('success', 'Timetables updated successfully');
    }

    public function show(Timetable $timetable)
    {
        return view('timetables.show', compact('timetable'));
    }
}
