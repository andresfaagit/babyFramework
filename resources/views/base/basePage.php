<html>
    <!-- Header -->
    <?php include_once (VIEWS.'base/header.php') ?>

    <!-- Banner -->
    <?php include_once (VIEWS.'base/banner.php') ?>
    
    <!-- Body -->
    <div>  
        <body> 
            <div class="animate-body">

                <!-- Body to show-->
                <?php include (VIEWS.CONTROLLER.DS.$view.'View.php') ?>

            </div>
        </body>
    </div>   
    
    <!-- Footer -->
    <?php include_once (VIEWS.'base/footerEmpty.php') ?>
</html>