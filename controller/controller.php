<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllUsers();
            require_once('view/index.php');
        }

        function details(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            if($data)
                header("location:index.php");
                else
                header("error.php");
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtName'])){
                $name = $_POST['txtName'];
                $TC = $_POST['txtTC'];
                $TLT = $_POST['txtTLT'];
                $TBT = $_POST['txtTBT'];
                $TTHTN = $_POST['txtTTHTN'];
                $GTH = $_POST['txtGTH'];
                $model = new model;
                $result = $model->addUsers($name, $TC, $TLT, $TBT, $TTHTN, $GTH);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtName'])){
                $name = $_POST['txtName'];
                $TC = $_POST['txtTC'];
                $TLT = $_POST['txtTLT'];
                $TBT = $_POST['txtTBT'];
                $TTHTN = $_POST['txtTTHTN'];
                $GTH = $_POST['txtGTH'];
                $result = $model->updateUser($id, $name, $TC, $TLT, $TBT, $TTHTN, $GTH);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteUser($mamh);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>