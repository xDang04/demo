<?php
namespace App\Models;

// require_once 'app/models/BaseModel.php';
class Course extends BaseModel{
    function getListCourse() {
        $sql = "select * from course";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertCourse($course_name,$price,$teacher_name,$description){
        $sql = "INSERT INTO course (course_name,price,teacher_name,description) 
        VALUES('$course_name','$price','$teacher_name','$description')";
        $this->setQuery($sql);
        $this->execute();
    }
    public function delCourse($id){
        $sql = "DELETE FROM course WHERE id = '$id' ";
        $this->setQuery($sql);
        $this->execute();
    }
    public function getById($id){
        $sql = "SELECT * FROM course WHERE id = '$id' ";
        $this->setQuery($sql);
        $data = $this->loadRow();
        return $data;
    }
    public function upCourse($id,$course_name,$price,$teacher_name,$description){
        $sql = "UPDATE course SET course_name = '$course_name',price = '$price',teacher_name = '$teacher_name',description = '$description' 
        WHERE id = '$id' ";
        $this->setQuery($sql);
        $this->execute();
    }
}

?>