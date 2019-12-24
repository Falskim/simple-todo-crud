<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Todos_model extends CI_Model {
    public $id;
    public $activity;
    public $priority;
    public $finished;
    public $deadline;
    public $description;

    public function rules() {
        return [
            ['field' => 'activity',
            'label' => 'Activity',
            'rules' => 'required'],
            ['field' => 'priority'],

            ['field' => 'finished',
            'label' => 'Finished',
            'rules' => 'numeric']
        ];
    }

    public function getAll() {
        return $this->db->get('todos')->result();
    }

    public function getById($id) {
        return $this->db->get_where('todos', ['id' => $id])->row();
    }

    public function save() {
        $post = $this->input->post();
        $this->id = "";
        $this->activity = $post["activity"];
        $this->priority = $post["priority"];
        $this->deadline = $post["deadline"];
        $this->description = $post["description"];
        $this->db->insert('todos', $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->activity = $post["activity"];
        $this->priority = $post["priority"];
        $this->finished = $post["finished"];
        $this->deadline = $post["deadline"];
        $this->description = $post["description"];
        $this->db->update('todos', $this, array('id' => $post['id']));
    }

    public function delete($id) {
        return $this->db->delete('todos', array("id" => $id));
    }

}