<?php include('template/_header.php');?>
<?php $tokenSymbol = "BLV"; ?>

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Doctor's Dashboard</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info" id="divOngoingTransaction" style="display: none">Ongoing Transaction:
                        <span id="linkOngoingTransaction">None</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Column -->
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-info">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">Your Address</h3>
                                    <h5 class="text-muted m-b-0" id="currentUserAddress">0x0000000000000000000000000000000000000000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-success">
                                    <i class="ti-wallet"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="currentRole1"></h3>
<!--                                     <h5 class="text-muted m-b-0">Ether Balance</h5>
 -->                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-success">
                                    <i class="ti-wallet"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="accountBalance">0 ETH</h3>
                                    <h5 class="text-muted m-b-0">Ether Balance</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            <!-- ============================================================== -->
            <!-- Yearly Sales -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-info">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="currentDoctorName"></h3>
                                    <h5 class="text-muted m-b-0">Fullname</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-info">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="currentDoctorEmail"></h3>
                                    <h5 class="text-muted m-b-0">Email Address</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-info">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="currentDoctorContact"></h3>
                                    <h5 class="text-muted m-b-0">Contact Number</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-lg round-info">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0" id="currentDoctorAddress"></h3>
                                    <h5 class="text-muted m-b-0">Recidence Address</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>









                                        <div class="col-lg-12">

                                           <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Patients List</h4>
                                            <div class="table-responsive ">
                                                <table id="myTable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Patient ID</th>
                                                            <th>Fullname</th>
                                                            <th>Email Address</th>
                                                            <th>Contact Number</th>
                                                            <th>Recidence Address</th>                                                      
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                               
                                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('template/_footer.php');?>


