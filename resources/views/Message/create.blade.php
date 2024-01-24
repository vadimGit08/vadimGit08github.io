@extends('posts/home/home')
@section('mes')
    <div class="container" style="margin-top: 30px">
        <form action="{{ route('message.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name sender</label>
                <input value="{{ old('name') }}" autocomplete="off" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name recipient">
                @error("name")
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Add message</label>
                <textarea value="{{ old('message') }}" class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                @error("message")
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Set name recipient</label>
                <select name="category_id" class="form-select" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Set cars</label>
                <select class="form-select" multiple aria-label="Multiple select example" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            value="{{ $tag->id }}">
                            {{ $tag->title }}
                        </option>
                    @endforeach
                    <option value="3"></option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>

@endsection