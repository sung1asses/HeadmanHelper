<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $post->description }}</p>
</div>

<!-- messages Field -->
<div class="form-group">
    {!! Form::label('', 'Messages:') !!}
    @if($post->messages()->first())
    <ol>
        @foreach($post->messages()->get() as $message)
            <li>
                <a href="{{ route('messages.show', $message->id) }}">{{ $message->text }}</a>
            </li>
        @endforeach
    </ol>
    @else
    <p>No messages:(</p>
    @endif
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div>

