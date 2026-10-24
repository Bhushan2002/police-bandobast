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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">पोलीस ठाणेनिहाय अहवाल</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">पोलीस ठाणेनिहाय अहवाल </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-2">
                        <div class="page-title ">
                            <h2>पोलीस ठाणेनिहाय अहवाल</h2>
                            <p>प्रत्येक पोलीस ठाणेचा सारांश — तपशीलवार अहवालासाठी पोलीस ठाणेवर क्लिक करा</p>

                        </div>
                        <div class=" d-flex ">
                            <button type="button" class="btn btn-soft-secondary waves-effect material-shadow-none"> <span class="ri-file-excel-line"></span>
                                <span class="px-2">Excel (csv)</span></button>

                            <button type="button" class="btn btn-secondary waves-effect waves-light d-flex align-items-center mx-1" data-bs-toggle="modal">
                                <span class="ri-file-pdf-line"></span>
                                <span class="px-2">PDF</span>
                            </button>
                        </div>

                    </div>


                    <!-- summary cards -->

                    <div class="d-flex mx-1 align-items-center">
                        <div class="card card-animate  flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-map-pin-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">पोलीस ठाणी</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">6</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class="ri-group-line text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">मागणी</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">570</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-check-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">स्वीकृत</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">536</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-smartphone-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नियुक्त</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">18</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-check-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">उपस्थिती</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">18%</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>


                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th class="col-2">पोलीस ठाणे</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>यादीतील नावे</th>
                                                    <th>प्रतिसाद पू/अं/ना/प्र</th>
                                                    <th>नियुक्त</th>
                                                    <th>ड्युटी-दिवस</th>
                                                    <th>उपस्थित</th>
                                                    <th>गैरहजर</th>
                                                    <th>नोटीस</th>
                                                    <th>%</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>सातारा शहर पोलीस ठाणे </td>
                                                    <td>229</td>
                                                    <td>
                                                        229
                                                    </td>
                                                    <td>216</td>
                                                    <td> 2/0/0/0</td>
                                                    <td>8</td>
                                                    <td>36</td>
                                                    <td>7</td>
                                                    <td>29</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2" style="min-width: 140px;">
                                                            <div class="progress flex-grow-1">
                                                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="fs-12 fw-medium">40%</span>
                                                           
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>सातारा शहर पोलीस ठाणे </td>
                                                    <td>229</td>
                                                    <td>
                                                        229
                                                    </td>
                                                    <td>216</td>
                                                    <td> 2/0/0/0</td>
                                                    <td>8</td>
                                                    <td>36</td>
                                                    <td>7</td>
                                                    <td>29</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2" style="min-width: 140px;">
                                                            <div class="progress flex-grow-1">
                                                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="fs-12 fw-medium">20%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>सातारा शहर पोलीस ठाणे </td>
                                                    <td>229</td>
                                                    <td>
                                                        229
                                                    </td>
                                                    <td>216</td>
                                                    <td> 2/0/0/0</td>
                                                    <td>8</td>
                                                    <td>36</td>
                                                    <td>7</td>
                                                    <td>29</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2" style="min-width: 140px;">
                                                            <div class="progress flex-grow-1">
                                                                <div class="progress-bar" role="progressbar" style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                           <span class="fs-12 fw-medium">19%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>सातारा शहर पोलीस ठाणे </td>
                                                    <td>229</td>
                                                    <td>
                                                        229
                                                    </td>
                                                    <td>216</td>
                                                    <td> 2/0/0/0</td>
                                                    <td>8</td>
                                                    <td>36</td>
                                                    <td>7</td>
                                                    <td>29</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2" style="min-width: 140px;">
                                                            <div class="progress flex-grow-1">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                           <span class="fs-12 fw-medium">60%</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->

    <!-- Filter modal -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">फिल्टर</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="javascript:void(0);">
                    <div class="modal-body">
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label class="form-label">तारखेची श्रेणी</label>
                                <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly">
                            </div><!--end col-->
                            <div class="col-md-6">
                                <label class="form-label">पोलीस ठाणे</label>
                                <div class="input-group">
                                    <select class="form-select">
                                        <option value="">सर्व</option>
                                        <option>सातारा शहर पोलीस ठाणे</option>
                                        <option>शाहूपुरी पोलीस ठाणे</option>
                                        <option>सातारा तालुका पोलीस ठाणे</option>
                                        <option>कराड शहर पोलीस ठाणे</option>
                                        <option>कराड तालुका पोलीस ठाणे</option>
                                        <option>फलटण शहर पोलीस ठाणे</option>
                                        <option>वाई पोलीस ठाणे</option>
                                        <option>महाबळेश्वर पोलीस ठाणे</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <label class="form-label">बंदोबस्त प्रकार</label>
                                <select class="form-select">

                                    <option value="">सर्व</option>
                                    <option value="bt1">उत्सव</option>
                                    <option value="bt2">व्हीआयपी दौरा</option>
                                    <option value="bt3">निवडणूक</option>
                                    <option value="bt4">मोर्चा / रॅली</option>
                                    <option value="bt5">क्रीडा कार्यक्रम</option>
                                    <option value="bt6">धार्मिक मिरवणूक / यात्रा</option>

                                </select>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <label class="form-label">बंदोबस्त स्थिती</label>
                                <select class="form-select">
                                    <option value="">सर्व</option>
                                    <option value="Approved" selected="">मंजूर</option>
                                    <option value="Pending">प्रलंबित</option>
                                    <option value="Rejected">नामंजूर</option>
                                </select>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light">रीसेट</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">लागू करा</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'component/footer.php'; ?>
    </div>

    <!-- Flatpickr (date / range picker) -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script>
        document.querySelectorAll('[data-provider="flatpickr"]').forEach(function(el) {
            flatpickr(el, {
                dateFormat: el.dataset.dateFormat || 'd M, Y',
                mode: el.dataset.rangeDate === 'true' ? 'range' : 'single',
                disableMobile: true,
                // render calendar inside the modal so its focus trap doesn't block the calendar
                static: !!el.closest('.modal')
            });
        });
    </script>
</body>

</html>