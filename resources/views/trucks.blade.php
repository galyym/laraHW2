@extends('layout')
@section('contentPart')
  
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark px-3" style="background-color:#6A5D11;">
        <a class="navbar-brand" href="/">dongelekter.kz</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Все транспорты</a>
            <a class="nav-item nav-link active" href="/addCars">Добавить транспорт</a>
          </div>
        </div>
      </nav>
  </div>

  <div class="container mx-auto mt-3">
    <div class="row">
      <div class="col-6 mx-auto">
        <form class="form-group" action="/toAddCarsTrucks">
          <div class="mt-2">
            <p>Наименование грузовика:</p>
            <input class="form-control" type="text" placeholder="Наименование грузовика" name="name">
          </div>
          <div class="mt-2">
            <p>Грузоподъемность (кг):</p>
            <input class="form-control" type="number" placeholder="0" name="lifting">
          </div>
          <div class="mt-2">
            <p>Цена грузовика:</p>
            <input class="form-control" type="number" placeholder="0" name="price">
          </div>
          <div class="mt-2">
            <p>Цена прицепа:</p>
            <input class="form-control" type="number" placeholder="0" name="price_triler">
          </div>
          <button type="submit" class="btn btn-dark mt-3" href="#" style="background-color:#6A5D11;">+ Добавить новый грузовик</button>
        </form>
      </div>
    </div>
  </div>
@endsection