@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
    </thead>
    <tbody>
        @foreach ($data as $tr)
        <tr>
            @foreach ($tr as $td)
                <td>{{ $td }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
@endsection