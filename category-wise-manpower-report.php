<?php include 'component/head.php'; ?>

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
                                <h4 class="mb-sm-0">प्रवर्गनिहाय मनुष्यबळ अहवाल</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">प्रवर्गनिहाय मनुष्यबळ अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title">
                            <h2>प्रवर्गनिहाय मनुष्यबळ अहवाल</h2>
                            <p>प्रवर्गनिहाय मागणी, स्वीकृती, यादीतील नावे व तूट</p>
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
                                        <span class="avatar-title bg-danger-subtle rounded fs-3">
                                            <i class="ri-forbid-line text-danger"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">तूट</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">34</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-user-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">यादीतील नावे</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">519</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <!-- प्रवर्गनिहाय मनुष्यबळ -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">प्रवर्गनिहाय मनुष्यबळ</h5>
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
                                            <th>प्रवर्ग</th>
                                            <th class="col-num">मागणी</th>
                                            <th class="col-num">स्वीकृत</th>
                                            <th class="col-num">यादीतील नावे</th>
                                            <th class="col-num">तूट</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">वरिष्ठ अधिकारी</div></td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">2</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">पोलीस उपायुक्त (DCP)</div></td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">1</td>
                                            <td class="col-num">0</td>
                                            <td class="col-num">0</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">वरिष्ठ पोलीस निरीक्षक</div></td>
                                            <td class="col-num">6</td>
                                            <td class="col-num">6</td>
                                            <td class="col-num">5</td>
                                            <td class="col-num">0</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">पोलीस निरीक्षक</div></td>
                                            <td class="col-num">12</td>
                                            <td class="col-num">12</td>
                                            <td class="col-num">11</td>
                                            <td class="col-num">0</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">सहायक पोलीस निरीक्षक</div></td>
                                            <td class="col-num">19</td>
                                            <td class="col-num">19</td>
                                            <td class="col-num">17</td>
                                            <td class="col-num">0</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">पोलीस हवालदार</div></td>
                                            <td class="col-num">59</td>
                                            <td class="col-num">56</td>
                                            <td class="col-num">56</td>
                                            <td class="col-num">3</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">पुरुष पोलीस शिपाई</div></td>
                                            <td class="col-num">250</td>
                                            <td class="col-num">230</td>
                                            <td class="col-num">230</td>
                                            <td class="col-num">20</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">महिला पोलीस शिपाई</div></td>
                                            <td class="col-num">99</td>
                                            <td class="col-num">93</td>
                                            <td class="col-num">93</td>
                                            <td class="col-num">6</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">वाहतूक पोलीस</div></td>
                                            <td class="col-num">58</td>
                                            <td class="col-num">56</td>
                                            <td class="col-num">46</td>
                                            <td class="col-num">2</td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">सर्वसाधारण दल (आम फोर्स)</div></td>
                                            <td class="col-num">50</td>
                                            <td class="col-num">47</td>
                                            <td class="col-num">47</td>
                                            <td class="col-num">3</td>
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
