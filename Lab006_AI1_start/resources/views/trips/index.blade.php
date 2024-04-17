<!doctype html>
<html lang="pl" data-bs-theme="">
  @include('shared.head', ['pageTitle' => 'Wycieczki górskie'])
  <body>
    @include('shared.navbar')

    <div id="start">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-white">Niesamowite przeżycia!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-white">Niesamowite widoki!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-white">Piękno natury!</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="wycieczki" class="container mt-5">
      <div class="row">
        <h1>Wycieczki</h1>
      </div>
      <div class="row">
         @foreach ($trips as $trip)
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <img src="{{ asset('storage/img/' . $trip->img) }}" class="card-img-top" alt="{{ $trip->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $trip->name }}</h5>
                <p class="card-text">{{ $trip->description }}</p>
                <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-primary">Więcej szczegółów...</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div id="cennik" class="container mt-5 mb-5">
      <div class="row">
          <h1>Cennik</h1>
      </div>
      <div class="table-responsive-sm">
        <table class="table table-hover table-striped">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nazwa wycieczki</th>
                  <th scope="col">Kontynent</th>
                  <th scope="col">Kraj</th>
                  <th scope="col">Okres</th>
                  <th scope="col">Cena</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Kolorado</td>
                  <td>Ameryka Północna</td>
                  <td>USA</td>
                  <td>7 dni</td>
                  <td>19000 PLN</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Alaska</td>
                  <td>Ameryka Północna</td>
                  <td>USA</td>
                  <td>10 dni</td>
                  <td>24000 PLN</td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>Everest</td>
                  <td>Azja</td>
                  <td>Chiny</td>
                  <td>7 dni</td>
                  <td>22000 PLN</td>
              </tr>
              <tr>
                  <th scope="row">4</th>
                  <td>Alpy</td>
                  <td>Europa</td>
                  <td>Austria</td>
                  <td>6 dni</td>
                  <td>16000 PLN</td>
              </tr>
          </tbody>
      </table>
      </div>
    </div>

    <div id="inne" class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 mb-4">
          <h2>O naszych wycieczkach...</h2>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/t7ZpJ7wWlZI"></iframe>
        </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <h2>Zapytanie o ofertę</h2>
          <form>
            <div class="mt-2 mb-3">
                <label for="exampleFormControlInput1">Adres email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormSelect1">Rodzaj oferty</label>
                <select class="form-select" id="exampleFormControlSelect1">
                    <option selected>indywidualna</option>
                    <option>grupowa</option>
                    <option>specjalna</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlAmount">Budżet</label>
                <div class="input-group mb-3">
                  <input type="number" min="0" placeholder="20000" step="any" class="form-control" aria-label="Amount">
                  <span class="input-group-text">PLN</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Komentarz</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <a href="#" class="btn btn-primary">Wyślij</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    @include('shared.footer')

</html>
