@extends('Layouts.admin')
@section('admin')
    <div class="container" style="background-color: #fdc13d; border-radius: 20px">
        <h1 class="h1" style="margin-top: 40px; font-size: 40px; text-align: center">Recently Deleted</h1>
        <hr>
        @foreach($deletedMessages as $deletedMessage)
            <div class="p-9" style="font-size: 20px; text-align: center; margin-top: 20px;">
                <div>
                    <p class="fst-normal">
                        <a href="{{ route('admin.RDShow', $deletedMessage->id) }}"
                           style="color: #0e2f4b; text-decoration: none"><b>sender:</b>{{ " $deletedMessage->name" }}
                            <br>
                            <b>message:</b>{{ "$deletedMessage->message" }}
                            <hr>
                        </a>
                    </p>
                </div>

            </div>
        @endforeach
    </div>
@endsection
