<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class UserCrud extends Controller
{

    // show users list
    public function list(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }

    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('index', $data);
    }
            
    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect('/uasloket/antrian/public/users-list');
    }
    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_view', $data);
    }
    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect('/uasloket/antrian/public/users-list');
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect('/uasloket/antrian/public/users-list');
    }    
    
    //print
    public function print($id = null)
    {
      $userModel = new UserModel();
      $data['user_obj'] = $userModel->where('id', $id)->first();
      return view('pritn', $data);
    }

    //bagian 22
        // show users list1
        public function list1(){
            $userModel1 = new UserModel();
            $data1['users1'] = $userModel1->orderBy('id', 'DESC')->findAll();
            return view('user_view1', $data1);
        }
        
        // add user form
        public function create1(){
            return view('add_user1');
        }
     
        // insert data
        public function store1() {
            $userModel1 = new UserModel();
            $data1 = [
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
            ];
            $userModel1->insert($data1);
            return $this->response->redirect('/uasloket/antrian/public/users-list1');
        }
        // show single user
        public function singleUser1($id = null){
            $userModel1 = new UserModel();
            $data1['user_obj'] = $userModel1->where('id', $id)->first();
            return view('edit_view1', $data1);
        }
        // update user data
        public function update1(){
            $userModel1 = new UserModel();
            $id1 = $this->request->getVar('id');
            $data1 = [
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
            ];
            $userModel1->update1($id1, $data1);
            return $this->response->redirect('/uasloket/antrian/public/users-list1');
        }
     
        // delete user
        public function delete1($id1 = null){
            $userModel1 = new UserModel();
            $data1['user'] = $userModel1->where('id', $id1)->delete($id1);
            return $this->response->redirect('/uasloket/antrian/public/users-list1');
        }    
        
        //print
        public function print1($id1 = null)
        {
          $userModel1 = new UserModel();
          $data1['user_obj'] = $userModel1->where('id', $id1)->first();
          return view('pritn1', $data1);
        }
}