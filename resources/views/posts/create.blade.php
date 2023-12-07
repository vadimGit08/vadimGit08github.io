@extends('home/home')
@section('mes')
    <div class="container" style="margin-top: 30px">
        <form action="{{ route('message.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name recipient</label>
                <input class="form-control" id="exampleFormControlInput1" name="name" placeholder="name recipient">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Add message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>

@endsection
