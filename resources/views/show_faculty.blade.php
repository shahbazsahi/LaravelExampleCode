@php
    $a = [1,2,3,4,5,6];
@endphp
<html>
    <head>
        <title>BSIT demo</title>
    </head>
    <body>
        <h1>BSIT Demo</h1>
        <ul>
            @foreach ($a as $i)
                @if (0 != $i%2)
                    <li>{{$i}}</li>
                @endif
            @endforeach
        </ul>
    </body>
</html>
