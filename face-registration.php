<?php include 'component/head.php'; ?>



<body>
    <div class="layout-wrapper">
        <?php include 'component/header.php'; ?>
        <?php include 'component/sidebar.php'; ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-end bg-galaxy-transparent">
                                <!-- <h4 class="mb-sm-0">चेहरा नोंदणी
                                </h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">मास्टर्स</a></li>
                                        <li class="breadcrumb-item active">चेहरा नोंदणी
                                        </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title ">
                            <h2>चेहरा नोंदणी</h2>
                            <p>चेहरा नोंदणीची सूची</p>
                        </div>
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            <span class="mdi mdi-plus"></span>
                            <span class="px-2">चेहरा नोंदणी जोडा</span>
                        </button> -->
                    </div>

                    <div class="d-flex  align-items-center">


                        <div class="card card-animate mx-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0 ">सक्रिय कर्मचारी</p>
                                        <h3 class="mt-2 ff-secondary fw-semibold">930</h3>
                                        <p class="mb-0 text-muted"></p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0 mx-3">
                                            <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                <i class="ri-group-line text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>

                        <div class="card card-animate mx-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0 ">चेहरा नोंदणी झाली</p>
                                        <h3 class="mt-2 ff-secondary fw-semibold">0</h3>
                                        <p class="mb-0 text-muted"></p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0 mx-3">
                                            <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                <i class=" ri-check-line text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0 ">नोंदणी बाकी</p>
                                        <h3 class="mt-2 ff-secondary fw-semibold">930</h3>
                                        <p class="mb-0 text-muted"></p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0 mx-3">
                                            <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                <i class="ri-time-line text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>


                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th>अ.क्र.</th>
                                                <th>नाव</th>
                                                <th>पदनाम</th>
                                                <th>मनुष्यबळ प्रवर्ग</th>
                                                <th>बक्कल क्रमांक</th>
                                                <th>मोबाईल</th>
                                                <th>पोलीस ठाणे</th>
                                                <th class="text-center">स्थिती</th>
                                                <th>चेहरा</th>
                                                <th>कृती</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>संतोष पवार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>4521</td>
                                                <td>9800000401</td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="text-center align-middle"><span class="badge bg-success-subtle text-success">सक्रिय</span></td>
                                                <td>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                    <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn sa-warning">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>संतोष पवार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>4521</td>
                                                <td>9800000401</td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="text-center align-middle"><span class="badge bg-success-subtle text-success">सक्रिय</span></td>
                                                <td>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                    <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn sa-warning">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>संतोष पवार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>4521</td>
                                                <td>9800000401</td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="text-center align-middle"><span class="badge bg-success-subtle text-success">सक्रिय</span></td>
                                                <td>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                    <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn sa-warning">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>संतोष पवार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>पोलीस हवालदार</td>
                                                <td>4521</td>
                                                <td>9800000401</td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="text-center align-middle"><span class="badge bg-success-subtle text-success">सक्रिय</span></td>
                                                <td>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                    <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn sa-warning">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- table ended -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


        <?php include 'component/footer.php'; ?>
    </div>
</body>

</html>
