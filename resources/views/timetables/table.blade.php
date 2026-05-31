@section('content')
    <div class="row px-2 mb-3" style="justify-content: space-between">
        <div>
            <h4 class="font-weight-bold">Student Timetable</h4>
        </div>
        <div>
            <a href="{{ route('timetables.create') }}" class="btn btn-success"><i class="fas fa-plus mr-1"></i>New Timetable</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Day</th>
                <th>Subject</th>
                <th>Hall</th>
                <th>Time From</th>
                <th>Time To</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows will be populated here -->
        </tbody>
    </table>
@endsection
