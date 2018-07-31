@extends('templates.default')

@section('content')
    <form action="{{ route('mailing.create') }}" method="POST">
        <label for="email">
            email
        <input type="text" name="email" id="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <div>{{ $errors->first('email') }}</div>
            @endif
        </label>
        <input type="submit">
        {{ csrf_field() }}
    </form>

{{--     <h4>{{ $post->title }}</h4>
    <h5>{{ $post->body }}</h5>
    <h5>{{ $post->created_at->format('H:i') }}</h5> --}}

    {{-- @if($posts->count())
    @foreach($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->body }}</p>
    @endforeach   
    @else
        <p>No posts</p>
    @endif
    --}}

@endsection



@section('scripts')
    <script src="test.js"></script>
@endsection