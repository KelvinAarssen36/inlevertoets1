@include('includes.header')
<div class="container">
    <h1>Edit Post</h1>
    <hr>
    @if($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">Name</label>
            <input type="text" id="user_id" name="user_id" class="form-control" value="{{ $post->user_id }}">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" class="form-control" rows="2">{{ $post->subject }}</textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
        </div>
        <button class="opslaanKnop" type="submit">Opslaan</button>
    </form>
    <hr>
    <div class="eventcontrolbuttons">
        <form action="{{ route('posts.delete', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="deletevent deleteknop">Delete Event</button>
        </form>
    </div>
    <hr>
    <a class="terugKnop" href="{{ url()->previous() }}">Terug</a>
</div>
