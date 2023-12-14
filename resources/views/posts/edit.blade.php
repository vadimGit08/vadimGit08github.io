@extends('home/home')
@section('mes')
    <div class="container" style="margin-top: 30px">
        <form action="{{ route('message.update', $sergl->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Name sender</label>
                <input class="form-control" id="exampleFormControlInput1" name="name" placeholder="name recipient" value="{{ $sergl->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >update message</label>
                <input class="form-control" id="exampleFormControlInput1" name="message" placeholder="message" value="{{ $sergl->message }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Set name recipient</label>
                <select name="category_id" class="form-select" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $sergl->category_id ? 'selected' : '' }}
                            value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>

@endsection
