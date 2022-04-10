<h1>Dodaj ogłoszenie</h1>

<form class="row m-3" method="POST" action="/commissions" enctype="multipart-data">
{{csrf_field()}}
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label">Tytuł</label>

        <input id="title" type="text"
        class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}"
        name="title"
        
        required>

      @if ($errors->has('title'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-md-4 col-form-label">Opis</label>

        <input id="description" type="textarea"
        class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"
        name="description"
       
        required>

    @if ($errors->has('description'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif

    </div>
   
    <div class="form-group row g-2">
       
        <label form="image">Dodaj zdjęcie</label>
        <input type="file" id="image" name="image">
    </div>

    <div class="col-12 g-3">
    <button class="btn btn-primary" type="submmit">Dodaj</button>
    </div>
</form>

