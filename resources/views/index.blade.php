@extends('layout')
@section('contentPart')
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
          <a class="navbar-brand" href="/">dongelekter.kz</a>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="/">Все транспорты</a>
              <a class="nav-item nav-link active" href="/addCars">Добавить транспорт</a>
            </div>
          </div>
        </nav>
  </div>

  @foreach ($trucks as $tr)
    <div class="container mt-3">
      <div class="card text-white bg-dark mb-3" style="max-width: auto;">
        <div class="card-header">
          <h2 name="model_car">{{$tr->name}}</h2>
          <h4 class="mt-3" name="price">{{$tr->price}} тенге</h4>
        </div>

        <div class="card-body">
          <h5 class="card-title">Данный {{$tr->name}} способен поднимать груз до {{$tr->lifting}} кг, прицеп стоить {{$tr->price_triler}} тенге</h5>
          <a class="btn btn-success mt-3" href="#">Подробнее</a>
        </div>
      </div>
    </div>
  @endforeach
@endsection