<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $question->title }}</p>
</div>

<!-- Test Id Field -->
<div class="form-group">
    {!! Form::label('test_id', 'Test Id:') !!}
    <p>{{ $question->test_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $question->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $question->updated_at }}</p>
</div>

