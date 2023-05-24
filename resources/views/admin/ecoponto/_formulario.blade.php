@csrf

@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif

<div class="col-md-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome" placeholder="Insira o Nome" value="{{ old('nome', $ecoponto->nome) }}">

@error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="rua" class="form-label">Rua</label>
    <input type="text" name="rua" class="form-control @error('rua') is-invalid @enderror" id="rua" placeholder="Insira a Rua" value="{{ old('rua', $ecoponto->rua) }}">

@error('rua')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="bairro" class="form-label">Bairro</label>
    <input type="text" name="bairro" class="form-control @error('bairro') is-invalid @enderror" id="bairro" placeholder="Insira O Bairro" value="{{ old('bairro', $ecoponto->bairro) }}">

@error('bairro')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-md-12">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" id="cidade" placeholder="Insira a Cidade" value="{{ old('cidade', $ecoponto->cidade) }}">

@error('cidade')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-md-12">
    <label for="cep" class="form-label">CEP</label>
    <input type="text" name="cep" class="form-control @error('cep') is-invalid @enderror" id="cep" placeholder="Insira O CEP" value="{{ old('cep', $ecoponto->cep) }}">

@error('cep')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-md-12">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado" placeholder="Insira o Estado" value="{{ old('estado', $ecoponto->estado) }}">

@error('estado')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-md-12">
    <label for="funcionamento" class="form-label">Funcionamento</label>
    <input type="text" name="funcionamento" class="form-control @error('funcionamento') is-invalid @enderror" id="funcionamento" placeholder="Insira o funcionamento" value="{{ old('funcionamento', $ecoponto->funcionamento) }}">

@error('funcionamento')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<div class="col-md-12">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="Insira o telefone" value="{{ old('telefone', $ecoponto->telefone) }}">

@error('telefone')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
