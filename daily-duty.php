<?php
session_start();
$pageTitle = 'Daily Duty';
?>
<?php include 'component/head.php'; ?>

<body>

<div id="layout-wrapper">

    <?php include 'component/header.php'; ?>
    <?php include 'component/sidebar.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- ========== Page Heading ========== -->
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                            <div>
                                <h2 class="card-title mb-2">दैनंदिन ड्युटी</h2>
                                <p class="text-muted mb-0">पोलीस ठाण्याने ठरवलेली रोजची ड्युटी — मंजुरीची गरज नाही; आदेश थेट कर्मचाऱ्यांच्या मोबाईल ॲपमध्ये</p>
                            </div>
                            <a href="daily-duty-create.php" class="btn btn-primary btn-lg waves-effect waves-light d-flex align-items-center">
                                <i class="ri-add-fill me-1"></i> नवीन दैनंदिन ड्युटी
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ========== End Page Heading ========== -->


                <!-- =====================================================
                     TABLE 1 : आज चालू
                     ===================================================== -->
                     
                <div class="row">
                    <div class="col-12">
                        <div class="card table-section" id="todayList">

                            <!-- Card header: title + search + filter -->
                            <div class="card-header">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md">
                                        <h5 class="section-title">
                                            आज चालू
                                            <span class="section-count">2</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="d-flex flex-wrap align-items-center gap-2">
                                            <div class="search-box">
                                                <input type="search" class="form-control search"
                                                       placeholder="ड्युटी, ठिकाण, पोलीस ठाणे शोधा…">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                            <button type="button" class="btn btn-soft-primary" data-bs-toggle="collapse"
                                                    data-bs-target="#filterPanel" aria-expanded="false" aria-controls="filterPanel">
                                                <i class="ri-filter-3-line align-bottom me-1"></i> Filters
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0" id="todayTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-sm">कालावधी</th>
                                                <th class="min-w-lg">ड्युटी</th>
                                                <th class="min-w-md">ठिकाण</th>
                                                <th class="min-w-sm">पाळी</th>
                                                <th class="col-num">कर्मचारी</th>
                                                <th class="col-num">आज हजर</th>
                                                <th class="min-w-sm">पोलीस ठाणे</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div>16 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 18 ऑक्टो, 2026</small>
                                                </td>
                                                <td>
                                                    <div class="cell-title">पोवई नाका नाकाबंदी</div>
                                                    <small class="cell-sub">नाकाबंदी · सा.पो./बंदोबस्त/दैनंदिन/2026/DD1</small>
                                                </td>
                                                <td>
                                                    <a href="https://maps.app.goo.gl/jWdA8UBa89pjB2fJ8"
                                                       target="_blank" class="text-body text-decoration-underline">
                                                        <i class="ri-map-pin-line text-secondary align-middle me-2"></i>पोवई नाका सिग्नल, सातारा
                                                    </a>
                                                    

                                                </td>
                                                <td>
                                                    <div>दिवस पाळी</div>
                                                    <small class="cell-sub">08:00–20:00</small>
                                                </td>
                                                <td class="col-num">3</td>
                                                <td class="col-num"><b>0</b> / 3</td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end align-items-center gap-1">
                                                        <a href="duty-recruitment-attendance.php" class="btn btn-primary btn-sm">
                                                            <i class="ri-group-line align-bottom me-1"></i> कर्मचारी व हजेरी
                                                        </a>
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="डाउनलोड करा">
                                                            <i class="ri-download-2-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action" title="रद्द करा">
                                                            <i class="ri-forbid-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div>16 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 17 ऑक्टो, 2026</small>
                                                </td>
                                                <td>
                                                    <div class="cell-title">मोती चौक परिसर रात्र गस्त</div>
                                                    <small class="cell-sub">रात्र गस्त · सा.पो./बंदोबस्त/दैनंदिन/2026/DD2</small>
                                                </td>
                                                <td>
                                                    <a href="https://www.google.com/maps/search/?api=1&query=मोती+चौक+सातारा"
                                                       target="_blank" class="text-body text-decoration-underline">
                                                        <i class="ri-map-pin-line text-secondary align-middle me-2"></i>मोती चौक, सातारा
                                                    </a>
                                                </td>
                                                <td>
                                                    <div>रात्र पाळी</div>
                                                    <small class="cell-sub">20:00–08:00</small>
                                                </td>
                                                <td class="col-num">2</td>
                                                <td class="col-num"><b>0</b> / 2</td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="col-action">
                                                    <div class="d-flex justify-content-end align-items-center gap-1">
                                                        <a href="duty-recruitment-attendance.php" class="btn btn-primary btn-sm">
                                                            <i class="ri-group-line align-bottom me-1"></i> कर्मचारी व हजेरी
                                                        </a>
                                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="डाउनलोड करा">
                                                            <i class="ri-download-2-line"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action" title="रद्द करा">
                                                            <i class="ri-forbid-line"></i>
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
                            </div>

                            <!-- Footer: info + pagination -->
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

                        </div><!-- end card -->
                    </div>
                </div>
                <!-- ========== End Table 1 ========== -->
              




            </div><!-- container-fluid -->
        </div><!-- page-content -->

        <?php include 'component/footer.php'; ?>
    </div><!-- main-content -->

</div><!-- layout-wrapper -->

    <!-- Bootstrap JS (needed for sidebar dropdowns, tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>