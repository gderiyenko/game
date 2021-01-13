@extends('layouts.app')

@section('content')
<main class="py-4">
  <form action="/points" method="post">
    {{ csrf_field() }}
    <div class="col-md-4">
      <h1>Responsibility</h1>
      <hr>
      <input type="hidden" name="skill" value="responsibility">
      <div class="form-group">
        <label for="title">Simply the Best dev</label>
        <select class="form-control" name="stars_5">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_5" placeholder="никогда не включал youtube на втором мониторе"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Awesome dev</label>
        <select class="form-control" name="stars_3">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_3" placeholder="не прокачивает героев на телефоне под столом"></textarea>
      </div>

      <div class="form-group">
        <label for="title">Super dev</label>
        <select class="form-control" name="star_1">
          <option>NULL</option>
          <option value="1">&#x1F9A1 AID</option>
          <option value="2">🦝 Gerra</option>
          <option value="3">🐭 Guri4ek</option>
        </select>
      </div>

      <div class="form-group">

        <textarea type="text" class="form-control" name="description_1" placeholder="не ориентируется в курсах доллара и ценах на ремонт квартир"></textarea>
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