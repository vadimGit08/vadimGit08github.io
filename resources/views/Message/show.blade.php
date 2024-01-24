@extends('Layouts.Message')
@section('mes')
    <div class="container"
         style="background-color: #fdc13d; padding: 30px 30px 30px 30px; margin: 20px 20px 20px 20px; border-radius: 20px">
        <div>
            <p style="color: #0e2f4b; text-decoration: none"><b>Name sender:</b> "{{ $sergl->name }}"</p>
            <p style="color: #0e2f4b; text-decoration: none"><b>Message:</b> "{{ $sergl->message }}"</p>
            @foreach($categories as $category)
                @if($category->id === $sergl->category_id)
                    <p style="color: #0e2f4b; text-decoration: none"><b>Name recipient:</b> "{{ $category->title }}"</p>
                @endif
            @endforeach

        </div>
        <a style="margin: 20px 20px 20px 20px;" type="submit" class="btn btn-primary"
           href="{{ route('message.index') }}">back</a>
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
