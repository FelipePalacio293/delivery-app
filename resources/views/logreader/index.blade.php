@extends('templates.app')
@section('content')

<div class="container">
    <h1>Upload log file</h1>
    <form action="/logs" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" class="form-control-file" name="logfile" id="logfile" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

@endsection
