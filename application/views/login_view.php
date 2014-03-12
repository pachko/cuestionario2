<div id="container" class="container">
   <div id="content">
      <?php
      echo validation_errors();
      $data = array( 'class' => 'form-signin', 'role' => 'form' );
      echo form_open( 'verifylogin', $data ); ?>
         <h2 class="form-signin-heading">Ingresar</h2>
         <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required autofocus>
         <input type="password" class="form-control" id="passowrd" name="password" placeholder="Contraseña" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
   </div>
</div>