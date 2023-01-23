@extends('index')
@push('css')
@endpush
@section('content')
    <div>
        <img src="/img/{{$event->thumbnail}}" alt="" width="600" height="auto">
        <a href="/event/img/{{$event->thumbnail}}">
            <i class="material-icons">download</i>
        </a>
        <div class="event-name">{{$event->year}}: {{$event->name}}</div>
    </div>
@endsection