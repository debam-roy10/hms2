<?php
include "includes/db.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointments</h1>
        <button type="button" class="btn btn-sm btn-dark d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#staffAddModal"><span data-feather="user-plus"></span>&nbsp;<span>Add Appointments</span></button>
    </div>

    <div class="table-responsive">
        <table class="table display" id="dataTable">
            <thead>
                <th>Appt ID</th>
                <th>Patient ID</th>
                <th>Patient Name*</th>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Payment ID</th>
                <th>Operations</th>
            </thead>
            <tbody>
                <tr>
                    <td>AP12345</td>
                    <td>MR/2021/12345</td>
                    <td>Rajarshi Saha</td>
                    <td>Dr. Debam Roy</td>
                    <td>2023/06/02</td>
                    <td>12:00</td>
                    <td>MOJO584356350</td>
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
                    <td>AP64753</td>
                    <td>MR/2021/64573</td>
                    <td>Santanu Nag</td>
                    <td>Dr. Saumya Sarkar</td>
                    <td>2023/06/04</td>
                    <td>17:15</td>
                    <td>MOJO987636350</td>
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
                    <td>AP85546</td>
                    <td>MR/2021/43645</td>
                    <td>Subhadeep Bal</td>
                    <td>Dr. Rammohan Guha</td>
                    <td>2023/06/04</td>
                    <td>16:30</td>
                    <td>MOJO746539756</td>
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
                    <td>AP64583</td>
                    <td>MR/2021/38574</td>
                    <td>Arunabha Saha</td>
                    <td>Dr. Saumya Sarkar</td>
                    <td>2023/06/03</td>
                    <td>14:45</td>
                    <td>MOJO546375924</td>
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
                    <td>AP53745</td>
                    <td>MR/2021/87645</td>
                    <td>Souradip Dey</td>
                    <td>Dr. Debam Roy</td>
                    <td>2023/06/05</td>
                    <td>12:15</td>
                    <td>MOJO746532875</td>
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