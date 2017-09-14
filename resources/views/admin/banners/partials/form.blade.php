<div class="form-group">
    <label for="">Texto</label>
        <input type="text" class="form-control" id="texto" name="texto" placeholder="Ingrese Texto"
            value="{{ $banner->texto or old('texto') }}">                                                
</div>

<div class="form-group">
<label for="">Icono Boton 1</label>
        <input type="text" class="form-control" id="icono_boton_1" name="icono_boton_1" placeholder="Ingrese Icono Boton 1"
            value="{{ $banner->icono_boton_1 or old('icono_boton_1') }}">                                                
</div>

<div class="form-group">
<label for="">Texto Boton 1</label>
        <input type="text" class="form-control" id="texto_boton_1" name="texto_boton_1" placeholder="Ingrese Texto Boton 1"
            value="{{ $banner->texto_boton_1 or old('texto_boton_1') }}">                                                
</div>

<div class="form-group">
<label for="">Style Boton 1</label>
        <input type="text" class="form-control" id="style_boton_1" name="style_boton_1" placeholder="Ingrese Style Boton 1"
            value="{{ $banner->style_boton_1 or old('style_boton_1') }}">                                                
</div>

<div class="form-group">
<label for="">Icono Boton 2</label>
        <input type="text" class="form-control" id="icono_boton_2" name="icono_boton_2" placeholder="Ingrese Icono Boton 2"
            value="{{ $banner->icono_boton_2 or old('icono_boton_2') }}">                                                
</div>

<div class="form-group">
<label for="">Texto Boton 2</label>
        <input type="text" class="form-control" id="texto_boton_2" name="texto_boton_2" placeholder="Ingrese Texto Boton 2"
            value="{{ $banner->texto_boton_2 or old('texto_boton_2') }}">                                                
</div>

<div class="form-group">
<label for="">Style Boton 2</label>
        <input type="text" class="form-control" id="style_boton_2" name="style_boton_2" placeholder="Ingrese Style Boton 2"
            value="{{ $banner->style_boton_2 or old('style_boton_2') }}">                                                
</div>