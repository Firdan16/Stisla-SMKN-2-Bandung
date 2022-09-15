@extends('layouts.master')

@section('judul', 'Data Kelas')

@section('title','Data Kelas')

@section('table')

 @csrf
      @method('PUT')

      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data dismiss="alert">x</button>
          <strong style="font-size: 20px">{{ $message }}</strong>
        </div>
      @endif  

<div class="column">
  <div class="mb-4">
    <form action="search" method="GET">
      <input class="form-control btn btn-outline-danger" type="text" name="search" placeholder="Search here" data-width="250">
      <button class="btn"><i class="fas fa-search"></i></button>
    </form>
  </div>
    <div class="card card-primary mr-4 col ">
      <div class="card-header">
        <h4>XII RPL 1</h4>
        <div class="card-header-action">
          <a data-collapse="#mycard-collapse1" class="btn btn-info" href="#" data-target="mycard-collapse1"></i>
            View All
          </a>
        </div>
      </div>
      <div class="collapse" id="mycard-collapse1">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"> Nama </th>
              <th scope="col"> Kelas </th>
              <th scope="col"> NIS </th>
              <th scope="col"> Tanggal </th>
              <th scope="col"> Aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach($bio as $p)
            <tr>
              <td> {{$p->nama}} </td>
              <td> {{$p->kelas}} </td>
              <td> {{$p->nis}} </td>
              <td> {{$p->tgl}} </td>
              <td>
                <form action="{{route('hapus',$p->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">Edit<a>
                  <Button type="submit" class="btn btn-danger btn-sm">Hapus</Button>
                </form> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
  </div>

<div class="column">
<div class="card card-warning mr-4 col">
  <div class="card-header">
    <h4>XII RPL 2</h4>
    <div class="card-header-action">
      <a data-collapse="#mycard-collapse3" class="btn btn-info" href="#" data-target="mycard-collapse3"></i>
        View All
      </a>
    </div>
  </div>
  <div class="collapse" id="mycard-collapse3">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> Nama </th>
          <th scope="col"> Kelas </th>
          <th scope="col"> NIS </th>
          <th scope="col"> Tanggal </th>
          <th scope="col"> Aksi </th>
        </tr>
      </thead>
      <tbody>
        @foreach($bio as $p)
        <tr>
          <td> {{$p->nama}} </td>
          <td> {{$p->kelas}} </td>
          <td> {{$p->nis}} </td>
          <td> {{$p->tgl}} </td>
          <td>
            <form action="{{route('hapus',$p->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a>
              <Button type="submit" class="btn btn-danger btn-sm">Hapus</Button>
            </form> 
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
       </div>

       <div class="card card-success col">
        <div class="card-header">
          <h4>XII RPL 3</h4>
          <div class="card-header-action">
            <a data-collapse="#mycard-collapse4" class="btn btn-info" href="#" data-target="mycard-collapse4"></i>
              View All
            </a>
          </div>
        </div>
        <div class="collapse" id="mycard-collapse4">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"> Nama </th>
                <th scope="col"> Kelas </th>
                <th scope="col"> NIS </th>
                <th scope="col"> Tanggal </th>
                <th scope="col"> Aksi </th>
              </tr>
            </thead>
            <tbody>
              @foreach($bio as $p)
              <tr>
                <td> {{$p->nama}} </td>
                <td> {{$p->kelas}} </td>
                <td> {{$p->nis}} </td>
                <td> {{$p->tgl}} </td>
                <td>
                  <form action="{{route('hapus',$p->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/ubah/{{$p->id}}" class="btn btn-outline-warning btn-sm">Edit</a>
                    <Button type="submit" class="btn btn-outline-danger btn-sm">Hapus</Button>
                  </form> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
          </div>
             </div>

@endsection