<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

    public function __construct()
    {
        //Cargo en el constructor para que esten definidas en todas las funciones que defino mas abajo
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Persona');
        $this->load->library('form_validation');
        $this->load->database();
    }

    function index(){
        redirect("/personas/listado");
    }

    public function listado(){
       // echo $this->Persona->count();

        $vdata["personas"] = $this->Persona->findAll();
        $this->load->view('personas/listado',$vdata);

    }

    public function guardar($persona_id = null)
    {
        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellido','Apellido','required');
        $this->form_validation->set_rules('edad','DNI','required');
       // $this->load->view('personas/guardar');

        $vdata["nombre"] =  $vdata["apellido"] = $vdata["edad"]= $vdata["fecha"]= $vdata["provincia"]= $vdata["correo"]= "";
        
        if (isset($persona_id)) {

            $persona = $this->Persona->find($persona_id);

            if (isset($persona)) {
                $vdata["nombre"] = $persona->nombre;
                $vdata["apellido"] = $persona->apellido;
                $vdata["edad"] = $persona->edad;
                $vdata["fecha"] = $persona->fecha;
                $vdata["provincia"] = $persona->provincia;
                $vdata["correo"] = $persona->correo;
            }
        } 

        if($this->input->server("REQUEST_METHOD") == "POST"){
           // echo "POST"; ver metodo que esta enviando
           
           //echo $this->input->post("nombre");
           $data["nombre"] = $this->input->post("nombre");
           $data["apellido"] = $this->input->post("apellido");
           $data["edad"] = $this->input->post("edad");
           $data["fecha"] = $this->input->post("fecha");
           $data["provincia"] = $this->input->post("provincia");
           $data["correo"] = $this->input->post("correo");

           $vdata["nombre"] = $this->input->post("nombre");
           $vdata["apellido"] = $this->input->post("apellido");
           $vdata["edad"] = $this->input->post("edad");
           $vdata["fecha"] = $this->input->post("fecha");
           $vdata["provincia"] = $this->input->post("provincia");
           $vdata["correo"] = $this->input->post("correo");

           //cargamos el modelo, el modelo hace las inserciones
           //if($this->form_validation->run()){ // evita registros sin nombre, apellido o dni
            if($this->form_validation->run()){ // evita registros sin nombre, apellido o dni
            if(isset($persona_id)) {
                $this->Persona->update($persona_id,$data);
            } else
                $this->Persona->insert($data);
            }
        }
        $this->load->view('personas/guardar',$vdata);
        
   // }
    

    }
    public function borrar($persona_id= null){
        $this-> Persona->delete($persona_id);
        
        redirect("/personas/listado");
    }
    
     public function borrar_ajax($persona_id= null) {
       $this-> Persona->delete($persona_id);
        
        echo 1;
    }
}