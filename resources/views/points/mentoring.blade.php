@extends('layouts.app')

@section('content')
<main class="py-4">
  <form action="/points" method="post">
    {{ csrf_field() }}
    <div class="col-md-4" style="float: left;">
      <h1>Mentoring</h1>
      <hr>
      <input type="hidden" name="skill" value="mentoring">
      <div class="form-group">
        <label for="title">Great mentor</label>
        <select class="form-control" name="stars_5">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_5" placeholder="каждый день уделяет время на помощь и контроль текущих тасков"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Good curator</label>
        <select class="form-control" name="stars_3">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_3" placeholder="всегда в курсе всех текущих проектов своих ребят"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Nice advisor</label>
        <select class="form-control" name="star_1">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_1" placeholder="если отмотать 10 лет назад, хотел бы себе такого куратора "></textarea>
      </div>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>
@endsection