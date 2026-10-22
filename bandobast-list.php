<?php
session_start();
$pageTitle = 'Bandobast';
?>
<?php include 'component/head.php'; ?>

<body>

    <div id="layout-wrapper">

        <?php include 'component/header.php'; ?>
        <?php include 'component/sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">सर्व बंदोबस्त</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">बंदोबस्त</a></li>
                                        <li class="breadcrumb-item active">सर्व बंदोबस्त</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- ========== Page Heading ========== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                                <div>
                                    <h2 class="page-title mb-2">बंदोबस्त व्यवस्थापन</h2>
                                    <p class="text-muted mb-0">बंदोबस्त तयार करा, मनुष्यबळ मागणी करा, मंजूर करा व कर्मचारी नियुक्त करा.</p>
                                </div>
                                <a href="new-bandobast.php" class="btn btn-primary btn-lg waves-effect waves-light d-flex align-items-center">
                                    <i class="ri-add-fill me-1"></i> नवीन बंदोबस्त
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ========== End Page Heading ========== -->


                    <!-- =====================================================
                     बंदोबस्त यादी
                     ===================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-section" id="bandobastList">

                                <!-- Card header: title + search + buttons -->
                                <div class="card-header">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md">
                                            <h5 class="section-title">
                                                बंदोबस्त यादी
                                                <span class="section-count">6</span>
                                            </h5>
                                            <p class="section-desc">सर्व बंदोबस्त, मनुष्यबळ व मंजुरी स्थिती.</p>
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
                                                <!-- <button type="button" id="addRow" class="btn btn-primary">
                                                <i class="ri-add-line align-bottom me-1"></i> नवीन ओळ
                                            </button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table data-table align-middle mb-0" id="bandobastTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="min-w-lg">बंदोबस्त</th>
                                                    <th class="min-w-md">कालावधी</th>
                                                    <th class="text-center">पोलीस ठाणी</th>
                                                    <th class="text-center">मनुष्यबळ (मागणी / स्वीकृत / आवश्यक)</th>
                                                    <th class="text-center">नियुक्त कर्मचारी</th>
                                                    <th class="min-w-md">मंजुरी प्राधिकारी</th>
                                                    <th>स्थिती</th>
                                                    <th class="col-action">कृती</th>
                                                </tr>
                                            </thead>

                                            <tbody class="list">

                                                <!-- 1 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                        <small class="cell-sub">उत्सव · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>10 ऑक्टो, 2026, 16:00</div>
                                                        <small class="cell-sub">ते 20 ऑक्टो, 2026, 23:59</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>120</b> / <b class="text-success">111</b> / 120</div>
                                                        <small class="cell-sub text-danger">9 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">8 नियुक्त</span></td>
                                                    <td>
                                                        <div>राहुल शिंदे</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 2 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                        <small class="cell-sub">उत्सव · तयार: सातारा शहर पोलीस ठाणे</small>
                                                    </td>
                                                    <td>
                                                        <div>06 नोव्हें, 2026, 10:00</div>
                                                        <small class="cell-sub">ते 10 नोव्हें, 2026, 23:00</small>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">
                                                        <div><b>162</b> / <b class="text-success">0</b> / 150</div>
                                                        <small class="cell-sub text-warning">2 ठाणे प्रतिसाद प्रलंबित</small>
                                                    </td>
                                                    <td class="text-center cell-empty">—</td>
                                                    <td>
                                                        <div>राहुल शिंदे</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-dark btn-icon btn-action" title="संपादित करा">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मंजूर करा">
                                                                <i class="ri-check-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 3 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                        <small class="cell-sub">व्हीआयपी दौरा · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>18 ऑक्टो, 2026, 07:00</div>
                                                        <small class="cell-sub">ते 18 ऑक्टो, 2026, 21:00</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>90</b> / <b class="text-success">90</b> / 90</div>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">3 नियुक्त</span></td>
                                                    <td>
                                                        <div>नीलेश जाधव</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 4 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">दसरा मिरवणूक – फलटण</div>
                                                        <small class="cell-sub">धार्मिक मिरवणूक / यात्रा · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>20 ऑक्टो, 2026, 15:00</div>
                                                        <small class="cell-sub">ते 20 ऑक्टो, 2026, 23:59</small>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">
                                                        <div><b>60</b> / <b class="text-success">50</b> / 60</div>
                                                        <small class="cell-sub text-danger">10 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">2 नियुक्त</span></td>
                                                    <td>
                                                        <div>अर्चना पवार</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 5 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">जिल्हाधिकारी कार्यालयावर मोर्चा – सातारा</div>
                                                        <small class="cell-sub">मोर्चा / रॅली · तयार: सातारा तालुका पोलीस ठाणे</small>
                                                    </td>
                                                    <td>
                                                        <div>14 ऑक्टो, 2026, 09:00</div>
                                                        <small class="cell-sub">ते 14 ऑक्टो, 2026, 19:00</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>221</b> / <b class="text-success">0</b> / 200</div>
                                                        <small class="cell-sub text-warning">2 ठाणे प्रतिसाद प्रलंबित</small>
                                                    </td>
                                                    <td class="text-center cell-empty">—</td>
                                                    <td>
                                                        <div>स्वाती कदम</div>
                                                        <small class="cell-sub">अपर पोलीस अधीक्षक</small>
                                                    </td>
                                                    <td><span class="status-pill pill-danger">नामंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
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

                                                <!-- 6 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</div>
                                                        <small class="cell-sub">उत्सव · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>25 सप्टें, 2026, 06:00</div>
                                                        <small class="cell-sub">ते 26 सप्टें, 2026, 14:00</small>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">
                                                        <div><b>300</b> / <b class="text-success">285</b> / 300</div>
                                                        <small class="cell-sub text-danger">15 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">5 नियुक्त</span></td>
                                                    <td>
                                                        <div>विजय मोहिते</div>
                                                        <small class="cell-sub">पोलीस अधीक्षक</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
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
                    <!-- ========== End बंदोबस्त यादी ========== -->


                    <!-- =====================================================
                     प्रलंबित
                     ===================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-section" id="pendingList">

                                <!-- Card header: title + search + buttons -->
                                <div class="card-header">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md">
                                            <h5 class="section-title">
                                                प्रलंबित
                                                <span class="section-count is-alert">1</span>
                                            </h5>
                                            <p class="section-desc">अंतिम मंजुरीसाठी प्रलंबित असलेले बंदोबस्त.</p>
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
                                                    <th class="min-w-md">कालावधी</th>
                                                    <th class="text-center">पोलीस ठाणी</th>
                                                    <th class="text-center">मनुष्यबळ (मागणी / स्वीकृत / आवश्यक)</th>
                                                    <th class="text-center">नियुक्त कर्मचारी</th>
                                                    <th class="min-w-md">मंजुरी प्राधिकारी</th>
                                                    <th>स्थिती</th>
                                                    <th class="col-action">कृती</th>
                                                </tr>
                                            </thead>

                                            <tbody class="list">

                                                <!-- 1 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</div>
                                                        <small class="cell-sub">उत्सव · तयार: सातारा शहर पोलीस ठाणे</small>
                                                    </td>
                                                    <td>
                                                        <div>06 नोव्हें, 2026, 10:00</div>
                                                        <small class="cell-sub">ते 10 नोव्हें, 2026, 23:00</small>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">
                                                        <div><b>162</b> / <b class="text-success">0</b> / 150</div>
                                                        <small class="cell-sub text-warning">2 ठाणे प्रतिसाद प्रलंबित</small>
                                                    </td>
                                                    <td class="text-center cell-empty">—</td>
                                                    <td>
                                                        <div>राहुल शिंदे</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-warning">अंतिम मंजुरी प्रलंबित</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-dark btn-icon btn-action" title="संपादित करा">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मंजूर करा">
                                                                <i class="ri-check-line"></i>
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
                                </div>

                                <!-- Footer: info + pagination -->
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted">नोंदी 1 ते 1 पैकी 1 दर्शवत आहे</div>
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
                    <!-- ========== End प्रलंबित ========== -->


                    <!-- =====================================================
                     मंजूर
                     ===================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-section" id="approvedList">

                                <!-- Card header: title + search + buttons -->
                                <div class="card-header">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md">
                                            <h5 class="section-title">
                                                मंजूर
                                                <span class="section-count">4</span>
                                            </h5>
                                            <p class="section-desc">मंजूर झालेले बंदोबस्त.</p>
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
                                        <table class="table data-table align-middle mb-0" id="approvedTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="min-w-lg">बंदोबस्त</th>
                                                    <th class="min-w-md">कालावधी</th>
                                                    <th class="text-center">पोलीस ठाणी</th>
                                                    <th class="text-center">मनुष्यबळ (मागणी / स्वीकृत / आवश्यक)</th>
                                                    <th class="text-center">नियुक्त कर्मचारी</th>
                                                    <th class="min-w-md">मंजुरी प्राधिकारी</th>
                                                    <th>स्थिती</th>
                                                    <th class="col-action">कृती</th>
                                                </tr>
                                            </thead>

                                            <tbody class="list">

                                                <!-- 1 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                        <small class="cell-sub">उत्सव · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>10 ऑक्टो, 2026, 16:00</div>
                                                        <small class="cell-sub">ते 20 ऑक्टो, 2026, 23:59</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>120</b> / <b class="text-success">111</b> / 120</div>
                                                        <small class="cell-sub text-danger">9 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">8 नियुक्त</span></td>
                                                    <td>
                                                        <div>राहुल शिंदे</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 2 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">व्हीआयपी दौरा – कराड</div>
                                                        <small class="cell-sub">व्हीआयपी दौरा · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>18 ऑक्टो, 2026, 07:00</div>
                                                        <small class="cell-sub">ते 18 ऑक्टो, 2026, 21:00</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>90</b> / <b class="text-success">90</b> / 90</div>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">3 नियुक्त</span></td>
                                                    <td>
                                                        <div>नीलेश जाधव</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 3 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">दसरा मिरवणूक – फलटण</div>
                                                        <small class="cell-sub">धार्मिक मिरवणूक / यात्रा · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>20 ऑक्टो, 2026, 15:00</div>
                                                        <small class="cell-sub">ते 20 ऑक्टो, 2026, 23:59</small>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">
                                                        <div><b>60</b> / <b class="text-success">50</b> / 60</div>
                                                        <small class="cell-sub text-danger">10 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">2 नियुक्त</span></td>
                                                    <td>
                                                        <div>अर्चना पवार</div>
                                                        <small class="cell-sub">उपविभागीय पोलीस अधिकारी (DySP)</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 4 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</div>
                                                        <small class="cell-sub">उत्सव · तयार: मुख्यालय</small>
                                                    </td>
                                                    <td>
                                                        <div>25 सप्टें, 2026, 06:00</div>
                                                        <small class="cell-sub">ते 26 सप्टें, 2026, 14:00</small>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">
                                                        <div><b>300</b> / <b class="text-success">285</b> / 300</div>
                                                        <small class="cell-sub text-danger">15 कमी</small>
                                                    </td>
                                                    <td class="text-center"><span class="status-pill pill-info">5 नियुक्त</span></td>
                                                    <td>
                                                        <div>विजय मोहिते</div>
                                                        <small class="cell-sub">पोलीस अधीक्षक</small>
                                                    </td>
                                                    <td><span class="status-pill pill-success">मंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                                                <i class="ri-group-line"></i>
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
                    <!-- ========== End मंजूर ========== -->


                    <!-- =====================================================
                     नामंजूर
                     ===================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-section" id="rejectedList">

                                <!-- Card header: title + search + buttons -->
                                <div class="card-header">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md">
                                            <h5 class="section-title">
                                                नामंजूर
                                                <span class="section-count">1</span>
                                            </h5>
                                            <p class="section-desc">नामंजूर केलेले बंदोबस्त.</p>
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
                                        <table class="table data-table align-middle mb-0" id="rejectedTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="min-w-lg">बंदोबस्त</th>
                                                    <th class="min-w-md">कालावधी</th>
                                                    <th class="text-center">पोलीस ठाणी</th>
                                                    <th class="text-center">मनुष्यबळ (मागणी / स्वीकृत / आवश्यक)</th>
                                                    <th class="text-center">नियुक्त कर्मचारी</th>
                                                    <th class="min-w-md">मंजुरी प्राधिकारी</th>
                                                    <th>स्थिती</th>
                                                    <th class="col-action">कृती</th>
                                                </tr>
                                            </thead>

                                            <tbody class="list">

                                                <!-- 1 -->
                                                <tr>
                                                    <td>
                                                        <div class="cell-title">जिल्हाधिकारी कार्यालयावर मोर्चा – सातारा</div>
                                                        <small class="cell-sub">मोर्चा / रॅली · तयार: सातारा तालुका पोलीस ठाणे</small>
                                                    </td>
                                                    <td>
                                                        <div>14 ऑक्टो, 2026, 09:00</div>
                                                        <small class="cell-sub">ते 14 ऑक्टो, 2026, 19:00</small>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div><b>221</b> / <b class="text-success">0</b> / 200</div>
                                                        <small class="cell-sub text-warning">2 ठाणे प्रतिसाद प्रलंबित</small>
                                                    </td>
                                                    <td class="text-center cell-empty">—</td>
                                                    <td>
                                                        <div>स्वाती कदम</div>
                                                        <small class="cell-sub">अपर पोलीस अधीक्षक</small>
                                                    </td>
                                                    <td><span class="status-pill pill-danger">नामंजूर</span></td>
                                                    <td class="col-action">
                                                        <div class="d-flex justify-content-end gap-1">
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="संपादित करा">
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
                                </div>

                                <!-- Footer: info + pagination -->
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted">नोंदी 1 ते 1 पैकी 1 दर्शवत आहे</div>
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
                    <!-- ========== End नामंजूर ========== -->

                </div><!-- container-fluid -->
            </div><!-- page-content -->

            <?php include 'component/footer.php'; ?>
        </div><!-- main-content -->

    </div><!-- layout-wrapper -->
</body>

</html>