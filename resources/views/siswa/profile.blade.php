@section('title', 'Profile')
    
@extends('layouts.master')

@section('content')
<div class="panel panel-profile">
  <div class="clearfix">
    <!-- LEFT COLUMN -->
    <div class="profile-left">
      <!-- PROFILE HEADER -->
      <div class="profile-header">
        <div class="overlay"></div>
        <div class="profile-main">
          <img src="{{$siswa->FotoProfile()}}" class="img-circle" alt="Avatar" width="100" height="100">
          <h3 class="name">{{$siswa->nama_depan . ' ' . $siswa->nama_belakang}}</h3>
          <span class="online-status status-available">Available</span>
        </div>
        <div class="profile-stat">
          <div class="row">
            <div class="col-md-4 stat-item">
              45 <span>Projects</span>
            </div>
            <div class="col-md-4 stat-item">
              15 <span>Awards</span>
            </div>
            <div class="col-md-4 stat-item">
              2174 <span>Points</span>
            </div>
          </div>
        </div>
      </div>
      <!-- END PROFILE HEADER -->

      <!-- PROFILE DETAIL -->
      <div class="profile-detail">
        <div class="profile-info">
          <h4 class="heading">Basic Info</h4>
          <ul class="list-unstyled list-justify">
            <li>Nama<span>{{$siswa->nama_depan . ' ' . $siswa->nama_belakang}}</span></li>
            <li>Agama<span>{{$siswa->agama}}</span></li>
            <li>Alamat<span>{{$siswa->alamat}}</span></li>

          </ul>
        </div>
      </div>
    </div>
    <!-- END LEFT COLUMN -->

    <!-- RIGHT COLUMN -->
    <div class="profile-right">
      <h4 class="heading">{{$siswa->nama_depan . ' ' . $siswa->nama_belakang}}</h4>
      <!-- AWARDS -->
      <div class="awards">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="award-item">
              <div class="hexagon">
                <span class="lnr lnr-sun award-icon"></span>
              </div>
              <span>Most Bright Idea</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="award-item">
              <div class="hexagon">
                <span class="lnr lnr-clock award-icon"></span>
              </div>
              <span>Most On-Time</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="award-item">
              <div class="hexagon">
                <span class="lnr lnr-magic-wand award-icon"></span>
              </div>
              <span>Problem Solver</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="award-item">
              <div class="hexagon">
                <span class="lnr lnr-heart award-icon"></span>
              </div>
              <span>Most Loved</span>
            </div>
          </div>
        </div>
        
        <div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
      </div>
      <!-- END AWARDS -->
    </div>
    <!-- END RIGHT COLUMN -->
  </div>
</div>


@endsection
