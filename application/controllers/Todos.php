<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todos extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model("todos_model");
        $this->load->library('form_validation');
    }
	
	public function index() {
		$data["todos"] = $this->todos_model->getAll();
		$this->load->view('todos/list', $data);
	}

	public function add() {
        $todos = $this->todos_model;
        $validation = $this->form_validation;
        $validation->set_rules($todos->rules());

        if ($validation->run()) {
            $todos->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('todos');
        }
		$this->load->view("todos/create");

    }

    public function edit($id = null) {
        //if (!isset($id)) redirect('todos');
       
        $todos = $this->todos_model;
        $validation = $this->form_validation;
        $validation->set_rules($todos->rules());

        if ($validation->run()) {
            $todos->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('todos');
        }

        $data["todo"] = $todos->getById($id);
        if (!$data["todo"]) show_404();
        
        $this->load->view("todos/edit", $data);
    }

    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->todos_model->delete($id)) {
            redirect('todos');
        }
    }

}
