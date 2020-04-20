@extends('adminlte::page')

@section('content')

  {{-- <div class="container"> --}}
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Inbox</h3>
      </div>

      <div class="card-body table-responsive p-0">
        <table class="table table-hover">

          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Date</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>

          <tbody>
            @if ($messages->isEmpty())
                <tr>
                  <td colspan="6" class="text-center"><b>No message</b></td>
                </tr>
            @else 
              @foreach ($messages as $message)
                <tr>
                  <td>{{$message->name}}</td>
                  <td>{{$message->email}}</td>
                  <td>{{$message->subject}}</td>
                  <td>{{$message->created_at}}</td>
                  <td class="text-center text-nowrap">
                    <a href="{{route('messages.show',$message->id)}}" class="btn btn-info">
                      <i class="far fa-eye"></i>
                    </a>
                    <form action="{{route('messages.destroy',$message->id)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            @endif
          </tbody>

        </table>
      </div>
    </div>
  {{-- </div> --}}

@endsection