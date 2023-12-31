@extends('home/home')
@section('mes')
    <div class="container">
        <h2>Message</h2>
        <div>
            <p>Name recipient: "{{ $sergl->name }}"</p>
            <p>message: "{{ $sergl->message }}"</p>
        </div>
        <a style="margin: 20px 20px 20px 20px;" type="submit" class="btn btn-primary" href="{{ route('message.index') }}">back</a>
        <div style="margin: 20px 20px 20px 20px;">
            <a type="submit" class="btn btn-primary" href="{{ route('message.edit', $sergl->id) }}">update</a>
        </div>
        <div style="margin: 20px 20px 20px 20px;">
            <form action="{{ route('message.destroy', $sergl->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </div>

    </div>

@endsection
