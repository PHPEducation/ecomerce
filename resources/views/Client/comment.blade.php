 @if($comments)
        @foreach($comments as $comment)
            <ul>
                <li style ="list-style-type: none">
                    <a href="">
                        <i class="fa fa-user"></i>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li style ="list-style-type: none">
                    <a href=""><i class="fa fa-clock-o"></i>
                        {{ $comment->created_at }}
                    </a>
                </li>
            </ul>
            <div class="comments" style ="margin-left:30px;">{{ $comment->content }}</div>
        @endforeach
@endif
