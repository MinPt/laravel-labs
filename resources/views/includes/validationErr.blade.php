<small>
    <ul>
        @foreach($errors->get($errFieldName) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</small>
