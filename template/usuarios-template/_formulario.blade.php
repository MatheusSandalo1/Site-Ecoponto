 <div class="col-md-12">
     <label for="nome" class="form-label">Nome</label>
     <input type="text" class="form-control is-invalid" name="nome" id="nome" placeholder="Insira o Nome">
     <div class="invalid-feedback">
         Mensagem de Erro
     </div>
 </div>
 <div class="col-md-12">
     <label for="email" class="form-label">E-mail</label>
     <input type="text" name="email" class="form-control" id="email" placeholder="Insira a E-mail">
 </div>
 <div class="col-md-12">
     <label for="senha" class="form-label">Senha</label>
     <input type="password" name="senha" class="form-control" id="senha" placeholder="">
 </div>
 <div class="col-md-3">
     <label for="role" class="form-label">Nível</label>
     <select class="form-control" id="role" name="role">
         <option value="Editor">Editor</option>
         <option value="Administrador">Administrador</option>
     </select>
 </div>

 <div class="col-12">
     <button type="submit" class="btn btn-primary">Salvar</button>
 </div>
