<?php
include "includes/db.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctor</h1>
        <button type="button" class="btn btn-sm btn-dark d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#staffAddModal"><span data-feather="user-plus"></span>&nbsp;<span>Add Doctor</span></button>
    </div>

    <div class="table-responsive">
        <table class="table display" id="dataTable1">
            <thead>
                <th>#</th>
                <th>Doctor Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>DOJ</th>
                <th>Operations</th>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Dr. Saumya Sarkar</td>
                    <td>Neurology</td>
                    <td>9830110244</td>
                    <td>Male</td>
                    <td>10.03.2012</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="staffEdit.php" method="POST">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                            <div>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Dr. Debam Roy</td>
                    <td>Cardiology</td>
                    <td>9354673447</td>
                    <td>Male</td>
                    <td>20.11.2018</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="staffEdit.php" method="POST">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                            <div>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Dr. Rammohan Guha</td>
                    <td>General Physician</td>
                    <td>8730583647</td>
                    <td>Male</td>
                    <td>06.09.2009</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="staffEdit.php" method="POST">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                            <div>
                    </td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Dr. Nantu Saha</td>
                    <td>Orthopaedics</td>
                    <td>7364598201</td>
                    <td>Male</td>
                    <td>14.10.2020</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="staffEdit.php" method="POST">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                            <div>
                    </td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Dr. Anindita Karmakar</td>
                    <td>Radiology</td>
                    <td>6384592057</td>
                    <td>Female</td>
                    <td>12.02.2019</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="staffEdit.php" method="POST">
                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                            <div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</main>
<?php
include("includes/footer.php");
?>