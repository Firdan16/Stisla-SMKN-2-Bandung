@extends('layouts.master')

@section('judul', 'Input Data Siswa')

@section('title','Form Input Data')

@section('inputdata')
    <form method= "POST" action="/updateData/{{$bioUbah->id}}">
      @csrf
      @method('PUT')

      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data dismiss="alert">x</button>
          <strong style="font-size: 20px">{{ $message }}</strong>
        </div>
      @endif  

      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col">
                  <div class="form-group">
                    <label> Nama </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="nama" placeholder="Nama" value="{{$bioUbah->nama}}">
                          @if ($errors->has('nama'))
                          <div class ="class">
                            {{$errors->first('nama')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Email </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="email" placeholder="Email" value="{{$bioUbah->email}}">
                          @if ($errors->has('email'))
                          <div class ="class">
                            {{$errors->first('email')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Password </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input type="password" class="form-control currency" name="password" value="{{$bioUbah->password}}">
                      @if ($errors->has('password'))
                            <div class ="class">
                              {{$errors->first('password')}}
                            </div>
                          @endif
                   </div>
              </div>
          </div>
      </div>
      <button type="submit" class="btn btn-danger d-flex justify-content=center m-auto">Submit</button>
    </form>
@endsection