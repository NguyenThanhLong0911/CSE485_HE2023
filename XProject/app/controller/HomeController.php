<?php
require_once APP_ROOT.'/app/services/EmployeeService.php';
class HomeController{
    public function index(){
        //goi du lieu tu PatientService
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployees();



        //render du lieu lay duoc tu HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}