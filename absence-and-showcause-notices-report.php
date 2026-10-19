<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&display=swap" rel="stylesheet">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<style>
    body {
        font-family: 'Eczar', sans-serif;
        line-height: 1.7;
        /* Devanagari needs more height or matras get clipped */
    }
</style>

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
                                <h4 class="mb-sm-0">गैरहजेरी व कारणे दाखवा नोटीस अहवाल</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">गैरहजेरी व कारणे दाखवा नोटीस अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title">
                            <h2>गैरहजेरी व कारणे दाखवा नोटीस अहवाल</h2>
                            <p>गैरहजर कर्मचारी, जारी नोटीस, खुलासा व कार्यवाही</p>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="btn btn-soft-secondary waves-effect material-shadow-none"> <span class="ri-file-excel-line"></span>
                                <span class="px-2">Excel (CSV)</span></button>

                            <button type="button" class="btn btn-secondary waves-effect waves-light d-flex align-items-center mx-1" data-bs-toggle="modal">
                                <span class="ri-file-pdf-line"></span>
                                <span class="px-2">PDF अहवाल</span>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex mx-2 align-items-center">
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-danger-subtle rounded fs-3">
                                            <i class="ri-forbid-line text-danger"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">गैरहजर (ड्युटी-दिवस)</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">49</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="ri-file-warning-line text-warning"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नोटीस जारी</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">2</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-file-text-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">खुलासा प्राप्त</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">1</h3>
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
                                        <p class="fw-medium text-muted mb-0">कार्यवाही पूर्ण</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">1</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <!-- गैरहजर कर्मचारी -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">गैरहजर कर्मचारी</h5>
                                </div>
                                <div class="col-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <?php
                                        $placeholder = "शोधा…";
                                        include 'component/search-input.php'; ?>
                                        <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                                            <i class="ri-filter-3-line align-bottom me-1"></i> फिल्टर
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary">
                                            <i class="ri-download-line align-bottom me-1"></i> CSV
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>दिनांक</th>
                                            <th>कर्मचारी</th>
                                            <th class="col-num">बक्कल</th>
                                            <th>पोलीस ठाणे</th>
                                            <th>बंदोबस्त</th>
                                            <th>ड्युटी पॉइंट</th>
                                            <th>नोटीस</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">संतोष पवार</div></td>
                                            <td class="col-num">4521</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">अमोल कदम</div></td>
                                            <td class="col-num">6734</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>वाहनतळ – गांधी मैदान</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">महेश घोरपडे</div></td>
                                            <td class="col-num">4410</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>मोती चौक</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">प्रिया मोरे</div></td>
                                            <td class="col-num">7012</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>महिला प्रवेश रांग</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">गणेश भोसले</div></td>
                                            <td class="col-num">2208</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>पॉइंट इन्चार्ज – नियंत्रण कक्ष</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">स्वप्नील शिंदे</div></td>
                                            <td class="col-num">10007</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">अनिल यादव</div></td>
                                            <td class="col-num">10163</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>वाहनतळ – गांधी मैदान</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">प्रशांत घाडगे</div></td>
                                            <td class="col-num">10008</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>मोती चौक</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">14 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">संतोष पवार</div></td>
                                            <td class="col-num">4521</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">14 ऑक्टो, 2026</td>
                                            <td><div class="cell-title">अमोल कदम</div></td>
                                            <td class="col-num">6734</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td>वाहनतळ – गांधी मैदान</td>
                                            <td>नोटीस जारी नाही</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult text-center py-4 d-none">
                                    <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row align-items-center g-2">
                                <div class="col-sm">
                                    <div class="text-muted">नोंदी 1 ते 10 पैकी 10 दर्शवत आहे</div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="pagination pagination-separated mb-0">
                                        <li class="page-item disabled"><a href="#" class="page-link">मागील</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item disabled"><a href="#" class="page-link">पुढील</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- कारणे दाखवा नोटीस -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">कारणे दाखवा नोटीस</h5>
                                </div>
                                <div class="col-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <?php
                                        $placeholder = "शोधा…";
                                        include 'component/search-input.php'; ?>
                                        <button type="button" class="btn btn-soft-secondary">
                                            <i class="ri-download-line align-bottom me-1"></i> CSV
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>जा. क्र.</th>
                                            <th>कर्मचारी</th>
                                            <th>गैरहजर दिनांक</th>
                                            <th>जारी करणारे</th>
                                            <th>स्थिती</th>
                                            <th class="col-num">खुलासा</th>
                                            <th>कार्यवाही</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">सा.पो./कानो/2026/001</td>
                                            <td><div class="cell-title">अश्विनी जगताप</div></td>
                                            <td class="text-nowrap">25 सप्टें, 2026</td>
                                            <td>विजय मोहिते</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">कार्यवाही पूर्ण</span></td>
                                            <td class="col-num">प्राप्त</td>
                                            <td>ताकीद (समज) देऊन बंद</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">सा.पो./कानो/2026/002</td>
                                            <td><div class="cell-title">प्रिया मोरे</div></td>
                                            <td class="text-nowrap">10 ऑक्टो, 2026</td>
                                            <td>राहुल शिंदे</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">खुलासा प्रलंबित</span></td>
                                            <td class="col-num">नाही</td>
                                            <td>—</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult text-center py-4 d-none">
                                    <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row align-items-center g-2">
                                <div class="col-sm">
                                    <div class="text-muted">नोंदी 1 ते 2 पैकी 2 दर्शवत आहे</div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="pagination pagination-separated mb-0">
                                        <li class="page-item disabled"><a href="#" class="page-link">मागील</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item disabled"><a href="#" class="page-link">पुढील</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- नोटीसवरील कार्यवाही — सारांश -->
                    <div class="card p-3">
                        <div class="px-2">
                            <h4 class="page-title mb-3">नोटीसवरील कार्यवाही — सारांश</h4>
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <span class="flex-shrink-0" style="min-width: 200px;">ताकीद (समज) देऊन बंद</span>
                                    <div class="progress flex-grow-1">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <b class="flex-shrink-0">1</b>
                                </div>
                        </div>
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
                                    <label class="form-label">पासून</label>
                                    <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" value="16 Aug, 2026" readonly="readonly">
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">पर्यंत</label>
                                    <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" value="14 Nov, 2026" readonly="readonly">
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">पोलीस ठाणे</label>
                                    <select class="form-select">
                                        <option value="">सर्व</option>
                                        <option value="ps1">सातारा शहर पोलीस ठाणे</option>
                                        <option value="ps2">शाहूपुरी पोलीस ठाणे</option>
                                        <option value="ps3">सातारा तालुका पोलीस ठाणे</option>
                                        <option value="ps4">कराड शहर पोलीस ठाणे</option>
                                        <option value="ps5">कराड तालुका पोलीस ठाणे</option>
                                        <option value="ps6">फलटण शहर पोलीस ठाणे</option>
                                        <option value="ps7">वाई पोलीस ठाणे</option>
                                        <option value="ps8">महाबळेश्वर पोलीस ठाणे</option>
                                    </select>
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
