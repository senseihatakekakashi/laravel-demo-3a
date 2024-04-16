@extends('../layouts/app')

@section('content')
    <h1>
        Hi 
        @if ($sex == 'Male')
            Mr. 
        @else
            Ms. 
        @endif
        {{$name}}!
    </h1>
@endsection