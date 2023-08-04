<?php
require_once APP_ROOT.'/app/models/Employee.php';
class EmployeeService{
    public function getAllEmployees(){
        //Ket noi DB
        try{
            $conn = new PDO('mysql:host=localhost; dbname=xproject', 'root','');

            //Truy van du lieu
            $sql = "SELECT *FROM employees ";
            $stmt = $conn->query($sql);

            //Xu ly ket qua tra ve

            $employees =[];
            while($row = $stmt->fetch()){
                $employee = new Employee($row['id'], $row['fullname'], $row['address'], $row['salary']);
                $employees[] = $employee;
            }
            return $employees;

        }
        catch(PDOException $e){
            //$conn = null;
            return $employees = [];
        }
    }
}