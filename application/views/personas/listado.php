<html>
    <head>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
    <style>
        .contenedor17 {
            flex-direction: column;
            justify-content: space-between;
        }
    </style>    
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Product Order CRUD</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/productos/">Productos</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/ventas/">Pedidos</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/personas/">Clientes</a>
                </div>
                
            </div>
        </nav>
 

        <div class="container container-person mt-0 p-0">    <!-- estilo original-->
       <!-- <div class="container container-person mt-4 p-4">   estilo original-->
        <!--<div class="container"> -->
            <br>
            <a href="guardar" " class= "btn btn-success">Ingresa a un nuevo cliente</a>
            <br><br>

            <table id="product_table" class="table table-striped table-bordered table-responsive-sm" style="width:100%">
           
                <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Correo Electronico</th> 
                            <th scope="col">Acciones</th>        
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($personas as $key => $p): ?>
                            <tr>
                                <th scope="row"> <?php echo $p->persona_id ?></th>
                                <th><?php echo $p->nombre ?></th>
                                <th><?php echo $p->apellido ?></th>
                                <th><?php echo $p->edad ?></th>
                                <th><?php echo $p->fecha ?></th>
                                <th><?php echo $p->provincia ?></th>
                                <th><?php echo $p->correo ?></th>
                                <th>
                                    <a href="guardar/<?php echo $p->persona_id ?>">Editar</a>
                                    <br>
                                    <a href="#" 
                                    data-toggle="modal" 
                                    data-target="#DeletePerson" 
                                    data-id="<?php echo $p->persona_id ?>"
                                    data-name="<?php echo $p->nombre ?>">>Borrar</a>
                                </th>       
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>  
                <!-- Modal para eliminar algun cliente-->
                <div class="modal fade" id="DeletePerson" tabindex="-1" role="dialog" aria-labelledby="DeletePersonLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="DeletePersonLabel">
                    Seguro que quieres borrar al usuari@ 
                    <span></span>
                </h4>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="b-borrar">Borrar</button>
            </div>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js" ></script>

        <script>
            var id;
            var link;

            $('#DeletePerson').on('show.bs.modal', function (event) {
                link = $(event.relatedTarget) // Button that triggered the modal
                id = link.data('id') // Extract info from data-* attributes
                var name = link.data('name') // Extract info from data-* attributes
                
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title span').text(name);
            
            })
            $("#b-borrar").click( function() {
                
                $.ajax({
                    url: "<?php echo base_url() ?>personas/borrar_ajax/"+id,
                context: document.body
                }).done(function(res) {
                   console.log(res)
                   $("#DeletePerson").modal('hide');
                   $(link).parent().parent().remove()
                });
            });
            
        </script>

        </div>
    </body>
</html>  