@if(isset($name))
<h1>Hi {{$name}}</h1>
@endif
@if(isset($name))
    <h1>Hi {{$name}}</h1>
@endif
@foreach($listings as $listing)
    <h2>{{$listing->title}}</h2>
    <p>{{$listing->description}}</p>
@endforeach
