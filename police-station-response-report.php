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
                                <!-- <h4 class="mb-sm-0">पोलीस ठाणे प्रतिसाद अहवाल</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">पोलीस ठाणे प्रतिसाद अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>पोलीस ठाणे प्रतिसाद अहवाल</h2>
                            <p>मनुष्यबळ मागणीवर ठाण्यांचे प्रतिसाद — पूर्ण / अंशतः / नाकार / प्रलंबित</p>
                        </div>

                        <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <i class="ri-filter-3-line align-bottom me-1"></i> फिल्टर
                        </button>
                    </div>

                    <div class="d-flex  align-items-center">
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
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">कारणनिहाय — अंशतः मंजुरी / नामंजुरी</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>कारण (नाकारण्याचा नमुना)</th>
                                                    <th>अंशतः मंजूर</th>
                                                    <th>नामंजूर</th>
                                                    <th>कमी पडलेले मनुष्यबळ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>24</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>कर्मचारी अन्य बंदोबस्तावर</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>कर्मचारी रजेवर</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>आधीच अन्य बंदोबस्त नियोजित</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>25</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>प्रशिक्षणासाठी कर्मचारी प्रतिनियुक्त</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>न्यायालयीन कामकाज / साक्ष</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>रात्र गस्त व नाकाबंदी</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>निवडणूक कर्तव्यासाठी राखीव</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>वाहन / साधनसामग्रीची कमतरता</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>अपुरी पूर्वसूचना</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>12</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- पोलीस ठाणे प्रतिसाद तपशील -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">पोलीस ठाणे प्रतिसाद तपशील</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>बंदोबस्त</th>
                                                    <th>पोलीस ठाणे</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>यादी</th>
                                                    <th>प्रतिसाद</th>
                                                    <th>दिनांक</th>
                                                    <th>कारण (नमुना)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>79</td>
                                                    <td>79</td>
                                                    <td>79/79</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">पूर्ण मंजूर</span>
                                                    </td>
                                                    <td>06 ऑक्टो, 2026</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>41</td>
                                                    <td>32</td>
                                                    <td>32/32</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-warning-subtle text-warning">अंशतः मंजूर</span>
                                                    </td>
                                                    <td>06 ऑक्टो, 2026</td>
                                                    <td>स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>व्हीआयपी दौरा – कराड</td>
                                                    <td>कराड शहर पोलीस ठाणे</td>
                                                    <td>70</td>
                                                    <td>70</td>
                                                    <td>67/70</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">पूर्ण मंजूर</span>
                                                    </td>
                                                    <td>09 ऑक्टो, 2026</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>व्हीआयपी दौरा – कराड</td>
                                                    <td>कराड तालुका पोलीस ठाणे</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20/20</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">पूर्ण मंजूर</span>
                                                    </td>
                                                    <td>10 ऑक्टो, 2026</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>दसरा मिरवणूक – फलटण</td>
                                                    <td>फलटण शहर पोलीस ठाणे</td>
                                                    <td>60</td>
                                                    <td>50</td>
                                                    <td>50/50</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-warning-subtle text-warning">अंशतः मंजूर</span>
                                                    </td>
                                                    <td>06 ऑक्टो, 2026</td>
                                                    <td>कर्मचारी अन्य बंदोबस्तावर</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>150</td>
                                                    <td>150</td>
                                                    <td>137/150</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">पूर्ण मंजूर</span>
                                                    </td>
                                                    <td>11 सप्टें, 2026</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>90</td>
                                                    <td>90</td>
                                                    <td>89/90</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">पूर्ण मंजूर</span>
                                                    </td>
                                                    <td>11 सप्टें, 2026</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</td>
                                                    <td>सातारा तालुका पोलीस ठाणे</td>
                                                    <td>60</td>
                                                    <td>45</td>
                                                    <td>45/45</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-warning-subtle text-warning">अंशतः मंजूर</span>
                                                    </td>
                                                    <td>12 सप्टें, 2026</td>
                                                    <td>स्थानिक कायदा-सुव्यवस्थेसाठी राखीव</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>यात्रा बंदोबस्त – वाई</td>
                                                    <td>वाई पोलीस ठाणे</td>
                                                    <td>40</td>
                                                    <td>30</td>
                                                    <td>30/30</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-warning-subtle text-warning">अंशतः मंजूर</span>
                                                    </td>
                                                    <td>14 ऑक्टो, 2026</td>
                                                    <td>कर्मचारी रजेवर</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>पर्यटन हंगाम बंदोबस्त – महाबळेश्वर</td>
                                                    <td>महाबळेश्वर पोलीस ठाणे</td>
                                                    <td>25</td>
                                                    <td>0</td>
                                                    <td>0/0</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-danger-subtle text-danger">नामंजूर</span>
                                                    </td>
                                                    <td>15 ऑक्टो, 2026</td>
                                                    <td>आधीच अन्य बंदोबस्त नियोजित</td>
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