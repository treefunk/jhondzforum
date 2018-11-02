@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel-heading">{{ $thread->title }}</div>
            <hr>
            <div class="panel-body">
                {{ $thread->body }}
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    Replies:
        <div class="col-md-2">
            @foreach($thread->replies as $reply)
                @include('threads.reply')
            @endforeach
        </div>
</div>


@if(auth()->check())
<div class="row justify-content-center">
            <div class="col-md-2">
                <form action="{{ $thread->path() . '/replies' }}" method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                    <textarea name="body" id="" cols="30" rows="10" placeholder="wanna say something"></textarea>

                    <button type="submit">Submit</button>
                </div>
                </form>
            </div>
</div>
@else

    <p class="text-center">Please <a href="{{ route('login') }}">Sign In</a></p>


@endif

@endsection
