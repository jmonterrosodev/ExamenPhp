@csrf
<div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre pastel</label>
    <input name="nombrePastel" type="text" value=" {{ old('nombrePastel', $cake->nombrePastel )}} " class="form-control" placeholder="Ingresa nompre para el pastel" id="inputNombre">
</div>
<div class="col-md-6">
    <label for="inputCreador" class="form-label">Creador Pastel</label>
    <input name="creadorPastel" value="{{ old('creadorPastel', $cake->creadorPastel ) }} "  type="text" placeholder="Ingresa el nombre del creador" class="form-control" id="inputCreador">
</div>
<div class="col-12">
<label for="inputDesc" class="form-label">Descripcion Pastel</label>
<textarea name="descPastel" type="textArea" class="form-control" id="inputDesc" >{{ old('descPastel', $cake->descPastel) }}</textarea>
</div>
<div class="col-md-6">
    <label for="inputVence" class="form-label">Fecha Vencimiento</label>
    <input class="form-control" type="date" value="{{ old('fechaVence', $cake->fechaVence->format('Y-m-d') ) }}"  id="inputVence" name="fechaVence" value="" min="{{ date('Y-m-d') }}" max="2050-12-31">
    <input type="hidden" value="{{ is_null($cake->fechaCreado) ? date('Y-m-d') : $cake->fechaCreado->format('Y-m-d') }}"  id="inputCreado" name="fechaCreado" />    
</div>
