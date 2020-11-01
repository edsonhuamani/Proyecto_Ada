<?php 
/*$sesion =  $_SESSION['usuario'][0];
defined('BASEPATH') OR exit('No direct script access allowed');*/
//$rol = $_SESSION['usuario'][0]['ROLASISTENCIA'];
?>
<?php $this->load->view('header'); ?>
<?php $this->load->view('nav'); ?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div>
                        <div align="center">
                            <img align="center" src="<?php echo base_url(); ?>fondos/fondo1.png">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
    $("#inicio").addClass('active');
    $("#hinicio").attr('aria-expanded','true');
    });
</script>
<?php $this->load->view('footer'); ?>