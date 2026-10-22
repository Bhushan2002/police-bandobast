<?php
session_start();
$pageTitle = 'Force Request';
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
                                <h2 class="card-title mb-2">मनुष्यबळ विनंती</h2>
                                <p class="text-muted mb-0">पोलीस ठाण्यांचे प्रतिसाद</p>
                            </div>
                            <a href="new-force-request.php" class="btn btn-primary btn-lg waves-effect waves-light d-flex align-items-center">
                                <i class="ri-add-fill me-1"></i> नवीन मनुष्यबळ विनंती
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ========== End Page Heading ========== -->


                <!-- =====================================================
                     TABLE 1 : निर्णय प्रलंबित
                     ===================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card table-section" id="pendingList">

                            <!-- Card header: title + search + filter -->
                            <div class="card-header">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md">
                                        <h5 class="section-title">
                                            निर्णय प्रलंबित
                                            <span class="section-count is-alert">2</span>
                                        </h5>
                                        <p class="section-desc">या विनंत्यांवर पोलीस ठाण्याचा निर्णय अद्याप बाकी आहे.</p>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="d-flex flex-wrap align-items-center gap-2">
                                            <div class="search-box">
                                                <input type="search" class="form-control search"
                                                       placeholder="शीर्षक, प्रकार, पोलीस ठाणे शोधा…">
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
                                    <table class="table data-table align-middle mb-0" id="pendingTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-lg">बंदोबस्त</th>
                                                <th class="min-w-sm">कालावधी</th>
                                                <th class="min-w-sm">पोलीस ठाणे</th>
                                                <th class="col-num">मागणी</th>
                                                <th class="col-num">स्वीकृत</th>
                                                <th class="min-w-lg">प्रतिसाद</th>
                                                <th>नामनिर्देशित यादी</th>
                                                <th>बंदोबस्त स्थिती</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="col-num">106</td>
                                                <td class="col-num">—</td>
                                                <td><span class="status-pill pill-warning">ठाण्याचा निर्णय प्रलंबित</span></td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td class="col-num">35</td>
                                                <td class="col-num">—</td>
                                                <td><span class="status-pill pill-warning">ठाण्याचा निर्णय प्रलंबित</span></td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
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


                <!-- =====================================================
                     TABLE 2 : निर्णय दिलेले
                     ===================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card table-section" id="decidedList">

                            <!-- Card header: title + search + filter -->
                            <div class="card-header">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md">
                                        <h5 class="section-title">
                                            निर्णय दिलेले
                                            <span class="section-count">4</span>
                                        </h5>
                                        <p class="section-desc">पोलीस ठाण्याने मंजूर किंवा नामंजूर केलेल्या विनंत्या.</p>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="d-flex flex-wrap align-items-center gap-2">
                                            <div class="search-box">
                                                <input type="search" class="form-control search"
                                                       placeholder="शीर्षक, प्रकार, पोलीस ठाणे शोधा…">
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
                                    <table class="table data-table align-middle mb-0" id="decidedTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-lg">बंदोबस्त</th>
                                                <th class="min-w-sm">कालावधी</th>
                                                <th class="min-w-sm">पोलीस ठाणे</th>
                                                <th class="col-num">मागणी</th>
                                                <th class="col-num">स्वीकृत</th>
                                                <th class="min-w-lg">प्रतिसाद</th>
                                                <th>नामनिर्देशित यादी</th>
                                                <th>बंदोबस्त स्थिती</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B3 · व्हीआयपी दौरा</small>
                                                </td>
                                                <td>
                                                    <div>18 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 18 ऑक्टो, 2026</small>
                                                </td>
                                                <td>कराड शहर पोलीस ठाणे</td>
                                                <td class="col-num">70</td>
                                                <td class="col-num">70</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-warning">यादी 67/70</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B3 · व्हीआयपी दौरा</small>
                                                </td>
                                                <td>
                                                    <div>18 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 18 ऑक्टो, 2026</small>
                                                </td>
                                                <td>कराड तालुका पोलीस ठाणे</td>
                                                <td class="col-num">20</td>
                                                <td class="col-num">20</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-success">यादी 20/20</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>सातारा तालुका पोलीस ठाणे</td>
                                                <td class="col-num">21</td>
                                                <td class="col-num">0</td>
                                                <td>
                                                    <span class="status-pill pill-danger">नामंजूर</span>
                                                    <div class="cell-note">
                                                        <strong>कर्मचारी अन्य बंदोबस्तावर</strong> — त्याच कालावधीत ठाण्याच्या हद्दीत यात्रा बंदोबस्त
                                                    </div>
                                                </td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B6 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>10 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 20 ऑक्टो, 2026</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="col-num">79</td>
                                                <td class="col-num">79</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-success">यादी 79/79</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
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
                                        <div class="text-muted">नोंदी 1 ते 4 पैकी 4 दर्शवत आहे</div>
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
                <!-- ========== End Table 2 ========== -->


                <!-- =====================================================
                     TABLE 3 : सर्व बंदोबस्त विनंत्या
                     ===================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card table-section" id="allList">

                            <!-- Card header: title + search + filter -->
                            <div class="card-header">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md">
                                        <h5 class="section-title">
                                            सर्व बंदोबस्त विनंत्या
                                            <span class="section-count">6</span>
                                        </h5>
                                        <p class="section-desc">सर्व पोलीस ठाण्यांचे प्रतिसाद.</p>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="d-flex flex-wrap align-items-center gap-2">
                                            <div class="search-box">
                                                <input type="search" class="form-control search"
                                                       placeholder="शीर्षक, प्रकार, पोलीस ठाणे शोधा…">
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
                                    <table class="table data-table align-middle mb-0" id="allTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="min-w-lg">बंदोबस्त</th>
                                                <th class="min-w-sm">कालावधी</th>
                                                <th class="min-w-sm">पोलीस ठाणे</th>
                                                <th class="col-num">मागणी</th>
                                                <th class="col-num">स्वीकृत</th>
                                                <th class="min-w-lg">प्रतिसाद</th>
                                                <th>नामनिर्देशित यादी</th>
                                                <th>बंदोबस्त स्थिती</th>
                                                <th class="col-action">कृती</th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="col-num">106</td>
                                                <td class="col-num">—</td>
                                                <td><span class="status-pill pill-warning">ठाण्याचा निर्णय प्रलंबित</span></td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>शाहूपुरी पोलीस ठाणे</td>
                                                <td class="col-num">35</td>
                                                <td class="col-num">—</td>
                                                <td><span class="status-pill pill-warning">ठाण्याचा निर्णय प्रलंबित</span></td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B3 · व्हीआयपी दौरा</small>
                                                </td>
                                                <td>
                                                    <div>18 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 18 ऑक्टो, 2026</small>
                                                </td>
                                                <td>कराड शहर पोलीस ठाणे</td>
                                                <td class="col-num">70</td>
                                                <td class="col-num">70</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-warning">यादी 67/70</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B3 · व्हीआयपी दौरा</small>
                                                </td>
                                                <td>
                                                    <div>18 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 18 ऑक्टो, 2026</small>
                                                </td>
                                                <td>कराड तालुका पोलीस ठाणे</td>
                                                <td class="col-num">20</td>
                                                <td class="col-num">20</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-success">यादी 20/20</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 5 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B2 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>06 नोव्हें, 2026</div>
                                                    <small class="cell-sub">ते 10 नोव्हें, 2026</small>
                                                </td>
                                                <td>सातारा तालुका पोलीस ठाणे</td>
                                                <td class="col-num">21</td>
                                                <td class="col-num">0</td>
                                                <td>
                                                    <span class="status-pill pill-danger">नामंजूर</span>
                                                    <div class="cell-note">
                                                        <strong>कर्मचारी अन्य बंदोबस्तावर</strong> — त्याच कालावधीत ठाण्याच्या हद्दीत यात्रा बंदोबस्त
                                                    </div>
                                                </td>
                                                <td class="cell-empty">—</td>
                                                <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- 6 -->
                                            <tr>
                                                <td>
                                                    <div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="cell-sub">सा.पो./बंदोबस्त/2026/B6 · उत्सव</small>
                                                </td>
                                                <td>
                                                    <div>10 ऑक्टो, 2026</div>
                                                    <small class="cell-sub">ते 20 ऑक्टो, 2026</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td class="col-num">79</td>
                                                <td class="col-num">79</td>
                                                <td><span class="status-pill pill-success">पूर्ण मंजूर</span></td>
                                                <td><span class="status-pill pill-success">यादी 79/79</span></td>
                                                <td><span class="status-pill pill-success">मंजूर</span></td>
                                                <td class="col-action">
                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
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

                        </div><!-- end card -->
                    </div>
                </div>
                <!-- ========== End Table 3 ========== -->

            </div><!-- container-fluid -->
        </div><!-- page-content -->

        <?php include 'component/footer.php'; ?>
    </div><!-- main-content -->

</div><!-- layout-wrapper -->

    <!-- Bootstrap JS (needed for sidebar dropdowns, tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>