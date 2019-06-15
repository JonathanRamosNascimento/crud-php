<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
{

    public function index()
    {
        $this->load->model("produtos_model");
        $lista = $this->produtos_model->buscaTodos();
        $dados = array("produtos" => $lista);
        $this->load->view('produtos/index', $dados);
    }

    public function formulario(){
        $this->load->view('produtos/formulario');
    }

    public function novo(){
        $usuarioId = $this->session->userdata("usuario_logado");
        $produto = array(
            "nome" => $this->input->post("nome"),
            "preco" => $this->input->post("preco"),
            "descricao" => $this->input->post("descricao"),
            "usuario_id" => $usuarioId['id']
        );
        $this->load->model("produtos_model");
        $this->produtos_model->salva($produto);
        $this->session->set_flashdata("success", "Produto cadastrado com sucesso!");
        redirect('/');
    }
}
