@extends('layouts.app')
@section('content')
<main class="py-4" style="background-image: url('images/game-background.jpg'); background-attachment: fixed;">
  <div class="content">

    <div class="title m-b-md" style="color:yellow">devGame</div>
    <div class="row">

      @php $i=0; $background_colors = ['7082c8', 'fbc9c8', 'e38d8c', '032547', '0330e0']; @endphp
      @foreach ($users as $user)
        @if ($i % 2 == 1)
        <div class="col pt-5 mt-5">
        @else
        <div class="col m">
        @endif
        <div class="card m-4" style="color:#<?php echo $background_colors[$i % 3]; ?>; background-color:black">
          <img src="{{ asset('images/avatars/'. $i++ % 21 . '.png') }}" style="width: 100px">
          <h1>#{!! $i !!} {!! '@' . $user['username'] !!}</h1>
          <h4>Tracking Time: {!! $user['trackingtime'] !!}</h4>
          <h4>Mentoring: {!! $user['mentoring'] !!}</h4>
          <h4>Responsibility: {!! $user['responsibility'] !!}</h4>
          <h4>Codestyle: {!! $user['codestyle'] !!}</h4>
          <h4>Voting sum: {!! $user['codestyle'] + $user['responsibility'] + $user['mentoring'] !!}</h4>
          <h2>Total: {!! $user['trackingtime'] + $user['codestyle'] + $user['responsibility'] + $user['mentoring'] !!}</h2>
        </div>
      </div>
        @if ($i % 2 == 0)
        </div>
        <div class="row">
        @endif
      @endforeach
    </div>
</main>
@endsection