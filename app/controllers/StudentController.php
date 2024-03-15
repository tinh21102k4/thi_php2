<?php
namespace App\Controllers;

use App\Models\Student;

class StudentController extends BaseController implements InterfaceController{
    protected $student;
    public function __construct(){
        $this->student = new Student();
    }
    public function index(){
        $students = $this->student->list();
        return $this->render('student.index', compact('students'));
    }
    public function create(){
        return $this->render('student.add');
    }
    public function store(){
        $data = [
            'ho_ten' => $_POST['ho_ten'],
            'ma_sv' => $_POST['ma_sv'],
            'email' => $_POST['email'],
            'so_dien_thoai' => $_POST['so_dien_thoai']
        ];
        $errors =[];
        if($data['ho_ten']==""){
            $errors[] = "vui long nhap ho ten ";
        }
        if($data['ma_sv']==""){
            $errors[] = "vui long nhap ma sinh vien ";
        }
        if($data['email']==""){
            $errors[] = "vui long nhap email ";
        }else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $errors[] = "vui long nhap dung dinh dang email ";
        }
        if($data['so_dien_thoai']==""){
            $errors[] = "vui long nhap so dien thoai";
        }
        if(count($errors)>0){
            redirect('errors' , $errors, 'add');
        }else{
            $this->student->add($data);
            redirect('success', 'them thanh cong' ,'add' );
        }
    }
    public function update($id){
        $data = [
            'ho_ten' => $_POST['ho_ten'],
            'ma_sv' => $_POST['ma_sv'],
            'email' => $_POST['email'],
            'so_dien_thoai' => $_POST['so_dien_thoai']
        ];
        $errors =[];
        if($data['ho_ten']==""){
            $errors[] = "vui long nhap ho ten ";
        }
        if($data['ma_sv']==""){
            $errors[] = "vui long nhap ma sinh vien ";
        }
        if($data['email']==""){
            $errors[] = "vui long nhap email ";
        }else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $errors[] = "vui long nhap dung dinh dang email ";
        }
        if($data['so_dien_thoai']==""){
            $errors[] = "vui long nhap so dien thoai";
        }
        if(count($errors)>0){
            redirect('errors' , $errors, 'update/'.$id);
        }else{
            $this->student->update1($id,$data);
            redirect('success', 'them thanh cong' );
        }

    }
    public function edit($id){
        $student = $this->student->detail($id);
        return $this->render('student.edit', compact('student'));
    }
    public function destroy($id){
        $del = $this->student->delete($id);
        $del ? redirect('success', 'xoa thanh cong'):redirect('errors', 'xoa khong thanh cong');
    }
}
