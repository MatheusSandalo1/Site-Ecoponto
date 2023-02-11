@csrf

@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif

<div class="col-md-12">
    <label for="Residuos" class="form-label">Resíduos</label>
    <input type="text" class="form-control @error('Residuos') is-invalid @enderror" name="tipo" id="tipo" placeholder="Insira os Residuos" value="{{ old('Residuos', $instrucoes->titulo) }}">

@error('Residuos')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
