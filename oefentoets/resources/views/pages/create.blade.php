@include('includes.header')
<div class="container">
    <h1>Nieuw Post maken</h1>
    <hr>
    @if($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">Name</label>
            <input type="text" id="user_id" name="user_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5"></textarea>
        </div>
        <button class="opslaanKnop" type="submit">Opslaan</button>
    </form>
    <hr>
    <a class="terugKnop" href="{{ url()->previous() }}">Terug</a>
</div>