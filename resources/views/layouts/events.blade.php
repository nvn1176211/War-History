@if (!empty($events))
    <div id="events-ctn">
        @foreach ($events as $event)
            <div class="event" event-id="{{$event->id}}">
                <img src="img/{{$event->thumbnail}}" alt="">
                <div class="event-name">{{$event->year}}: {{$event->name}}</div>
            </div>
        @endforeach
    </div>
@endif