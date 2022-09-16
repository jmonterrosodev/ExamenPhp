@csrf
<div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre ingrediente</label>
    <input name="nombreIngredient" type="text" value=" {{ old('nombreIngredient', $ingredient->nombreIngredient )}} " class="form-control" placeholder="Ingresa nompre para el pastel" id="inputNombre">
</div>
<div class="col-md-6">
    <label for="inputVence" class="form-label">Fecha Vencimiento</label>
    <input class="form-control" type="date" value="{{ old('fechaVence', $ingredient->fechaVence->format('Y-m-d') ) }}"  id="inputVence" name="fechaVence" value="" min="{{ date('Y-m-d') }}" max="2050-12-31">
    <input type="hidden" value="{{ is_null($ingredient->fechaIngreso) ? date('Y-m-d') : $ingredient->fechaIngreso->format('Y-m-d') }}"  id="inputCreado" name="fechaIngreso" />    
</div>
<div class="col-12">
<label for="inputDesc" class="form-label">Descripcion Ingrediente</label>
<textarea name="descIngredient" type="textArea" class="form-control" id="inputDesc" >{{ old('descIngredient', $ingredient->descIngredient) }}</textarea>
</div>

