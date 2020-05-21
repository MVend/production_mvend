<!DOCTYPE html>
<html>
    <head>

        <title> Login </title>

        <meta charset="UTF-8">
        <meta name="description" content="Betlion" />
        <meta name="keywords" content="Betlion" /> 
        <meta name="author" content="Betlion" />
        <meta content="width=device-width, initial-scale=1" name="viewport"/>

        <?php
        //<!-- PLUGIN CSS -->
        echo $this->Html->css('assets/plugins/uniform/css/uniform.default.min');
        echo $this->Html->css('assets/plugins/bootstrap/css/bootstrap.min');
        echo $this->Html->css('assets/plugins/fontawesome/css/font-awesome');
        echo $this->Html->css('assets/plugins/line-icons/simple-line-icons');
        echo $this->Html->css('assets/plugins/waves/waves.min');
        echo $this->Html->css('assets/plugins/metrojs/MetroJs.min');
        echo $this->Html->css('assets/plugins/toastr/toastr.min');
        echo $this->Html->css('assets/plugins/datatables/css/jquery.datatables.min');
        echo $this->Html->css('assets/plugins/datatables/css/jquery.datatables_themeroller');
        echo $this->Html->css('assets/plugins/bootstrap-datepicker/css/datepicker3');
        echo $this->Html->css('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput');
        echo $this->Html->css('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min');
        echo $this->Html->css('assets/plugins/fullcalendar/fullcalendar.min');

        //<!-- APPLICATION CSS -->
        echo $this->Html->css('assets/css/dashboard.min');
        echo $this->Html->css('assets/css/custom');
        echo $this->Html->script('assets/plugins/jquery/jquery-2.1.4.min');
        ?>

    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <?php //echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <?php
        // <!-- PLUGIN JS -->

        echo $this->Html->script('assets/plugins/jquery-ui/jquery-ui.min');
        echo $this->Html->script('assets/plugins/jquery-blockui/jquery.blockui');
        echo $this->Html->script('assets/plugins/bootstrap/js/bootstrap.min');
        echo $this->Html->script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min');
        echo $this->Html->script('assets/plugins/uniform/jquery.uniform.min');
        echo $this->Html->script('assets/plugins/waves/waves.min');
        echo $this->Html->script('assets/plugins/waypoints/jquery.waypoints.min');
        echo $this->Html->script('assets/plugins/jquery-counterup/jquery.counterup.min');
        echo $this->Html->script('assets/plugins/toastr/toastr.min');
        echo $this->Html->script('assets/plugins/chartsjs/Chart.min');
        echo $this->Html->script('assets/plugins/metrojs/MetroJs.min');
        echo $this->Html->script('assets/plugins/moment/moment');
        echo $this->Html->script('assets/plugins/datatables/js/jquery.datatables.min');
        echo $this->Html->script('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker');
        echo $this->Html->script('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min');
        echo $this->Html->script('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min');
        echo $this->Html->script('assets/plugins/fullcalendar/fullcalendar.min');

        //<!-- APPLICATION JS -->   
        echo $this->Html->script('assets/js/dashboard');
        echo $this->Html->script('assets/js/custom');
        ?>

    </body>
</html>