@extends('layouts.app')

@section('content')
<main class="py-4">
  <form action="/points" method="post">
    {{ csrf_field() }}
    <div class="col-md-4" style="float: left;">
      <h1>Codestyle </h1>
      <hr>
      <div class="form-group">
        <label for="title">Simply the Best dev</label>
        <select class="form-control" name="codestyle_5">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="codestyle_5_description" placeholder="если мне нужен будет совет по codestyle, то я спрошу у него"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Awesome dev</label>
        <select class="form-control" name="codestyle_3">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="codestyle_3_description" placeholder="его код не стыдно выложить на github"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Super dev</label>
        <select class="form-control" name="codestyle_1">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="codestyle_1_description" placeholder="он знает и пишет по всем PSR-ам"></textarea>
      </div>
    </div>


    <div class="col-md-4" style="float: left;">
      <h1>Mentoring </h1>
      <hr>
      <div class="form-group">
        <label for="title">Great mentor</label>
        <select class="form-control" name="mentoring_5">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="mentoring_5_description" placeholder="каждый день уделяет время на помощь и контроль текущих тасков"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Good curator</label>
        <select class="form-control" name="mentoring_3">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="mentoring_3_description" placeholder="всегда в курсе всех текущих проектов своих ребят"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Nice advisor</label>
        <select class="form-control" name="mentoring_1">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="mentoring_1_description" placeholder="если отмотать 10 лет назад, хотел бы себе такого куратора "></textarea>
      </div>
    </div>


    <div class="col-md-4" style="float: left;">
      <h1>Запотею но сделаю</h1>
      <hr>
      <div class="form-group">
        <label for="title">Simply the Best dev</label>
        <select class="form-control" name="responsibility_5">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="responsibility_5_description" placeholder="никогда не включал youtube на втором мониторе"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Awesome dev</label>
        <select class="form-control" name="responsibility_3">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="responsibility_3_description" placeholder="не прокачивает героев на телефоне под столом"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Super dev</label>
        <select class="form-control" name="responsibility_1">
          <option disabled>None</option>
          <option value="1">AID</option>
          <option value="2">Gerra</option>
          <option value="3">Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="responsibility_1_description" placeholder="не ориентируется в курсах доллара и ценах на ремонт квартир"></textarea>
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