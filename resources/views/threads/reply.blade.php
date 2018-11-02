<div class="panel panel-default">
        <div class="panel-heading">
           <a href="{{ $reply->owner->path() }}">
                {{ $reply->owner->name }}
           </a>  said
            {{ $reply->created_at->diffForHumans() }}:
        </div>
</div>
<div class="panel-body">
    {{ $reply->body }}
</div>
<hr>