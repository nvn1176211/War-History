@isset($techTypes)
    <div class="group">
        <div class="group-name">Technology</div>
        <ul>
            @foreach ($techTypes as $tech)
                <li><a href="/tech/{{$tech->id}}">{{$tech->show_name}}</a></li>                
            @endforeach
        </ul>
    </div>
@endisset