<?php
namespace App\Models;
class Student extends BaseModel implements InterfaceModel{
    protected $table ="tb_students";
    public function list(){
        $sql = "SELECT * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows([]);
    }
    public function add($data){
        $ho_ten = $data['ho_ten'];
        $ma_sv = $data['ma_sv'];
        $email = $data['email'];
        $so_dien_thoai = $data['so_dien_thoai'];
        $sql = "INSERT INTO `$this->table`(`ho_ten`, `ma_sv`, `email`, `so_dien_thoai`) VALUES (?,?,?,?)";
        $this->setQuery($sql);
        $data =[$ho_ten,$ma_sv,$email,$so_dien_thoai];
        return $this->execute($data);

    }
    public function detail($id){
        $sql = "SELECT * FROM `$this->table` WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);

    }
    public function update1($id,$data){
        $ho_ten = $data['ho_ten'];
        $ma_sv = $data['ma_sv'];
        $email = $data['email'];
        $so_dien_thoai = $data['so_dien_thoai'];
        $sql = "UPDATE `$this->table` SET `ho_ten`=?,`ma_sv`=?,`email`=?,`so_dien_thoai`=? WHERE id=?";
        $this->setQuery($sql);
        $data =[$ho_ten,$ma_sv,$email,$so_dien_thoai,$id];
        return $this->execute($data);
    }
    public function delete($id){
        $sql = "DELETE FROM `$this->table` WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}