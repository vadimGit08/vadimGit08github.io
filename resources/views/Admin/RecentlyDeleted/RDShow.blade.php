@extends('layouts.admin')
@section('admin')
    <div class="container" style="background-color: #fdc13d; padding: 30px 30px 30px 30px; margin: 20px 20px 20px 20px; border-radius: 20px">
        <div>
            <p style="color: #0e2f4b; text-decoration: none"><b>Name sender:</b> "{{ $deletedMessage->name }}"</p>
            <p style="color: #0e2f4b; text-decoration: none"><b>Message:</b> "{{ $deletedMessage->message }}"</p>
            @foreach($categories as $category)
                @if($category->id === $deletedMessage->category_id)
                    <p style="color: #0e2f4b; text-decoration: none"><b>Name recipient:</b> "{{ $category->title }}"</p>
                @endif
            @endforeach

        </div>
        <div>
            <a style="margin: 20px 20px 20px 20px;" type="submit" class="btn btn-primary" href="{{ route('admin.RDIndex') }}">back</a>
        </div>
        <div style="margin: 20px 20px 20px 20px;">
            <form action="{{ route('admin.RDRestore', $deletedMessage->id) }}" method="post">
                @csrf
                <input type="submit" value="restore" class="btn btn-light">
            </form>
        </div>
        <div style="margin: 20px 20px 20px 20px;">
            <form action="{{ route('admin.RDForceDelete', $deletedMessage->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </div>

    </div>
@endsection
