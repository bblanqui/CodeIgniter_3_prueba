
<div class="container">

<div class="row">
    <div class="col-md-8">

    <h3 class="mt-5"> editar registro de <?=$nombres?> </h3>

<form class="contact2-form validate-form" id="formulario" method="POST" action="http://localhost/CodeIgniter_3_prueba/update/<?=$identificacion?>">
<div class="container">
    <div class="row">
<div class="wrap-input2 validate-input col-md-7">
    <input class="input2" type="text" name="nombres" id="nombres" value="<?=$nombres?>">
   
</div>

<div class="wrap-input2 validate-input col-md-7">
    <input class="input2" type="text" name="apellidos" id="apellidos" value="<?=$apellidos?>">
    
</div>

<div class="wrap-input2 validate-input col-md-7">
    <input class="input2" name="email" value="<?=$email?>">

</div>

<div class="wrap-input2 validate-input col-md-7">
    <input class="input2" name="identificacion" value="<?=$identificacion?>" readonly>
 
</div>

<div class="container-contact2-form-btn col-md-7">
    <div class="wrap-contact2-form-btn">
        <div class="contact2-form-bgbtn"></div>
        <button class="contact2-form-btn" id="guardar">
            actualizar
        </button>
    </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>