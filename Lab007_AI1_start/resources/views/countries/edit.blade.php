@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj dane kraju'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane kraju</h1>
        </div>

        

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('countries.update', $country->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $country->name }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    {{-- Uzupełnienie formularza --}}
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Kod</label>
                        <input id="code" name="code" type="text" class="form-control value="{{ $country->code }}">
                        <div class="invalid-feedback">Nieprawidłowy kod!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="currency" class="form-label">Waluta</label>
                        <input id="currency" name="currency" type="text" class="form-control value="{{ $country->currency }}">
                        <div class="invalid-feedback">Nieprawidłowa waluta!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="area" class="form-label">Powierzchnia</label>
                        <input id="area" name="area" type="number" class="form-control value="{{ $country->area }}">
                        <div class="invalid-feedback">Nieprawidłowa powierzchnia!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="language" class="form-label">Język</label>
                        <input id="language" name="language" type="text" class="form-control value="{{ $country->language }}">
                        <div class="invalid-feedback">Nieprawidłowy language!</div>
                    </div>                    
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
