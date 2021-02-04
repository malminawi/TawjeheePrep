
<!-- <p>hello</p>
<p>{{ $unit }}</p>
<p>{{ $lesson }}</p>
<p>{{ $quiz }}</p>
<p>{{ $unit }}</p>
<p>{{ $unit }}</p>
@if( $quiz > 1)
<p>hella, quiz is over 1 hehehe hella</p>
@elseif($quiz < 9)
<p>hella hella hella</p>

@endif


@unless($unit == 'one')
<p>hella, this s a false! ewww</p>
@endunless

@php
$name = 'shawn';
echo($name)

@endphp


@for($i = 0; $i < 5; $i++)
<p>the value is hehheh {{ $i }}</p>
@endfor -->

<!-- @for($i = 0; $i < count($units); $i++)
<p>the value of the unit is {{ $units[$i]['unit'] }}</p>
@endfor  -->


@foreach($units as $unit)
<div>
{{ $unit['unit'] }}
</div>
@endforeach
