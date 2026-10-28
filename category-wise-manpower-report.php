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
                                <!-- <h4 class="mb-sm-0">प्रवर्गनिहाय मनुष्यबळ अहवाल</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">प्रवर्गनिहाय मनुष्यबळ अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>प्रवर्गनिहाय मनुष्यबळ अहवाल</h2>
                            <p>प्रवर्गनिहाय मागणी, स्वीकृती, यादीतील नावे व तूट</p>
                        </div>

                        <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <i class="ri-filter-3-line align-bottom me-1"></i> फिल्टर
                        </button>

                    </div>

                    <div class="d-flex mx-1 align-items-center">
                        <div class="card card-animate flex-fill">
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
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">प्रवर्गनिहाय मनुष्यबळ</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>प्रवर्ग</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>यादीतील नावे</th>
                                                    <th>तूट</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>वरिष्ठ अधिकारी</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>पोलीस उपायुक्त (DCP)</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>वरिष्ठ पोलीस निरीक्षक</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>5</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>पोलीस निरीक्षक</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>11</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>सहायक पोलीस निरीक्षक</td>
                                                    <td>19</td>
                                                    <td>19</td>
                                                    <td>17</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>पोलीस हवालदार</td>
                                                    <td>59</td>
                                                    <td>56</td>
                                                    <td>56</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>पुरुष पोलीस शिपाई</td>
                                                    <td>250</td>
                                                    <td>230</td>
                                                    <td>230</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>महिला पोलीस शिपाई</td>
                                                    <td>99</td>
                                                    <td>93</td>
                                                    <td>93</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>वाहतूक पोलीस</td>
                                                    <td>58</td>
                                                    <td>56</td>
                                                    <td>46</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>सर्वसाधारण दल (आम फोर्स)</td>
                                                    <td>50</td>
                                                    <td>47</td>
                                                    <td>47</td>
                                                    <td>3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

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