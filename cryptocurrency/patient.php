<?php include('template/_header.php');?>

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
                <h4 class="text-themecolor">Patient's Dashboard</h4>
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
                                <h3 class="m-b-0" id="currentRole"></h3>
                            </div>
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

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-lg round-info">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0" id="currentPatientName"></h3>
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
                                <h3 class="m-b-0" id="currentPatientEmail"></h3>
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
                                <h3 class="m-b-0" id="currentPatientContact"></h3>
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
                                <h3 class="m-b-0" id="currentPatientAddress"></h3>
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
                    <h4 class="card-title"> Share Profile with Doctor</h4>

                    <form class="form p-t-20" id="tokenSendFrm" onsubmit="return false;">

                        <div class="form-group">
                            <label for="exampleInputuname">Doctor Address</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ti-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Doctors Address" aria-label="Username" aria-describedby="basic-addon1"
                                id="doctor_address" value="">
                            </div>
                        </div>
                        <button type="button" onclick="submitProfile()" id="btnSubmitProfile" class="btn btn-success waves-effect waves-light m-r-10">Send</button>                                                   
                    </form>
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


