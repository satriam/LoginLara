@extends('layouts.dashboard')
@section('article')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @php $no=0;@endphp
          @foreach ($data as $item)
          @php $no++;@endphp
          <tr>
          <th scope="row">{{$no}}</th>
          <td>{{$item['name']}}</td>
          <td>{{$item['email']}}</td>
        </tr>
          @endforeach
    </tbody>
  </table>
  {{$data->links()}}
@endsection