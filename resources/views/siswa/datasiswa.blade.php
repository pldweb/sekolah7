@section('title', 'Data Siswa')
    
@extends('layouts.master')

@section('content')

<div class="panel panel-headline">
  <div class="panel-heading">
    <h3 class="panel-title">Data Siswa</h3>  
  </div>
  
  <div class="panel-body">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah data</button>

<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content p">
      <div class="panel-body">
        <div class="container-fluid">
      <div class="row">
        
        <form action="/createsiswa" method="post">
          @csrf
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control"  placeholder="Nama depan">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_depan">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control"  placeholder="Nama belakang">
              </div>
            </div>
        </div>
        <div class="form-group">
          <label for="nis">No induk siswa </label>
          <input type="number" name="nis" class="form-control"  placeholder="NIS">
        </div>
        <div class="form-group">
          <label for="agama">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option value="Laki laki">Laki laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="agama">Agama</label>
          <select class="form-control" name="agama">
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Protestan">Protestan</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
          </select>
         
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" rows="3" ></textarea>
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
    </div>
    </div>
  </div>
</div>

{{-- Akhir modal --}}

    <div class="table-responsive-md">
    <table class="table table-hover table-responsive-md">
      <thead>
        <tr>
          <th>NAMA</th>
          <th>NIS</th>
          <th>JENIS KELAMIN</th>
          <th>AGAMA</th>
          <th>ALAMAT</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($siswa as $data)
        <tr>
          <td><a href="/siswa/{{$data->id}}/profile">{{$data->nama_depan . ' ' . $data->nama_belakang}}</a></td>
          <td>{{$data->nis}}</td>
          <td>{{$data->jenis_kelamin}}</td>
          <td>{{$data->agama}}</td>
          <td>{{$data->alamat}}</td>
          <td><a href="{{route('delete', $data->id)}}">delete</a> | <a href="{{ route('edit', $data->id )}}">edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{-- {{ $siswa->links() }} --}}
  </div>
  </div>
</div>
@endsection
