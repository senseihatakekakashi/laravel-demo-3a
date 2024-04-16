<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha2/css/bootstrap.min.css" integrity="sha512-AJqlPMFVh36uw2D9RLPBfAVy0S7OFl7zCOnnZTs0WAtaRzv1lK7tMoGz7k586FulS00KTNsWNr/5IVhIzBlEow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel Demo for BSIT 3A</title>
</head>
<body>
    <main>
        <div class="w-100 bg-dark">
            <h1 class="text-white">Laravel</h1>
        </div>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha512-EG++JPXevM9zNXYPPRo2G+qFY6OuQivci8L7/8HMfGjSbbsoFywHdHq/lLgSk1XIZNwzxxnE0mUGJxVoSsoUgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>