@extends('home/home')
@section('mes')
    <div class="container" style="background-color: #6c757d;">
        <h1 class="h1" style="margin-top: 40px; text-align: center">Messages</h1>
        @foreach($mess as $mes)
            <div class="p-9" style="font-size: large; text-align: center; margin-top: 20px;">
              <div>
                  <a href="{{ route('message.show', $mes->id) }}">{{ "recipient: $mes->name" }}<br>
                      {{ "message: $mes->message" }}</a>
              </div>
            </div>
        @endforeach
    </div>
@endsection
