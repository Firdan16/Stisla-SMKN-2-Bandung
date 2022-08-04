@extends('layouts.master')

@section('judul', 'Data Kelas')

@section('title','Data Kelas')

@section('table')

<div class="row">
    <div class="card card-primary mr-4 col ">
      <div class="card-header">
        <h4>XII RPL 1</h4>
        <div class="card-header-action">
          <a data-collapse="#mycard-collapse1" class="btn btn-info" href="#" data-target="mycard-collapse1"></i>
            View All
          </a>
          <a href="#" class="btn btn-danger">Delete</a>
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
            </tr>
          </thead>
          <tbody>
            @foreach($bio as $p)
            <tr>
              <td> {{$p->nama}} </td>
              <td> {{$p->kelas}} </td>
              <td> {{$p->nis}} </td>
              <td> {{$p->tgl}} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
  </div>
  
  <div class="card card-danger col">
    <div class="card-header">
      <h4>XII RPL 2</h4>
      <div class="card-header-action">
        <a data-collapse="#mycard-collapse2" class="btn btn-info" href="#" data-target="mycard-collapse2"></i>
          View All
        </a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div>
    </div>

    <div class="collapse" id="mycard-collapse2">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"> Nama </th>
            <th scope="col"> Kelas </th>
            <th scope="col"> NIS </th>
            <th scope="col"> Tanggal </th>
          </tr>
        </thead>
        <tbody>
          @foreach($bio as $p)
          <tr>
            <td> {{$p->nama}} </td>
            <td> {{$p->kelas}} </td>
            <td> {{$p->nis}} </td>
            <td> {{$p->tgl}} </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
</section>

<div class="row">
<div class="card card-warning mr-4 col">
  <div class="card-header">
    <h4>XII RPL 3</h4>
    <div class="card-header-action">
      <a data-collapse="#mycard-collapse3" class="btn btn-info" href="#" data-target="mycard-collapse3"></i>
        View All
      </a>
      <a href="#" class="btn btn-danger">Delete</a>
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
        </tr>
      </thead>
      <tbody>
        @foreach($bio as $p)
        <tr>
          <td> {{$p->nama}} </td>
          <td> {{$p->kelas}} </td>
          <td> {{$p->nis}} </td>
          <td> {{$p->tgl}} </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
       </div>

       <div class="card card-success col">
        <div class="card-header">
          <h4>XII RPL 4</h4>
          <div class="card-header-action">
            <a data-collapse="#mycard-collapse4" class="btn btn-info" href="#" data-target="mycard-collapse4"></i>
              View All
            </a>
            <a href="#" class="btn btn-danger">Delete</a>
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
              </tr>
            </thead>
            <tbody>
              @foreach($bio as $p)
              <tr>
                <td> {{$p->nama}} </td>
                <td> {{$p->kelas}} </td>
                <td> {{$p->nis}} </td>
                <td> {{$p->tgl}} </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
          </div>
             </div>

@endsection