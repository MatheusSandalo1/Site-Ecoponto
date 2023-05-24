@csrf

@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif

<div class="col-md-12">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" id="titulo" placeholder="Insira o Titulo" value="{{ old('titulo', $instrucoes->titulo) }}">

@error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Insira a Descrição" value="{{ old('descricao', $instrucoes->email) }}">

@error('descricao')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="imagem" class="form-label">Imagem</label>
    <input type="file" name="imagem" class="form-control @error('imagem') is-invalid @enderror" id="imagem" placeholder="">

    @error('imagem')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
