<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>


    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">QUẢN LÝ</h3>
        <a href="<?= DOMAIN.'app/views/patient/add.php'?> "class='btn btn-success'> Thêm mới</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số lượng</th>
      <th scope="col" colspan="3" class="text-center">Hành động</th>

    </tr>
  </thead>
  <tbody>
    <?php
        foreach($employees as $employee){
    ?>
        <tr>
        <th scope="row"><?= $employee->getID(); ?></th>
        <td><?= $employee->getFullname(); ?></td>
        <td><?= $employee->getAddress(); ?></td>
        <td><?= $employee->getSalary(); ?></td>
        <td>
            <a href="<?=DOMAIN.'app/views/employee/detail.php?id='.$employee->getId()?>"><i class="bi bi-eye-fill"></i></a>
        </td>
        <td>
            <a href="<?= DOMAIN.'app/views/employees/edit.php?id='.$employee->getId() ?>"><i class="bi bi-pencil-square"></i></a>
        </td>
        <td>
            <a href="<?= DOMAIN.'app/views/employees/remove.php?id='.$employee->getId() ?>"><i class="bi bi-trash3-fill"></i></a>
        </td>
        </tr>
    <?php
        }
    ?>
    
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>