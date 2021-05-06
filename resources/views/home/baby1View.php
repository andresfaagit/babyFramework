<div class="container">    
    <br>
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Cada vista funciona como si fuese solo el body de una página.
        Se carga automáticamente la "base" y se le indica qué 
    </div>   

    <div class="alert alert-secondary">
        Tiene efectos la página
    </div>

    <div class="container">   
        CONTAINER 2 >> Acá iría el body real de la pag

        <?php echo(CONTROLLERS.'home/prueba'); ?>
        

        <form name="formRelevate" novalidate method="post" action='http://localhost/babyFramework/home/test'>   

            <div class="form-group row"> 
                <div class="col-12 col-md-8 offset-md-2" >
                    <button name="sendInscription" id="sendInscription" type="submit" class="btn btn-outline-primary btn-round btn-block btn-lg" > Prueba llamado a /home/test </button>
                </div>
            </div>

        </form>
    </div>                                              
</div> 
