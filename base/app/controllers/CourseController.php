<?php
namespace App\Controllers;
use App\Models\Course;
// include_once 'app/models/Course.php';
// include_once 'app/controllers/BaseController.php';

class CourseController extends BaseController{
    public $course;

    public function __construct()
    {
        $this->course = new Course;
    }
    public function getCourse() {
        $courses = $this->course->getListCourse();
        return $this->render('course.index',compact('courses'));
    }
    public function addCourse(){
        return $this->render('course.add');
    }
    public function postCourse(){
        $course_name = $_POST['course_name'];
        $price = $_POST['price'];
        $teacher_name = $_POST['teacher_name'];
        $description = $_POST['description'];

        $addCourse = new Course;
        $addCourse->insertCourse($course_name,$price,$teacher_name,$description);

        header("location:http://localhost/exam_01/base/list-course");

    }
    public function deleteCourse(){
        $id = $_GET['id'];
        $delete = new Course;
        $delete->delCourse($id);
        header("location:http://localhost/exam_01/base/list-course");
    }
    public function ViewUpdateCourse(){
        $id = $_GET['id'];
        $updateCourse = new Course;
        $data = $updateCourse->getById($id);
        return $this->render('course.update',compact('data'));
    }
    public function updateCourse(){
        $id = $_POST['id'];
        $course_name = $_POST['course_name'];
        $price = $_POST['price'];
        $teacher_name = $_POST['teacher_name'];
        $description = $_POST['description'];

        $addCourse = new Course;
        $addCourse->upCourse( $id,$course_name,$price,$teacher_name,$description);

        header("location:http://localhost/exam_01/base/list-course");
    }
}
