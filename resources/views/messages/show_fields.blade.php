<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $message->text }}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $message->author }}</p>
</div>

<!-- Post Id Field -->
<div class="form-group">
    {!! Form::label('post_id', 'Post:') !!}
    <a href="{{ url("posts/{$message->post_id}") }}">{{ $message->post()->first()->title }}</a>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $message->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $message->updated_at }}</p>
</div>

