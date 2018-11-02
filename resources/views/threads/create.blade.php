@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel-heading">Forum Threads</div>
            <div class="panel-body">
                @foreach($threads as $thread)
                    <article>
                        <a href="{{ $thread->path() }}"><h4>{{ $thread->title }}</h4></a> created by: {{ $thread->owner->name }}
                        <div class="body">{{ $thread->body }}</div>
                    </article>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
