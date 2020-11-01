<?php $this->load->view('header'); ?>
<?php $this->load->view('nav'); ?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        
        <div class="page-header">
            <div class="page-title">
                <h3>Genero</h3>
            </div>
        </div>

        <div class="row" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="toolbar">
                        <div align="right">
                            <!-- Fade in up modal -->
                            <button type="button" class="btn btn-primary mb-2 mr-2" title="Nuevo Género" data-toggle="modal" data-target="#ModalRegistro" app_reg_metalikas="<?= site_url('Corporacion/Modal_Genero') ?>" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                Registrar
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th class="no-content"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($list_genero as $list) {  ?>   
                                <tr>
                                    <td><?php echo $list['cod_genero']; ?></td>
                                    <td><?php echo $list['nom_genero']; ?></td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);"  title="Editar" data-toggle="modal" data-target="#ModalUpdate" app_elim="<?= site_url('Corporacion/Modal_Update_Genero') ?>/<?php echo $list["id_genero"]; ?>" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="" title="Eliminar" onclick="Delete_Genero('<?php echo $list['id_genero']; ?>')" id="delete" role="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!------------------------------CARGA DE ARCHIVOS ------------------------------------------------------>



<script>
    $(document).ready(function() {
    $("#genero").addClass('active');
    $("#hgenero").attr('aria-expanded','true');
    });
</script>
<?php $this->load->view('validaciones'); ?>
<?php $this->load->view('footer'); ?>