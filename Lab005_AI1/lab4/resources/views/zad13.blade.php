{{-- To jest komentarz --}}

@if ($name == '')
    Brak imienia
@else
    Hello, {{ $name }}.
@endif

<br>

@if ($name[0] == 'B')
    Imie zaczyna sie na "B".
@else
    "Nie zaczyna sie na "B".
@endif


@if(count($arr) > 0)
    @foreach($arr as $index => $name)
        <p>
            @if($index == 0)
                To jest pierwsza iteracja przy pierwszym elemencie: {{ $name }}
            @elseif($index == count($arr) - 1)
                To jest ostatnia iteracja przy ostatnim elemencie: {{ $name }}
            @else
                {{ $name }}
            @endif
        </p>
    @endforeach
@else
    <p>Tablica arr nie zawiera żadnego elementu</p>
@endif