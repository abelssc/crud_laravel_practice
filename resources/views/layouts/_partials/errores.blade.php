@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="danger">{{$error}}</li>
        @endforeach
    </ul>
@endif
