<?php
include "includes/db.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- ====================== heading ====================== -->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <!-- ====================== cards ====================== -->
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Appointments</h5>
                    <h6 class="m-b-20">Current Week</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>159</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Doctors</h5>
                    <h6 class="m-b-20">Joined till Date</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>18</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Staffs</h5>
                    <h6 class="m-b-20">Joined this week</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>42</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Patients</h5>
                    <h6 class="m-b-20">Currently Admitted</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card1 f-left"></i><span>98</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== appointments table ====================== -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Appointments</h4>
                </div>
                <div class="card-body">
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
                                    <td>Debam Roy</td>
                                    <td>2023/06/02</td>
                                    <td>12:00</td>
                                    <td>MOJO584356350</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AP12345</td>
                                    <td>MR/2021/12345</td>
                                    <td>Rajarshi Saha</td>
                                    <td>Debam Roy</td>
                                    <td>2023/06/02</td>
                                    <td>12:00</td>
                                    <td>MOJO584356350</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AP12345</td>
                                    <td>MR/2021/12345</td>
                                    <td>Rajarshi Saha</td>
                                    <td>Debam Roy</td>
                                    <td>2023/06/02</td>
                                    <td>12:00</td>
                                    <td>MOJO584356350</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AP12345</td>
                                    <td>MR/2021/12345</td>
                                    <td>Rajarshi Saha</td>
                                    <td>Debam Roy</td>
                                    <td>2023/06/02</td>
                                    <td>12:00</td>
                                    <td>MOJO584356350</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AP12345</td>
                                    <td>MR/2021/12345</td>
                                    <td>Rajarshi Saha</td>
                                    <td>Debam Roy</td>
                                    <td>2023/06/02</td>
                                    <td>12:00</td>
                                    <td>MOJO584356350</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== charts ====================== -->

    <div class="charts row">
        <div class="col d-flex flex-column">
            <h4 class="text-center">Current Ratio</h4>
            <canvas class="chart mt-2" id="myChart" style="max-height:400px;"></canvas>
        </div>
        <div class="col d-flex flex-column">
            <h4 class="text-center">Patients Admission Curve</h4>
            <canvas class="mt-4" id="myChart2" style="max-height:400px;"></canvas>
        </div>
    </div>

    <!-- ====================== doctors list table ====================== -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Doctors</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table display" id="dataTable">
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
                                    <td>Nuerology</td>
                                    <td>9830110244</td>
                                    <td>Male</td>
                                    <td>10.03.2012</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Dr. Saumya Sarkar</td>
                                    <td>Nuerology</td>
                                    <td>9830110244</td>
                                    <td>Male</td>
                                    <td>10.03.2012</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Dr. Saumya Sarkar</td>
                                    <td>Nuerology</td>
                                    <td>9830110244</td>
                                    <td>Male</td>
                                    <td>10.03.2012</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Dr. Saumya Sarkar</td>
                                    <td>Nuerology</td>
                                    <td>9830110244</td>
                                    <td>Male</td>
                                    <td>10.03.2012</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Dr. Saumya Sarkar</td>
                                    <td>Nuerology</td>
                                    <td>9830110244</td>
                                    <td>Male</td>
                                    <td>10.03.2012</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <form action="staffEdit.php" method="POST">
                                                <button type="submit" class="btn btn-success btn-sm"
                                                    style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm deleteStaff"
                                                style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                        <div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== dashboard ends ====================== -->

</main>
<?php
include("includes/footer.php");
?>