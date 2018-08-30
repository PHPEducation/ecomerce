@if($comments)
    @foreach($comments as $comment)
        <div class="comments">{{ $comment->content }}</div>
    @endforeach
@endif
