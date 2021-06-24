@section('title', 'Edit data siswa')
    
@extends('layouts.master')

@section('content')

<div class="panel panel-headline">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Data Siswa</h3>
  </div>
  <div class="panel-body">
    <div class="row">
    <form action="{{route('update', $siswa->id)}} " method="post" enctype="multipart/form-data">
      @csrf 
        <div class="col-md-6">
          <div class="form-group">
            <label for="nama_depan">Nama Depan</label>
            <input type="text" name="nama_depan" class="form-control"  placeholder="Nama depan" 
            value="{{$siswa->nama_depan}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="nama_depan">Nama Belakang</label>
            <input type="text" name="nama_belakang" class="form-control"  placeholder="Nama belakang"
              value="{{$siswa->nama_belakang}}">
          </div>
        </div>
    </div>
    <div class="form-group">
      <label for="nis">No induk siswa </label>
      <input type="number" name="nis" class="form-control"  placeholder="NIS" value="{{$siswa->nis}}">
    </div>
    <div class="form-group">
      <label for="agama">Jenis Kelamin</label>
      <select class="form-control" name="jenis_kelamin">
        <option value="Laki laki" @if($siswa->jenis_kelamin == 'Laki laki') selected @endif>Laki laki</option>
        <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
      </select>
      
    </div>
    <div class="form-group">
      <label for="agama">Agama</label>
      <select class="form-control" name="agama">
        <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
        <option value="katolik" @if($siswa->agama == 'Katolik') selected @endif>Katolik</option>
        <option value="Protestan" @if($siswa->agama == 'Protestan') selected @endif>Protestan</option>
        <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
        <option value="budha" @if($siswa->agama == 'Budha') selected @endif>Budha</option>
      </select>
     
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea type="text" name="alamat" class="form-control" placeholder="Alamat">{{$siswa->alamat}}</textarea>
    </div>  
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile" name="foto">
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
