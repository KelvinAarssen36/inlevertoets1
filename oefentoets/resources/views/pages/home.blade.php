  @yield('content')
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metamorphous&family=Monoton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('includes.header') <!-- Voegt header toe -->
    
        <main class="wrapper">
        <body>
        <div class="container">
            <h1>Home</h1>
            <a class="createButton" href="{{ route('posts.create') }}"><b>+ Create Post</b></a>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Content</th>
                    <th>Edit/Delete</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->subject }}</td>
                        <td>{{ $post->content }}</td>
                        <td><b><a href="{{ route('posts.show', $post->id)}}">Edit/Delete</a></b></td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </body>
        </main>
    </body>
</html>
