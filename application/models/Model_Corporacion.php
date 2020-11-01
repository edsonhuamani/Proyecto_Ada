<?php
class Model_Corporacion extends CI_Model {
    public function __construct() {
        parent::__construct();
        date_default_timezone_set("America/Lima");
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    function get_list_genero(){
        $sql = "SELECT * FROM genero WHERE estado='1' ";
        $query = $this->db->query($sql)->result_Array();
        return $query;
    }

    function valida_genero($dato){
        //$id_usuario= $_SESSION['usuario'][0]['id_usuario'];

        $sql = "select * from genero where cod_genero='".$dato['cod_genero']."' and 
                nom_genero='".$dato['nom_genero']."' and estado=1";
        $query = $this->db->query($sql)->result_Array();
        return $query;
    }

    function insert_genero($dato){
        //$id_usuario= $_SESSION['usuario'][0]['id_usuario'];
        $id_usuario= 1;
        $sql = "insert into genero (cod_genero, nom_genero, fec_reg, user_reg, estado) 
                values ('".$dato['cod_genero']."','".$dato['nom_genero']."', GETDATE(),".$id_usuario.", '1')";
        $this->db->query($sql);
    }

    function get_id_genero($id_genero){
        $sql = "SELECT * FROM genero WHERE id_genero=$id_genero";
        $query = $this->db->query($sql)->result_Array();
        return $query;
    }

    function update_genero($dato){
        //$id_usuario= $_SESSION['usuario'][0]['id_usuario'];
        $id_usuario= 1;
        $sql = "update genero set cod_genero='".$dato['cod_genero']."', nom_genero='".$dato['nom_genero']."', 
                fec_act=GETDATE(), user_act=".$id_usuario." where id_genero=".$dato['id_genero']."";
        $this->db->query($sql);
    }

    function delete_genero($dato){
        //$id_usuario= $_SESSION['usuario'][0]['id_usuario'];
        $id_usuario= 1;

        $sql="update genero set estado=2, fec_eli=GETDATE(), user_eli=".$id_usuario." where id_genero = ".$dato['id_genero']."";
        $this->db->query($sql);
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
    
}
