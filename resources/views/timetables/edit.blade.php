@extends('layouts.template')

@section('content')
<div class="row px-2 mb-4" style="justify-content: space-between">
    <div class="">
        <h4 class="font-weight-bold">Edit Timetable</h4>
    </div>
    <div class="">
        <form action="{{ route('timetables.destroy', $timetable->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-2"></i> Delete</button>
        </form>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="p-4"
     style="background-color: white; border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
    <form action="{{ route('timetables.update', $timetable->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="day_id">Day</label>
            <select name="day_id" id="day_id" class="form-control" required>
                <option value="">Select Day</option>
                @foreach ($days as $id => $day)
                    <option value="{{ $id }}" {{ old('day_id', $timetable->day_id) == $id ? 'selected' : '' }}>{{ $day }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id" class="form-control" required>
                <option value="">Select Subject</option>
                @foreach ($subjects as $id => $subject)
                    <option value="{{ $id }}" {{ old('subject_id', $timetable->subject_id) == $id ? 'selected' : '' }}>{{ $subject }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="hall_id">Hall</label>
            <select name="hall_id" id="hall_id" class="form-control" required>
                <option value="">Select Hall</option>
                @foreach ($halls as $id => $hall)
                    <option value="{{ $id }}" {{ old('hall_id', $timetable->hall_id) == $id ? 'selected' : '' }}>{{ $hall }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="time_from">Time From</label>
                <input type="time" name="time_from" id="time_from" class="form-control" value="{{ old('time_from', $timetable->time_from) }}" required>
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="time_to">Time To</label>
                <input type="time" name="time_to" id="time_to" class="form-control" value="{{ old('time_to', $timetable->time_to) }}" required>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('timetables.index') }}" class="btn btn-outline-secondary mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Timetable</button>
        </div>
    </form>
</div>

@endsection
