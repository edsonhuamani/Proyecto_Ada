<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporacion extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Corporacion');
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->library('excel');
        $this->load->library('form_validation');
    }

    protected function jsonResponse($respuesta = array()) {
        $status = 200; // SUCCESS
        if (empty($respuesta)) {
            //$status = 400; // FAILURE
            $respuesta = array(
            'success' => false,
            'mensaje' => 'No hay nada'
            );
        }
        return $this->output
        ->set_content_type('application/json;charset=utf-8')
        ->set_status_header($status)
        ->set_output(json_encode($respuesta, JSON_UNESCAPED_UNICODE));
    }

    public function index()// RRHH
    {
        $this->load->view('index');
    }
//--------------------------------------------------------------------------------------------
//------------------------------- CRUD DE GENERO ---------------------------------------------
//--------------------------------------------------------------------------------------------
public function Genero()// RRHH
    {
        $dato['list_genero'] = $this->Model_Corporacion->get_list_genero();
        $this->load->view('Admin/Configuracion/Genero/index',$dato);
    }

    public function Modal_Genero(){
        //if ($this->session->userdata('usuario')) {
            $this->load->view('Admin/Configuracion/Genero/modal_registrar');   
        /*}
        else{
            //$this->load->view('login/login');
            redirect('/');
        }*/
    }

    public function Insert_Genero(){
        //if ($this->session->userdata('usuario')) {
            $dato['cod_genero']= $this->input->post("cod_genero"); 
            $dato['nom_genero']= $this->input->post("nom_genero");
            $total=count($this->Model_Corporacion->valida_genero($dato));
            if ($total>0)
            {
                echo "error";
            }
            else{
                $this->Model_Corporacion->insert_genero($dato);
            }
            
        /*}
        else{
            redirect('/login');
        }*/
    }

    public function Modal_Update_Genero($id_genero){
        //if ($this->session->userdata('usuario')) {
            $dato['get_id'] = $this->Model_Corporacion->get_id_genero($id_genero);
            $this->load->view('Admin/Configuracion/Genero/modal_editar',$dato);
        /*}
        else{
            //$this->load->view('login/login');
            redirect('/');
        }*/
    }

    public function Update_Genero(){
        //if ($this->session->userdata('usuario')) {
            $dato['id_genero']= $this->input->post("id_genero");
            $dato['cod_genero']= $this->input->post("cod_genero");
            $dato['nom_genero']= $this->input->post("nom_genero");
            /*$total=count($this->Model_Corporacion->valida_genero($dato));
            if ($total>0)
            {
                echo "error";
            }
            else{*/
            $this->Model_Corporacion->update_genero($dato);
            //}
            
        /*}
        else{
            redirect('/login');
        }*/
    }
    public function Delete_Genero(){
        //if ($this->session->userdata('usuario')) {
            $dato['id_genero']= $this->input->post("id_genero");
            /*$total=count($this->Model_Corporacion->valida_genero($dato));
            if ($total>0)
            {
                echo "error";
            }
            else{*/
            $this->Model_Corporacion->delete_genero($dato);
            //}
            
        /*}
        else{
            redirect('/login');
        }*/
    }
//--------------------------------------------------------------------------------------------
//------------------------ PRUEBA DE CARGA DE ARCHIVO ----------------------------------------
//--------------------------------------------------------------------------------------------
public function Cargar_Archivo()// RRHH
{
    $dato['list_genero'] = $this->Model_Corporacion->get_list_genero();
    $this->load->view('Admin/Configuracion/Genero/index',$dato);
}

public function Modal_Cargar_Archivo(){
    //if ($this->session->userdata('usuario')) {
        $this->load->view('Admin/Configuracion/Genero/modal_registrar');   
    /*}
    else{
        //$this->load->view('login/login');
        redirect('/');
    }*/
}

public function Insert_Cargar_Archivo(){
    //if ($this->session->userdata('usuario')) {
        $dato['cod_genero']= $this->input->post("cod_genero"); 
        $dato['nom_genero']= $this->input->post("nom_genero");
        $total=count($this->Model_Corporacion->valida_genero($dato));
        if ($total>0)
        {
            echo "error";
        }
        else{
            $this->Model_Corporacion->insert_genero($dato);
        }
        
    /*}
    else{
        redirect('/login');
    }*/
}

public function Modal_Update_Cargar_Archivo($id_genero){
    //if ($this->session->userdata('usuario')) {
        $dato['get_id'] = $this->Model_Corporacion->get_id_genero($id_genero);
        $this->load->view('Admin/Configuracion/Genero/modal_editar',$dato);
    /*}
    else{
        //$this->load->view('login/login');
        redirect('/');
    }*/
}

public function Update_Cargar_Archivo(){
    //if ($this->session->userdata('usuario')) {
        $dato['id_genero']= $this->input->post("id_genero");
        $dato['cod_genero']= $this->input->post("cod_genero");
        $dato['nom_genero']= $this->input->post("nom_genero");
        /*$total=count($this->Model_Corporacion->valida_genero($dato));
        if ($total>0)
        {
            echo "error";
        }
        else{*/
        $this->Model_Corporacion->update_genero($dato);
        //}
        
    /*}
    else{
        redirect('/login');
    }*/
}
public function Delete_Cargar_Archivo(){
    //if ($this->session->userdata('usuario')) {
        $dato['id_genero']= $this->input->post("id_genero");
        /*$total=count($this->Model_Corporacion->valida_genero($dato));
        if ($total>0)
        {
            echo "error";
        }
        else{*/
        $this->Model_Corporacion->delete_genero($dato);
        //}
        
    /*}
    else{
        redirect('/login');
    }*/
}
//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------


}