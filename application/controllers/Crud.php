<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
    public function home()
	{   $this->load->model('Crud_model');
        $fetch = $this->Crud_model->fetchUsers();
        // print_r($data);
        $data['data'] = $fetch;
        // exit;
		$this->load->view('home',$data);
	}
    public function add()
	{   
        
		$this->load->view('add');
	}
    public function fileUpload()
	{   $this->load->model('Crud_model');
        $getNewsData = $this->Crud_model->getNewsData();
        $data['getNewsData'] = $getNewsData;
		$this->load->view('file_upload',$data);
	}
    public function saveUpload(){
        // print_r($_POST);exit;
        if(isset($_POST['category']) && ($_POST['category'] != 0 ||$_POST['category'] != "0")){
            $filename = $_FILES['file_upload']["name"];
            $target_dir = "assets/".$filename;
            try{
                move_uploaded_file($_FILES['file_upload']["tmp_name"],$target_dir);
                $id = $_POST['category'];
                $data = array(
                    'image_url' =>$filename
                );
                $this->load->model('Crud_model');
                $fetch = $this->Crud_model->saveUpload($id,$data);
            }
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
        }
        else{
            return redirect(base_url('index.php/file-upload'));exit;
        }
        return redirect(base_url('index.php/file-upload'));exit;
       
    }
    public function save()
	{   
        
        if($_GET['name'] != ""){
            $this->load->model('Crud_model');
            $this->Crud_model->add($_GET);
            return redirect(base_url('index.php/home'));exit;
        }
        else{
            return redirect(base_url('index.php/add'));exit;
        }

	}
    public function edit(){
        
        $id = $this->uri->segment(2);
        $this->load->model('Crud_model');
        $fetch = $this->Crud_model->editUser($id);
        
        $data['fetch']=$fetch;
        $this->load->view('edit',$data);
    }
    public function update(){
        
        $data=array(
            
            'c_name'                => $_POST['name'],
            'c_age'                 => $_POST['age'],
            'c_address'             => $_POST['address'],
            'c_mobile'              => $_POST['mobile'],
        );
        $this->load->model('Crud_model');
        $fetch = $this->Crud_model->updateUser($data,$_POST['userId']);
        return redirect(base_url('index.php/home'));exit;
        
    }
    public function delete(){
        $id = $this->uri->segment(2);
        $this->load->model('Crud_model');
        $this->Crud_model->deleteUser($id);
        return redirect(base_url('index.php/home'));exit;
    }
}
