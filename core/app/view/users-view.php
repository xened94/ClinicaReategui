<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Usuarios</h4>
  </div>
  <div class="card-content table-responsive">


	<a href="index.php?view=newuser" class="btn btn-default"><i class='fa fa-user'></i> Registrar Usuario</a>
<br>
		<?php

		?>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
	
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nick</th>
			<th>Email</th>
			<th>Activo</th>
				<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
					
			       <td style="width:60px;">

				<a href="index.php?view=edituser&id=<?php echo $user->id;?>" rel="tooltip" title="Editar" class="btn btn-warning btn-xs">Editar</a> 

				<a href="index.php?view=delusers&id=<?php echo $user->id;?>" rel="tooltip" title="Eliminar" class=" btn btn-danger btn-xs">Eliminar</a></td>

				</tr>
				<?php

			}
			?>
			</table>
			<?php



		}else{
		
		}


		?>

</div>
</div>
	</div>
</div>