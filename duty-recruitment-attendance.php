<?php
session_start();
$pageTitle = 'दैनंदिन ड्युटी — कर्मचारी व हजेरी';
?>
<!doctype html>
<html lang="mr"
      data-layout="vertical"
      data-topbar="light"
      data-sidebar="dark"
      data-sidebar-size="lg"
      data-sidebar-image="none"
      data-preloader="disable"
      data-theme="default"
      data-theme-colors="default">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle) ?> | Police Bandobast Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Velzon Layout -->
    <script src="assets/js/layout.js"></script>

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">

    <!-- Language font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&display=swap" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">
</head>

<body>

<div id="layout-wrapper"> <!-- START layout-wrapper -->

    <?php include 'component/header.php'; ?>
    <?php include 'component/sidebar.php'; ?>

    <div class="main-content"> <!-- START main-content -->
        <div class="page-content"> <!-- START page-content -->
            <div class="container-fluid"> <!-- START container-fluid -->

                <!-- ===================================== -->
                <!-- PAGE HEADING                          -->
                <!-- ===================================== -->
                <div class="row"> <!-- START heading row -->
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-3">

                            <div>
                                <h2 class="mb-2">दैनंदिन ड्युटी — कर्मचारी व हजेरी</h2>
                                <p class="text-muted mb-0">पोवई नाका नाकाबंदी · सा.पो./बंदोबस्त/दैनंदिन/2026/DD1 · मंजुरीची गरज नाही</p>
                            </div>

                            <div class="row mb-4"> <!-- START buttons row -->
                        <div class="col-12">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="all-bandobast.php" class="btn bg-white border w-lg waves-effect waves-light btn-lg">
                                     मागे
                                </a>
                                 <a href="all-bandobast.php" class="btn bg-white border w-lg waves-effect waves-light btn-lg">
                                      बंदोबस्त पहा
                                </a>
                                <button type="submit" class="btn btn-primary w-lg waves-effect waves-light btn-lg">
                                     संपूर्ण आदेश PDF
                                </button>
                            </div>
                        </div>
                    </div> <!-- END buttons row -->
                        </div>
                    </div>

                </div> <!-- END heading row -->


                <!-- ===================================== -->
                <!-- SUMMARY STAT CARDS                    -->
                <!-- ===================================== -->
                <div class="row"> <!-- START stats row -->

                    <!-- कालावधी -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-height-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2 material-shadow">
                                            <i class="bx bx-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-medium text-muted mb-3">कालावधी</p>
                                        <h5 class="fs-4 mb-3">18 ऑक्टो, 2026 – 20 ऑक्टो, 2026</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ड्युटी प्रकार -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-height-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2 material-shadow">
                                            <i class="bx bx-time-five"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-medium text-muted mb-3">ड्युटी प्रकार</p>
                                        <h5 class="fs-4 mb-3">नाकाबंदी</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- नियुक्त कर्मचारी -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-height-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2 material-shadow">
                                            <i class="bx bx-select-multiple"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-medium text-muted mb-3">नियुक्त कर्मचारी</p>
                                        <h5 class="fs-4 mb-3">3</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- आदेश स्वीकारले -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-height-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2 material-shadow">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-medium text-muted mb-3">आदेश स्वीकारले</p>
                                        <h5 class="fs-4 mb-3">0 / 3</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- END stats row -->


                <!-- ===================================== -->
                <!-- CARD 1: ड्युटी पॉइंट                    -->
                <!-- ===================================== -->
                <div class="row"> <!-- START row 1 -->
                    <div class="col-12">
                        <div class="card"> <!-- START card 1 -->

                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                    <div class="d-flex align-items-center gap-3 flex-grow-1" style="min-width: 0;">
                                        <div class="avatar-xs flex-shrink-0">
                                            <span class="avatar-title rounded bg-primary text-warning fw-semibold">1</span>
                                        </div>
                                        <div class="flex-grow-1" style="min-width: 0;">
                                            <h6 class="card-title mb-0">ड्युटी पॉइंट — अचूक ठिकाण</h6>
                                            <p class="text-muted mb-0 pt-1">
                                                यादी अंतिम झाल्यावर प्रत्येक पॉइंटचे नाव व Google Maps वरील अचूक ठिकाण द्या — कर्मचाऱ्याला ॲपमध्ये थेट त्या पॉइंटचा मार्ग मिळेल व हजेरीचे अंतर त्या पॉइंटपासून मोजले जाईल
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" id="btnAddDutyPoint" class="btn btn-primary flex-shrink-0">
                                        <i class="ri-add-line align-bottom me-1"></i> नवीन ड्युटी पॉइंट
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0"> <!-- START card-body 1 -->
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0" id="dutyPointTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-lg">ड्युटी पॉइंट</th>
                                                <th class="min-w-sm">अचूक ठिकाण (अक्षांश, रेखांश)</th>
                                                <th class="col-num">नियुक्त कर्मचारी</th>
                                                <th class="col-num">बंदोबस्त स्थळापासून</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">
                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">पोवई नाका सिग्नल, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <a href="https://www.google.com/maps/search/?api=1&amp;query=17.6925,74.0091"
                                                       target="_blank" rel="noopener noreferrer"
                                                       class="status-pill pill-success">
                                                        <i class="ri-map-pin-2-line"></i> सध्याचे स्थान
                                                    </a>
                                                </td>
                                                <td class="col-num">3</td>
                                                <td class="col-num">0 मी.</td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end gap-1">
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="मार्ग">
                                                            <i class="ri-compass-discover-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="संपादित करा">
                                                            <i class="ri-pencil-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="noresult text-center py-4" style="display:none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                            </div> <!-- END card-body 1 -->

                        </div> <!-- END card 1 -->
                    </div>
                </div> <!-- END row 1 -->


                <!-- ===================================== -->
                <!-- CARD 2: आणखी कर्मचारी नियुक्त करा        -->
                <!-- (its own form — never nest forms)     -->
                <!-- ===================================== -->
                <div class="row"> <!-- START row 2 -->
                    <div class="col-12">
                        <div class="card"> <!-- START card 2 -->

                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                    <div class="d-flex align-items-center gap-3 flex-grow-1" style="min-width: 0;">
                                        <div class="avatar-xs flex-shrink-0">
                                            <span class="avatar-title rounded bg-primary text-warning fw-semibold">2</span>
                                        </div>
                                        <div class="flex-grow-1" style="min-width: 0;">
                                            <h6 class="card-title mb-0">आणखी कर्मचारी या ड्युटीवर नियुक्त करा</h6>
                                            <p class="text-muted mb-0 pt-1">
                                                आपल्या ठाण्याचे कर्मचारी — मंजुरीशिवाय थेट मोबाईल ॲपमध्ये आदेश
                                            </p>
                                        </div>
                                    </div>

                                    <!-- form="" links this header button to the form below -->
                                    <button type="submit" form="assignStaffForm" class="btn btn-primary btn-assign flex-shrink-0">
                                        <i class="ri-add-line me-1"></i> नियुक्त करा
                                    </button>
                                </div>
                            </div>

                            <div class="card-body"> <!-- START card-body 2 -->
                                <form action="Controller/BandobastController.php" method="POST" id="assignStaffForm">
                                    <input type="hidden" name="action" value="assign_staff">
                                    <input type="hidden" name="duty_id" value="DD1">

                                    <div class="row g-3">
                                        <!-- कर्मचारी -->
                                        <div class="col-lg-4 col-md-6">
                                            <label class="form-label fw-semibold">कर्मचारी <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control mb-3" placeholder="नाव / बक्कल शोधा...">
                                            <select name="employee_id" class="form-select" required>
                                                <option value="">निवडा...</option>
                                            </select>
                                            <div class="form-text">✓ = ठाण्याच्या नामनिर्देशित यादीत · ★ = या बंदोबस्ताच्या ठाण्यातील</div>
                                        </div>

                                        <!-- ड्युटी पॉइंट -->
                                        <div class="col-lg-4 col-md-6">
                                            <label class="form-label fw-semibold">ड्युटी पॉइंट (अचूक ठिकाण) <span class="text-danger">*</span></label>
                                            <select name="duty_point_id" class="form-select" required>
                                                <option value="">पॉइंट निवडा...</option>
                                            </select>
                                            <div class="form-text">📍 = अचूक Google Maps ठिकाण दिलेले</div>
                                        </div>

                                        <!-- पाळी -->
                                        <div class="col-lg-4 col-md-6">
                                            <label class="form-label fw-semibold">पाळी <span class="text-danger">*</span></label>
                                            <select name="shift_id" class="form-select" required>
                                                <option value="">निवडा...</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- END card-body 2 -->

                        </div> <!-- END card 2 -->
                    </div>
                </div> <!-- END row 2 -->


                <!-- ===================================== -->
                <!-- CARD 3: नियुक्त कर्मचारी                 -->
                <!-- ===================================== -->
                <div class="row"> <!-- START row 3 -->
                    <div class="col-12">
                        <div class="card"> <!-- START card 3 -->

                            <div class="card-header">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-xs flex-shrink-0">
                                        <span class="avatar-title rounded bg-primary text-warning fw-semibold">3</span>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-0">नियुक्त कर्मचारी (3)</h6>
                                        <p class="text-muted mb-0 pt-1">आदेश स्वीकारल्याची स्थिती मोबाईल ॲपमधून येते</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0"> <!-- START card-body 3 -->
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0" id="staffTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-lg">कर्मचारी</th>
                                                <th class="min-w-sm">पोलीस ठाणे</th>
                                                <th class="min-w-md">ड्युटी पॉइंट</th>
                                                <th class="min-w-sm">पाळी</th>
                                                <th class="min-w-sm">आदेश स्थिती</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">अनिल साळुंखे</div>
                                                    <small class="cell-sub">पोलीस हवालदार · बक्कल 10173 · 9710000173</small>
                                                </td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <div>दिवस पाळी</div>
                                                    <small class="cell-sub">08:00–20:00</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> प्रलंबित</span>
                                                </td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end align-items-center gap-1">
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="आदेश डाउनलोड करा">
                                                            <i class="ri-download-2-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="बदला">
                                                            <i class="ri-pencil-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action" title="काढून टाका">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">तुषार जाधव</div>
                                                    <small class="cell-sub">पोलीस हवालदार · बक्कल 10174 · 9710000174</small>
                                                </td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <div>दिवस पाळी</div>
                                                    <small class="cell-sub">08:00–20:00</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> प्रलंबित</span>
                                                </td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end align-items-center gap-1">
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="आदेश डाउनलोड करा">
                                                            <i class="ri-download-2-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="बदला">
                                                            <i class="ri-pencil-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action" title="काढून टाका">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">तुषार चव्हाण</div>
                                                    <small class="cell-sub">पोलीस हवालदार · बक्कल 10175 · 9710000175</small>
                                                </td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <div>दिवस पाळी</div>
                                                    <small class="cell-sub">08:00–20:00</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> प्रलंबित</span>
                                                    <!-- Other states:
                                                    <span class="badge bg-success-subtle text-success"><i class="mdi mdi-circle-medium"></i> स्वीकारले</span>
                                                    <span class="badge bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i> नाकारले</span>
                                                    -->
                                                </td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end align-items-center gap-1">
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="आदेश डाउनलोड करा">
                                                            <i class="ri-download-2-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="बदला">
                                                            <i class="ri-pencil-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action" title="काढून टाका">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="noresult text-center py-4" style="display:none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                            </div> <!-- END card-body 3 -->

                        </div> <!-- END card 3 -->
                    </div>
                </div> <!-- END row 3 -->


                <!-- ===================================== -->
                <!-- CARD 4: हजेरी अहवाल                     -->
                <!-- ===================================== -->
                <div class="row"> <!-- START row 4 -->
                    <div class="col-12">
                        <div class="card"> <!-- START card 4 -->

                            <div class="card-header">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <span class="avatar-title rounded bg-primary text-warning fw-semibold">4</span>
                                        </div>
                                        <div>
                                            <h6 class="card-title mb-0">हजेरी अहवाल</h6>
                                            <p class="text-muted mb-0 pt-1">मोबाईल ॲपमधून GPS स्थान व सेल्फीसह नोंदवलेली हजेरी</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <input type="date" class="form-control" id="attendanceDate" value="2026-10-19">
                                    </div>
                                </div>
                            </div>

                            <!-- Summary strip -->
                            <div class="d-flex flex-wrap align-items-center gap-2 px-3 py-2 border-bottom">
                                <span class="badge bg-success-subtle text-success"><i class="mdi mdi-circle-medium"></i> हजर 0</span>
                                <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> बाकी 3</span>
                                <span class="text-muted ms-1">19 ऑक्टो, 2026</span>
                            </div>

                            <div class="card-body p-0"> <!-- START card-body 4 -->
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0" id="attendanceTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-sm">कर्मचारी</th>
                                                <th class="min-w-md">ड्युटी पॉइंट</th>
                                                <th class="min-w-sm">स्थिती</th>
                                                <th class="min-w-sm">हजर वेळ</th>
                                                <th class="min-w-sm">सुटण्याची वेळ</th>
                                                <th class="min-w-sm">चेहरा पडताळणी</th>
                                                <th class="min-w-sm">स्थान (GPS)</th>
                                                <th class="min-w-sm">सेल्फी (हजर / सुटका)</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">अनिल साळुंखे</div>
                                                    <small class="cell-sub">बक्कल 10173</small>
                                                </td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> अद्याप हजर नाही</span>
                                                </td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">तुषार जाधव</div>
                                                    <small class="cell-sub">बक्कल 10174</small>
                                                </td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> अद्याप हजर नाही</span>
                                                </td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">तुषार चव्हाण</div>
                                                    <small class="cell-sub">बक्कल 10175</small>
                                                </td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i> अद्याप हजर नाही</span>
                                                </td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                                <td><span class="text-muted">—</span></td>
                                            </tr>

                                            <!-- TEMPLATE: row after the app marks attendance (हजर)
                                            <tr>
                                                <td>
                                                    <div class="cell-title">अनिल साळुंखे</div>
                                                    <small class="cell-sub">बक्कल 10173</small>
                                                </td>
                                                <td>
                                                    <div><i class="ri-map-pin-line text-secondary align-middle me-1"></i>पोवई नाका सिग्नल, सातारा</div>
                                                    <a href="https://www.google.com/maps?q=17.6925,74.0091" target="_blank" rel="noopener noreferrer" class="cell-sub text-muted text-decoration-underline">17.6925, 74.0091</a>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-subtle text-success"><i class="mdi mdi-circle-medium"></i> हजर</span>
                                                </td>
                                                <td>07:52</td>
                                                <td>20:04</td>
                                                <td>
                                                    <span class="text-success"><i class="ri-shield-check-line align-middle me-1"></i>जुळले</span>
                                                </td>
                                                <td>
                                                    <a href="https://www.google.com/maps?q=17.6927,74.0093" target="_blank" rel="noopener noreferrer" class="text-body text-decoration-underline">17.6927, 74.0093</a>
                                                    <small class="cell-sub d-block">ड्युटी पॉइंटपासून 25 मी.</small>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="selfie-in.jpg" target="_blank"><img src="selfie-in.jpg" class="avatar-sm rounded object-fit-cover" alt="हजर सेल्फी"></a>
                                                        <a href="selfie-out.jpg" target="_blank"><img src="selfie-out.jpg" class="avatar-sm rounded object-fit-cover" alt="सुटका सेल्फी"></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            -->

                                        </tbody>
                                    </table>

                                    <div class="noresult text-center py-4" style="display:none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                            </div> <!-- END card-body 4 -->

                        </div> <!-- END card 4 -->
                    </div>
                </div> <!-- END row 4 -->


             
            </div> <!-- END container-fluid -->
        </div> <!-- END page-content -->

        <!-- Footer (include here if needed) -->

    </div> <!-- END main-content -->
</div> <!-- END layout-wrapper -->


<!-- Back to Top -->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top" type="button">
    <i class="ri-arrow-up-line"></i>
</button>

<?php include 'component/footer.php'; ?>

    <!-- Bootstrap JS (needed for sidebar dropdowns, tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>