<?php 
namespace App\Models;
interface InterfaceModel{
    public function list();
    public function add($data);
    public function detail($id);
    public function update1($id,$data);
    public function delete($id);
}
?>