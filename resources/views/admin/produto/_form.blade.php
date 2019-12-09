<div class="input-field">
	<input type="text" name="nome" id="nome" value="{{ isset($registro->nome) ? $registro->nome : null }}">
	<label for="nome">Nome</label>
</div>
<div class="input-field">
	<textarea type="text" name="descricao" id="descricao" class="form-control">{{ isset($registro->descricao) ? $registro->descricao : null }}</textarea>
	<label for="descricao">Descrição</label>
</div>
<div class="input-field">
  <input type="file" name="imagem" id="imagem" value="{{ isset($registro->imagem) ? $registro->imagem : null }}">
  <label for="imagem">Imagem</label>
</div>
<div class="input-field">
	<input type="text" name="valor" id="valor" value="{{ isset($registro->valor) ? $registro->valor : null }}">
	<label for="valor">Valor</label>
</div>
<div class="input-field">
    <div class="row">
        <label for="ativo">Ativo</label>
    </div>
    <div class="row">
      <input name="ativo" type="radio" id="ativo-s" value="S" {{ isset($registro->ativo) && $registro->ativo == 'S' ? ' checked="checked"' : null }} required="required" />
      <label for="ativo-s">Sim</label>

      <input name="ativo" type="radio" id="ativo-n" value="N" {{ isset($registro->ativo) && $registro->ativo == 'N' ? ' checked="checked"' : null }} required="required"  />
      <label for="ativo-n">Não</label>
    </div>
    <div class="input-field">
    <div class="row">
        <label for="ativo">Tipo</label>
    </div>
     <div class="row">
      <input name="tipo" type="radio" id="tipo-sa" value="Sanduiche" {{ isset($registro->tipo) && $registro->tipo == 'Sanduiche' ? ' checked="checked"' : null }} required="required" />
      <label for="tipo-sa">Sanduiche</label>

      <input name="tipo" type="radio" id="tipo-sal" value="Salada" {{ isset($registro->tipo) && $registro->tipo == 'Salada' ? ' checked="checked"' : null }} required="required" />
      <label for="tipo-sal">Salada</label>

      <input name="tipo" type="radio" id="tipo-so" value="Sobremesa" {{ isset($registro->tipo) && $registro->tipo == 'Sobremesa' ? ' checked="checked"' : null }} required="required" />
      <label for="tipo-so">Sobremesa</label>

    </div>
</div>