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

  <div class="container mx-auto mt-3">
    <div class="row">
      <div class="col-6 mx-auto">
        <form class="form-inline" action="/toAddCars">
          @csrf
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Выберите вид товара:</label>
          <div>
            <select class="form-select custom-select mr-sm-6 mt-2" id="inlineFormCustomSelectPref" name="trucks">
              <option value="1">Грузовик</option>
              <option value="2">Легковой автомобиль</option>
              <option value="3">Автобус</option>
            </select>
          </div>
          
          <button type="submit" class="btn btn-dark my-1 mt-3">Далее ></button>
        </form>
      </div>
    </div>
  </div>
@endsection