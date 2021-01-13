@extends('layouts.app')
@section('content')
<main class="py-4">
  <div class="content">
    <div class="h2 m-b-md">
      {{ $user_name }} Cabinet
      @foreach($bonuses as $value)
      &#x1F94{!! $value + 6 !!}
      @endforeach<br>
      your current ranking is {{ $ranking }}
    </div>
    @foreach ($achievements as $key => $value)
    <img width="50" src="{{ asset('avatars/'. $value->id .'.jpg') }}" title="{{ $value->achievement }}">
    @endforeach <p>
    <div class="container">

      <div class="col col-md-12">
        <div class="h2 m-b-md">
          My working hours this month
        </div>

        <form method="post" action="cabinet/saveTime">
          @csrf
          <div class="form-row">
            <div class="col">
              <input type="number" class="form-control" name="standartHours" placeholder="Standart Hours" step="0.01">
            </div>
            <div class="col">
              <input type="number" class="form-control" name="overtimeHours" placeholder="Overtime Hours" step="0.01">
            </div>
            <div class="col">
              <input type="number" class="form-control" name="internalHours" placeholder="Internal Hours" step="0.01">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="url" placeholder="Url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Contract</th>
              <th>Client</th>
              <th>Week limit</th>
              <th>Completed</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contracts as $key => $value)
            <tr>
              <td><a href="/contracts/editcontract?id={{ $value->id }}">{{ $value->title }}</a></td>
              <td>{{ $value->contact }}</td>
              <td>{{ $value->description }}</td>
              <td>
                <div class="custom-control custom-switch">
                  @if ($value->status)
                  <input type="checkbox" class="custom-control-input" id="{{$value->offer}}" name="{{$value->offer}}" checked>
                  @else
                  &#x2B50 &#x2B50 &#x2B50 &#x2B50 &#x2B50
                  @endif
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-md-6">

          <table class="table table-striped">
            <thead>
              <tr>
                <th colspan="3">{{ $days}} days left for New Year</th>
              </tr>
            </thead>
          </table>

          @if(!empty($lastvacations['start']))
          <div class="card ach-card m-10">
            <h4>Last Vacation</h4>
            <div class="card-details">
              <h4>{!! $lastvacations['location'] !!} from {!! $lastvacations['start'] !!} to {!! $lastvacations['end'] !!}</h4>
            </div>
          </div>
          @endif
        </div>

        <div class="col-md-6">
          <table class="table table-sm">
            <thead>
              <tr>
                <th>Skill</th>
                <th>Points</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>tracking time</td>
                <td>{{ $time }}</td>
              </tr>
              <tr>
                <td>codestyle</td>
                <td>{{ $codestyle }}</td>
              </tr>
              <tr>
                <td>responsibility</td>
                <td>{{ $responsibility }}</td>
              </tr>
              <tr>
                <td>mentoring</td>
                <td>{{ $mentoring }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection