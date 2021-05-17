
<html>
    <head>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    </head>
    <body>
    
        <div class="container container-person mt-5 p-5">    <!-- estilo original-->
   <!-- <div class="container">-->
    <br>
            <a href="listado" " class= "btn btn-success">Volver al listado de Clientes</a>
            <br><br>
        <?php echo validation_errors(); ?>
        <?php  echo form_open(''); ?>
        <!--Nombre-->
        <div class="form-group">
            <?php
            echo form_label('Nombre', 'nombre');

            $input = array(
                'name'  => 'nombre',
                'value' => $nombre,
                'class' => 'form-control input-lg'
                
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
        <!--Apellido-->
        <div class="form-group">
            <?php
            echo form_label('Apellido', 'apellido');

            $input = array(
                'name'  => 'apellido',
                'value' => $apellido,
                'class' => 'form-control input-lg'
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
        <!--Edad-->
        <div class="form-group">
            <?php
            echo form_label('DNI', 'dni');

            $input = array(
                'name'  => 'edad',
                'type'  => 'number',
                'value' => $edad,
                'class' => 'form-control input-lg'
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
          <!--Fecha-->
          <div class="form-group">
            <?php
            echo form_label('Fecha de Nacimiento', 'fecha');

            $input = array(
                'name'  => 'fecha',
                'type'  => 'date',
                'value' => $fecha,
                'class' => 'form-control input-lg'
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
        <!--Provincia-->
        <div class="form-group">
            <?php
            echo form_label('Provincia', 'provincia');

            $input = array(
                'name'  => 'provincia',
                'value' => $provincia,
                'class' => 'form-control input-lg'
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
        <!--Correo-->
        <div class="form-group">
            <?php
            echo form_label('Correo Electronico', 'correo');

            $input = array(
                'name'  => 'correo',
                'type'  => 'mail',
                'value' => $correo,
                'class' => 'form-control input-lg'
            );
            //imprime campo en html plano
            echo form_input($input);
            ?>
        </div>
        <!--Boton-->
        <?php
        echo form_submit('mysubmit', 'Crear Cliente', "class='btn btn-primary'" );
        ?>

        <?php  echo form_close(''); ?>
    </div>
    </body>
</html>