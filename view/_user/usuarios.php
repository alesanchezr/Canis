<div id="content">
<p id="message">El siguiente es un listado de todos los usuarios del sistema:</p>
		<div class="post">
          <p>
          <form action="crud.php" method="post">
          <input type="hidden" name="action" value="searchUsers" />
                       Correo: <input name="email" type="text" value="<?php if(isset($_SESSION['search']['users']['email']	)) echo $_SESSION['search']['users']['email']; ?>" /> 
                       Rol: <select name="role">
                        <option value"">Todos</option>
        	<?php foreach($vars['roles'] as $rol) { ?>
				<option value="<?php echo $rol->id; ?>"><?php echo $rol->name; ?></option>
            <?php } ?>
                       </select> 
                       Ubicacion: <select name="location">
                <option value"">Todas</option>
        	<?php foreach($vars['locations'] as $locations) { ?>
				<option value="<?php echo $locations->id; ?>"><?php echo $locations->name; ?></option>
            <?php } ?>
                       </select>
                       <input name="" type="submit" value="Buscar" />
          </form>
          </p>
  		</div>
         <ul id="lista">
         <?php if(count($vars['users'])==0) echo "No hay usuarios"; ?>
         <?php foreach($vars['users'] as $user) { ?>
         <li id="user">
         <div id="showUser<?php echo $user->cod; ?>" class="UserPar">
         <table width="800" border="0">
               <tr>
                 <td>                    
                 	<p>
                    	<strong>Nombre:</strong>  <?php echo $user->user; ?>
                        <strong>Rol</strong>: <?php echo $user->roleName; ?>   
                        <strong>Ubicacion</strong>: <?php echo $user->locationName; ?>                                
                	</p>
                 </td>
                 <td>
                     <ul id="menuItem">
                        <li class="detailsLink"><a href="popup/info_propietario.php?width=550" class="jTip" id="<?php echo $user->cod; ?>" name="Especificaciones de tu perfil:">detalles</a></li>
                        <li><a href="#" class="editLink" name="User<?php echo $user->cod; ?>">editar</a></li>
                        <li><a class="deleteLink" href="crud.php?action=deleteUser&id=<?php echo $user->cod; ?>">eliminar</a></li>
                    </ul>
                 </td>
               </tr>
             </table>                
           </div>
            <div id="editUser<?php echo $user->cod; ?>" style="display:none;">
            <form action"crud.php" method="post">
            	<input type="hidden" name="action" value="updateUserRole" />
            	<input type="hidden" name="id" value="<?php echo $user->cod; ?>" />
                <div class="divRight">
                    <p><strong>Nombre:</strong>  <?php echo $user->user; ?>
                        <strong>Rol</strong>: 
                        <select name="role">
                        <?php foreach($vars['roles'] as $role) { ?>
                            <option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
                        <?php } ?>
                        </select>
                        <br />   
                        <strong>Ubicacion</strong>: <?php echo $user->locationName; ?>                                  
                </p>
                </div>
                <div id="menuButtons">
                    <input name="" type="submit" value="Guardar" />
                    <input name="User<?php echo $user->cod; ?>" type="button" value="Cancelar" class="showButton" />
                </div>
             </form>
           </div>
</li>
             <p>
               <?php } ?>
               </div>
                    </div>
                   </div>
               </div>
             </p>
             <p>&nbsp;</p>
             
             <p>&nbsp; </p>
