@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
      <!-- Секция с фильтрами слева -->
      <div class="col-md-3">
        <h4>Фильтры</h4>
        <form>
          <div class="form-group mb-4">
            <label for="minPrice">Минимальная цена:</label>
            <input type="text" class="form-control jsCustomField" id="minPrice">
          </div>
          <div class="form-group mb-4">
            <label for="maxPrice">Максимальная цена:</label>
            <input type="text" class="form-control jsCustomField" id="maxPrice">
          </div>
          <div class="form-group mb-4">
            <label for="titleFilter">Текст в названии:</label>
            <input type="text" class="form-control jsCustomField" id="title">
          </div>
          <div class="form-group mb-4">
            <label for="descriptionFilter">Текст в описании:</label>
            <input type="text" class="form-control jsCustomField" id="desc">
          </div>
          <div class="form-group mb-4">
            <label for="addressFilter">Адрес:</label>
            <input type="text" class="form-control jsCustomField" id="address">
          </div>
          <a href="" class="btn btn-primary mb-2" id="dynLink">Применить фильтры</a>
          <a href="" class="btn btn-danger" id="dynLinkReset">Сбросить фильтры</a>
        </form>
      </div>
  
      <!-- Секция с карточками справа -->
      <div class="col-md-9">
        <h4>Объявления</h4>
        @foreach($bulletins as $bulletin)
            
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ $bulletin->image }}" class="card-img-top" alt="Фото">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bulletin->title }}</h5>
                                <p class="card-text">{{ $bulletin->desc }}</p>
                                <p class="card-text fs-2">{{ $bulletin->price }} руб.</p>
                                <p class="card-text">{{ $bulletin->address }}</p>
                                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>  {{ $bulletin->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body">
                            <a href="{{route('show', $bulletin->id)}}" class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            
        @endforeach

        <div>
            {{ $bulletins->withQueryString()->links()}}
        </div>

        </div>
  
        <!-- Добавьте другие карточки по аналогии -->
      </div>
    </div>
  </div>

  <script>
      $(function() {
      var $dynLink = $("#dynLink")
      var currHref = window.location.href.split("&")[0];
      
      $dynLink.attr("href", currHref);
      $("#dynLinkReset").attr("href", currHref);

      var linkTemplate = currHref

      var filters = {
        "minPrice": "0",
        "maxPrice": "9999999999999",
        "title": "",
        "desc": "",
        "address": "",
      }
          
          
      $(".jsCustomField").on("change", function(e) {
          var linkTemplate = currHref
          if (e.target.id == "title") {
            filters.title = $("#title").val()
          }

          if (e.target.id == "desc") {
            filters.desc = $("#desc").val()
          }

          if (e.target.id == "address") {
            filters.address = $("#address").val()
          }

          if (e.target.id == "minPrice") {
            if ($("#minPrice").val() != "") {
              filters.minPrice = $("#minPrice").val()
            } else {
              filters.minPrice = "0"
            }
          }

          if (e.target.id == "maxPrice") {
            if ($("#maxPrice").val() != "") {
              filters.maxPrice = $("#maxPrice").val()
            } else {
              filters.maxPrice = "9999999999999999"
            }
            
          }

          for (var filter in filters) {
              if(filters[filter] != "") {
                
                if(filter == "minPrice") {
                  linkTemplate = linkTemplate + "&price=" + filters.minPrice + "-" + filters.maxPrice
                } else {
                  if(filter == "maxPrice") {
                    //
                  } else {
                    linkTemplate = linkTemplate + "&" + filter + "=" + $("#" + filter).val()
                  }

                }

                
              }
          }

          $dynLink.attr("href", linkTemplate);
          
          // var customLink = linkTemplate.replace("{0}", $priceInput.val())
          //                                 .replace("{1}", $titleInput.val())
          //                                 .replace("{2}", $descInput.val());
          
      });
      
      
    });
  </script>
  
@endsection

