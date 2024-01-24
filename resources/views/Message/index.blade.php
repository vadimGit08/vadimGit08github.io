@extends('Layouts.Message')
@section('mes')
    <div class="container" style="background-color: #fdc13d; border-radius: 20px">
        <h1 class="h1" style="color: #0e2f4b; margin-top: 40px; font-size: 60px; text-align: center">Messages</h1>
        <hr>
        @foreach($messages as $message)
            <div class="p-9" style="font-size: 30px; text-align: center; margin-top: 20px;">
                <div>
                    <p class="fst-normal">
                        <a href="{{ route('message.show', $message->id) }}"
                           style="color: #0e2f4b; text-decoration: none"><b>sender:</b>{{ "$message->name" }}<br>
                            <b>message:</b>{{ "$message->message" }}
                            <hr>
                        </a>
                    </p>
                </div>

            </div>
        @endforeach

    </div>
    <div>
        {{ $messages->withQueryString()->links() }}
    </div>
@endsection
