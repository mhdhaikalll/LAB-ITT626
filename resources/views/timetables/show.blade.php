@extends('layouts.template')

@section('content')
    <div class="row px-2 mb-4" style="justify-content: space-between">
        <div class="">
            <h4 class="font-weight-bold">Timetable Details</h4>
        </div>
        <div class="">
            <a class="btn btn-outline-primary" href="{{ route('timetables.edit', $timetable->id) }}"><i class="fas fa-edit mr-1"></i>Edit</a>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Day</p>
                    <h5 class="mb-0">{{ $timetable->day->day_name ?? '-' }}</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Subject</p>
                    <h5 class="mb-0">{{ $timetable->subject->subject_name ?? '-' }}</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Hall</p>
                    <h5 class="mb-0">{{ $timetable->hall->lecture_hall_name ?? '-' }}</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Time From</p>
                    <h5 class="mb-0">{{ $timetable->time_from ?? '-' }}</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Time To</p>
                    <h5 class="mb-0">{{ $timetable->time_to ?? '-' }}</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <p class="mb-1 text-muted">Record ID</p>
                    <h5 class="mb-0">{{ $timetable->id }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-outline-primary" href="{{ route('timetables.index') }}">Back</a>
    </div>
@endsection
