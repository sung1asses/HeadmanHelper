













<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{{ route('messages.index') }}"><i class="fa fa-edit"></i><span>Messages</span></a>
</li>

