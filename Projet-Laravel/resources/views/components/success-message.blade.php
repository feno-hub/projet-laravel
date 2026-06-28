@props(['key'])

@session($key)
    <div class="succe">
        <strong class="succe-text"> {{ session($key) }} </strong>
    </div>
@endsession
