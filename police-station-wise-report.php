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

                    <div class="d-flex justify-content-between align-items-center p-3">
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

                    <div class="d-flex mx-2 align-items-center">
                        <div class="card card-animate mx-2 flex-fill">
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


                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">पोलीस ठाणेनिहाय</h5>
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
                                            <th>पोलीस ठाणे</th>
                                            <th class="col-num">मागणी</th>
                                            <th class="col-num">स्वीकृत</th>
                                            <th class="col-num">यादीतील नावे</th>
                                            <th class="col-num">प्रतिसाद पू/अं/ना/प्र</th>
                                            <th class="col-num">नियुक्त</th>
                                            <th class="col-num">ड्युटी-दिवस</th>
                                            <th class="col-num">उपस्थित</th>
                                            <th class="col-num">गैरहजर</th>
                                            <th class="col-num">नोटीस</th>
                                            <th class="min-w-sm">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td class="col-num">229</td>
                                            <td class="col-num">229</td>
                                            <td class="col-num">216</td>
                                            <td class="col-num">2/0/0/0</td>
                                            <td class="col-num">8</td>
                                            <td class="col-num">36</td>
                                            <td class="col-num">7</td>
                                            <td class="col-num">29</td>
                                            <td class="col-num">0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100">19%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">शाहूपुरी पोलीस ठाणे</div></td>
                                            <td class="col-num">131</td>
                                            <td class="col-num">122</td>
                                            <td class="col-num">121</td>
                                            <td class="col-num">1/1/0/0</td>
                                            <td class="col-num">4</td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">19</td>
                                            <td class="col-num">1</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">सातारा तालुका पोलीस ठाणे</div></td>
                                            <td class="col-num">60</td>
                                            <td class="col-num">45</td>
                                            <td class="col-num">45</td>
                                            <td class="col-num">0/1/0/0</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">1</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">कराड शहर पोलीस ठाणे</div></td>
                                            <td class="col-num">70</td>
                                            <td class="col-num">70</td>
                                            <td class="col-num">67</td>
                                            <td class="col-num">1/0/0/0</td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">कराड तालुका पोलीस ठाणे</div></td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">20</td>
                                            <td class="col-num">1/0/0/0</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">फलटण शहर पोलीस ठाणे</div></td>
                                            <td class="col-num">60</td>
                                            <td class="col-num">50</td>
                                            <td class="col-num">50</td>
                                            <td class="col-num">0/1/0/0</td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
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
                                    <div class="text-muted">नोंदी 1 ते 6 पैकी 6 दर्शवत आहे</div>
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
            <div class="modal-dialog modal-lg">
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
