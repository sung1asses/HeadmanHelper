
<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{{ route('tests.index') }}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>

<li class="{{ Request::is('questions*') ? 'active' : '' }}">
    <a href="{{ route('questions.index') }}"><i class="fa fa-edit"></i><span>Questions</span></a>
</li>

