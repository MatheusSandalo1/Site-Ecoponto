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
    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome" placeholder="Insira o Nome" value="{{ old('nome', $usuario->nome) }}">

@error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Insira a E-mail" value="{{ old('email', $usuario->email) }}">

@error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

</div>
<div class="col-md-12">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="senha" placeholder="">

    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="col-md-3">
    <label for="role" class="form-label">Nível</label>
    <select class="form-control" id="role" name="role">
        <option value="Editor" {{ old('role', $usuario->role) == 'Editor' ? 'selected' : '' }}>
            Editor</option>
        <option value="Administrador" {{ old('role',$usuario->role) == 'Administrador' ? 'selected' : '' }}>
            Administrador</option>
    </select>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
