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
                                <h4 class="mb-sm-0">पोलीस ठाणे प्रतिसाद अहवाल</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">पोलीस ठाणे प्रतिसाद अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title">
                            <h2>पोलीस ठाणे प्रतिसाद अहवाल</h2>
                            <p>मनुष्यबळ मागणीवर ठाण्यांचे प्रतिसाद — पूर्ण / अंशतः / नाकार / प्रलंबित</p>
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
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-check-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">पूर्ण स्वीकार</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">5</h3>
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
                                        <p class="fw-medium text-muted mb-0">अंशतः</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">3</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-danger-subtle rounded fs-3">
                                            <i class="ri-forbid-line text-danger"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नाकारले</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">0</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="ri-hourglass-line text-warning"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">प्रलंबित</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">0</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <!-- कारणनिहाय — अंशतः मंजुरी / नामंजुरी -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">कारणनिहाय — अंशतः मंजुरी / नामंजुरी</h5>
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
                                            <th>कारण (नाकारण्याचा नमुना)</th>
                                            <th class="col-num">अंशतः मंजूर</th>
                                            <th class="col-num">नामंजूर</th>
                                            <th class="col-num">कमी पडलेले मनुष्यबळ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</div></td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">24</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">कर्मचारी अन्य बंदोबस्तावर</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">10</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">कर्मचारी रजेवर</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">10</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">आधीच अन्य बंदोबस्त नियोजित</div></td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">25</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">प्रशिक्षणासाठी कर्मचारी प्रतिनियुक्त</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">6</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">न्यायालयीन कामकाज / साक्ष</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">4</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">रात्र गस्त व नाकाबंदी</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">8</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">निवडणूक कर्तव्यासाठी राखीव</div></td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">15</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">वाहन / साधनसामग्रीची कमतरता</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">5</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">अपुरी पूर्वसूचना</div></td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">12</td>
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

                    <!-- पोलीस ठाणे प्रतिसाद तपशील -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">पोलीस ठाणे प्रतिसाद तपशील</h5>
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
                                            <th>बंदोबस्त</th>
                                            <th>पोलीस ठाणे</th>
                                            <th class="col-num">मागणी</th>
                                            <th class="col-num">स्वीकृत</th>
                                            <th class="col-num">यादी</th>
                                            <th>प्रतिसाद</th>
                                            <th>दिनांक</th>
                                            <th>कारण (नमुना)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div></td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td class="col-num">79</td>
                                            <td class="col-num">79</td>
                                            <td class="col-num">79/79</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">पूर्ण मंजूर</span></td>
                                            <td class="text-nowrap">06 ऑक्टो, 2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div></td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td class="col-num">41</td>
                                            <td class="col-num">32</td>
                                            <td class="col-num">32/32</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">अंशतः मंजूर</span></td>
                                            <td class="text-nowrap">06 ऑक्टो, 2026</td>
                                            <td>स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">व्हीआयपी दौरा – कराड</div></td>
                                            <td>कराड शहर पोलीस ठाणे</td>
                                            <td class="col-num">70</td>
                                            <td class="col-num">70</td>
                                            <td class="col-num">67/70</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">पूर्ण मंजूर</span></td>
                                            <td class="text-nowrap">09 ऑक्टो, 2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">व्हीआयपी दौरा – कराड</div></td>
                                            <td>कराड तालुका पोलीस ठाणे</td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">20/20</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">पूर्ण मंजूर</span></td>
                                            <td class="text-nowrap">10 ऑक्टो, 2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">दसरा मिरवणूक – फलटण</div></td>
                                            <td>फलटण शहर पोलीस ठाणे</td>
                                            <td class="col-num">60</td>
                                            <td class="col-num">50</td>
                                            <td class="col-num">50/50</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">अंशतः मंजूर</span></td>
                                            <td class="text-nowrap">06 ऑक्टो, 2026</td>
                                            <td>कर्मचारी अन्य बंदोबस्तावर</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</div></td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td class="col-num">150</td>
                                            <td class="col-num">150</td>
                                            <td class="col-num">137/150</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">पूर्ण मंजूर</span></td>
                                            <td class="text-nowrap">11 सप्टें, 2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</div></td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td class="col-num">90</td>
                                            <td class="col-num">90</td>
                                            <td class="col-num">89/90</td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">पूर्ण मंजूर</span></td>
                                            <td class="text-nowrap">11 सप्टें, 2026</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</div></td>
                                            <td>सातारा तालुका पोलीस ठाणे</td>
                                            <td class="col-num">60</td>
                                            <td class="col-num">45</td>
                                            <td class="col-num">45/45</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">अंशतः मंजूर</span></td>
                                            <td class="text-nowrap">12 सप्टें, 2026</td>
                                            <td>स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">यात्रा बंदोबस्त – वाई</div></td>
                                            <td>वाई पोलीस ठाणे</td>
                                            <td class="col-num">40</td>
                                            <td class="col-num">30</td>
                                            <td class="col-num">30/30</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">अंशतः मंजूर</span></td>
                                            <td class="text-nowrap">14 ऑक्टो, 2026</td>
                                            <td>कर्मचारी रजेवर</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">पर्यटन हंगाम बंदोबस्त – महाबळेश्वर</div></td>
                                            <td>महाबळेश्वर पोलीस ठाणे</td>
                                            <td class="col-num">25</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0/0</td>
                                            <td><span class="badge rounded-pill bg-danger-subtle text-danger">नामंजूर</span></td>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>आधीच अन्य बंदोबस्त नियोजित</td>
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
