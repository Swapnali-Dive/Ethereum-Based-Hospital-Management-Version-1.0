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
                <h4 class="text-themecolor">Register New Users</h4>
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
            <div class="col-lg-6 col-md-6">
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

            <!-- Add New Doctor -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Doctor</h4>
                        <!-- <h6 class="card-subtitle">using your token balance</h6> -->
                        <form class="form p-t-20" id="generateCouponFrm" onsubmit="return false;">
                            <div class="form-group">
                                <label for="exampleInputuname">Fullname</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-ticket"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Doctors Name" aria-label="Coupon Title" aria-describedby="basic-addon1" id="d_name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname">Email Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-ge"></i>
                                        </span>
                                    </div>
                                    <input type="text" min="100" class="form-control" placeholder="Doctors Email Address" aria-label="Coupon Cost" aria-describedby="basic-addon1"
                                    id="d_email" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname">Contact Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-ticket"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Doctors Contact Number" aria-label="Coupon Title" aria-describedby="basic-addon1" id="d_contact" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputuname">Recidence Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-ge"></i>
                                        </span>
                                    </div>
                                    <input type="text" min="100" class="form-control" placeholder="Doctors Recidence Address" aria-label="Coupon Cost" aria-describedby="basic-addon1"
                                    id="d_address" value="">
                                </div>
                            </div>

                            <button type="button" onclick="submitDoctor()" id="btnGenerateCoupon" class="btn btn-success waves-effect waves-light m-r-10">Send</button>
                            <button type="button" disabled="" class="btn btn-warning" id="btnTransferPurchase" style="display: none">
                                Transfer Not Available
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Add New Patient -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Patient</h4>
                        <!-- <h6 class="card-subtitle">using your token balance</h6> -->
                        <form class="form p-t-20" id="patientFrm" onsubmit="return false;">
                           <div class="form-group">
                            <label for="exampleInputuname">Fullname</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ti-ticket"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Patients Name" aria-label="Coupon Title" aria-describedby="basic-addon1"
                                id="p_name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname">Email Address</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-ge"></i>
                                    </span>
                                </div>
                                <input type="text" min="100" class="form-control" placeholder="Patients Email Address" aria-label="Coupon Cost" aria-describedby="basic-addon1"
                                id="p_email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname">Contact Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ti-ticket"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Patients Contact Number" aria-label="Coupon Title" aria-describedby="basic-addon1"
                                id="p_contact" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputuname">Recidence Address</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-ge"></i>
                                    </span>
                                </div>
                                <input type="text" min="100" class="form-control" placeholder="Patients Recidence Address" aria-label="Coupon Cost" aria-describedby="basic-addon1"
                                id="p_address" value="">
                            </div>
                        </div>

                        <button type="button" onclick="submitPatient()" id="btnSetPatient" class="btn btn-success waves-effect waves-light m-r-10">Send</button>
                        <button type="button" disabled="" class="btn btn-warning" id="btnTransferPurchase" style="display: none">
                            Transfer Not Available
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include('template/_footer.php');?>


