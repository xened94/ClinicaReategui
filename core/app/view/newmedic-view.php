<?php
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Registrar Medico</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addmedic" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Area <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
    <select name="category_id" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($categories as $cat):?>
    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>      
    <?php endforeach;?>
    </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" maxlength="30">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido" maxlength="20">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address" placeholder="Direccion" maxlength="20">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email<SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email" maxlength="20">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-3">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefono" maxlength="9">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Medico</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>