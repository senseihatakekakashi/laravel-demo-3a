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

    <x-alert alert-type="primary" class="p-5">
        <h3><b>Title:</b> Hello World!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis quam natus fuga. Facilis totam repellat tempora provident, quia magni, maxime asperiores voluptatum rerum odio illo fugiat, similique commodi! Autem inventore cum vitae doloribus perspiciatis impedit quia! Fugit quae asperiores non adipisci, sit suscipit porro voluptas, blanditiis mollitia accusantium culpa. Aliquam, perspiciatis, sunt eius delectus tenetur minus dolor debitis neque eaque aperiam cupiditate placeat quae exercitationem illum? Nesciunt facere totam a explicabo ad recusandae eaque repellat voluptatem magni reiciendis. Explicabo accusantium quas fugit expedita perspiciatis necessitatibus dicta sit, quam earum labore deserunt quod soluta laudantium facere dolor sapiente enim alias?</p>
        <ul>
            <li>Lorem Impsum</li>
            <li>Lorem Impsum</li>
            <li>Lorem Impsum</li>
            <li>Lorem Impsum</li>
            <li>Lorem Impsum</li>
        </ul>
    </x-alert>
    
    <x-forms.select/>
@endsection