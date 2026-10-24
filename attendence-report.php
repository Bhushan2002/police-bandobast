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
                                <h4 class="mb-sm-0">हजेरी अहवाल</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">हजेरी अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title">
                            <h2>हजेरी अहवाल</h2>
                            <p>दिनांकनिहाय, कर्मचारीनिहाय व दैनंदिन हजेरी नोंदी (चेहरा पडताळणी व GPS सह)</p>
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
                                        <p class="fw-medium text-muted mb-0">ड्युटी-दिवस</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">50</h3>
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
                                        <p class="fw-medium text-muted mb-0">उपस्थित</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">9</h3>
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
                                        <p class="fw-medium text-muted mb-0">गैरहजर</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">41</h3>
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

                    <!-- दिनांकनिहाय हजेरी -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">दिनांकनिहाय हजेरी</h5>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed">
                                    <thead class="table-light">
                                        <tr>
                                            <th>दिनांक</th>
                                            <th >नियुक्त</th>
                                            <th>उपस्थित</th>
                                            <th>गैरहजर</th>
                                            <th>आज बाकी</th>
                                            <th>उपस्थिती %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>25 सप्टें, 2026</td>
                                            <td >5</td>
                                            <td >2</td>
                                            <td >3</td>
                                            <td >0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26 सप्टें, 2026</td>
                                            <td>5</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>4</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>
                                                <div class="progress" style="min-width: 140px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15 ऑक्टो, 2026</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>8</td>
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
                       
                    </div>

                    <!-- कर्मचारीनिहाय हजेरी -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">कर्मचारीनिहाय हजेरी</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="table table-bordered nowrap align-middle dataTable no-footer dtr-inline collapsed">
                                    <thead class="table-light">
                                        <tr>
                                            <th>कर्मचारी</th>
                                            <th>बक्कल</th>
                                            <th>पोलीस ठाणे</th>
                                            <th>ड्युटी-दिवस</th>
                                            <th>उपस्थित</th>
                                            <th>गैरहजर</th>
                                            <th>चेहरा जुळणी</th>
                                            <th>नोटीस / कार्यवाही</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>अनिल यादव</td>
                                            <td>10163</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>प्रशांत घाडगे</td>
                                            <td>10008</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>प्रिया मोरे</td>
                                            <td>7012</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>—</td>
                                            <td>खुलासा प्रलंबित</td>
                                        </tr>
                                        <tr>
                                            <td>स्वप्नील शिंदे</td>
                                            <td>10007</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>अमोल कदम</td>
                                            <td>6734</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>7</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>गणेश भोसले</td>
                                            <td>2208</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>महेश घोरपडे</td>
                                            <td >4410</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>संतोष पवार</td>
                                            <td>4521</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>7</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>अक्षय कदम</td>
                                            <td>10009</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td >2</td>
                                            <td >—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td>हेमंत पाटील</td>
                                            <td>10164</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult text-center py-4 d-none">
                                    <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- दैनंदिन हजेरी नोंदी -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">दैनंदिन हजेरी नोंदी</h5>
                                </div>
                                <div class="col-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
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
                                            <th>पोलीस ठाणे</th>
                                            <th>बंदोबस्त</th>
                                            <th>स्थिती</th>
                                            <th class="col-num">हजर</th>
                                            <th class="col-num">सुटका</th>
                                            <th class="col-num">चेहरा</th>
                                            <th>GPS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>संतोष पवार</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>अमोल कदम</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>महेश घोरपडे</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>प्रिया मोरे</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>गणेश भोसले</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>स्वप्नील शिंदे</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>अनिल यादव</td>
                                            <td>शाहूपुरी पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">15 ऑक्टो, 2026</td>
                                            <td>प्रशांत घाडगे</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-warning-subtle text-warning">आज — बाकी</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">14 ऑक्टो, 2026</td>
                                            <td>संतोष पवार</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-danger-subtle text-danger">गैरहजर</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">14 ऑक्टो, 2026</td>
                                            <td>अमोल कदम</td>
                                            <td>सातारा शहर पोलीस ठाणे</td>
                                            <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                            <td><span class="badge rounded-pill bg-danger-subtle text-danger">गैरहजर</span></td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="col-num">—</td>
                                            <td class="text-nowrap">—</td>
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
