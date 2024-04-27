<div class="pagetitle">
    <h1>{{$title}}</h1>
    <nav>
        <ol class="breadcrumb">
            @foreach ($breadcrumbItems as $index => $item)
                @if ($index == 'active')
                    <li class="breadcrumb-item active">{{$item}}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{$index}}.html">{{$item}}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>