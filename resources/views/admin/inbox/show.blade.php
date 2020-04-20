@extends('adminlte::page')

@section('content')

  <div class="container">

    <a href="{{route('messages.index')}}" class="btn btn-primary btn-block mb-3"><i class="fas fa-inbox"></i> Back to Inbox</a>

    <div class="card card-primary card-outline">

      <div class="card-header">
        <h3 class="card-title">Read Mail</h3>

        <div class="card-tools">
          <a href="{{$previous ? route('messages.show',$previous) : ''}}" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
          <a href="{{$next ? route('messages.show',$next) : ''}}" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
        </div>
      </div>

      <div class="card-body p-0">
        <div class="mailbox-read-info">
          <h5>{{$message->subject}}</h5>
          <h6>From: {{$message->email}}
            <span class="mailbox-read-time float-right">{{$message->created_at}}</span></h6>
        </div>

        <div class="mailbox-read-message">
          <p>{{$message->message}}</p>
          <p>Send by : {{$message->name}}</p>
        </div>

      </div>    

      <div class="card-footer">
        <div class="float-right">
           <form action="{{route('messages.destroy',$message->id)}}" method="POST" class="d-inline-block">
              @csrf
              @method('delete')
              <button type="button" class="btn btn-default">
                <i class="far fa-trash-alt"></i> Delete
              </button>
            </form>
          
        </div>
      </div>

    </div>
  </div>

@endsection