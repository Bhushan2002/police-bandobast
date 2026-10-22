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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">कारणे दाखवा नोटीस
                                </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">हजेरी व शिस्त</a></li>
                                        <li class="breadcrumb-item active">कारणे दाखवा नोटीस
                                        </li>
                                    </ol>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <div class="page-title">
                                    <h2>कारणे दाखवा नोटीस</h2>
                                    <p>कोणत्याही कर्मचाऱ्याला नोटीस — गैरहजेरी किंवा इतर कारण; खुलासा मोबाईल ॲपमधून व कार्यवाही</p>
                                </div>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addNoticeModal">
                                        <span class="mdi mdi-plus"></span>
                                        <span class="px-2">नवीन नोटीस</span>
                                    </button>
                                    <!-- <button type="button" class="btn btn-secondary waves-effect waves-light d-flex align-items-center mx-1" data-bs-toggle="modal">
                                        <span class="ri-file-pdf-line"></span>
                                        <span class="px-2">PDF अहवाल</span>
                                    </button>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start page title end -->

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills d-inline-flex bg-light border rounded p-1 gap-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link active py-1 px-3" data-bs-toggle="pill" data-bs-target="#noticePending" role="tab" aria-selected="true">
                                        गैरहजर — नोटीस बाकी <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="noticePending"></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link py-1 px-3" data-bs-toggle="pill" data-bs-target="#replyPending" role="tab" aria-selected="false" tabindex="-1">
                                        खुलासा प्रलंबित <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="replyPending"></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link py-1 px-3" data-bs-toggle="pill" data-bs-target="#replyReceived" role="tab" aria-selected="false" tabindex="-1">
                                        खुलासा प्राप्त <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="replyReceived"></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link py-1 px-3" data-bs-toggle="pill" data-bs-target="#actionDone" role="tab" aria-selected="false" tabindex="-1">
                                        कार्यवाही पूर्ण <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="actionDone"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- गैरहजर — नोटीस बाकी -->
                            <div class="tab-pane active show" id="noticePending" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>कर्मचारी</th>
                                                <th>पोलीस ठाणे</th>
                                                <th>बंदोबस्त</th>
                                                <th>दिनांक</th>
                                                <th>ड्युटी पॉइंट</th>
                                                <th class="text-end">कृती</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">11 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">12 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">13 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">14 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">15 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">16 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">17 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">18 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">19 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">20 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger-subtle text-danger"><i class="mdi mdi-circle-medium"></i>गैरहजर</span>
                                                    <div><small class="text-muted">21 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light text-nowrap" data-bs-toggle="modal" data-bs-target="#sendNoticeModal">
                                                        <i class="ri-file-text-line align-bottom me-1"></i> नोटीस पाठवा
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="noresult text-center py-4 d-none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted"></div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <ul class="pagination pagination-separated mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- खुलासा प्रलंबित -->
                            <div class="tab-pane" id="replyPending" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>कर्मचारी</th>
                                                <th>पोलीस ठाणे</th>
                                                <th>बंदोबस्त</th>
                                                <th>दिनांक</th>
                                                <th>ड्युटी पॉइंट</th>
                                                <th class="text-end">कृती</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning"><i class="mdi mdi-circle-medium"></i>खुलासा प्रलंबित</span>
                                                    <div><small class="text-muted">10 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-soft-primary btn-sm waves-effect text-nowrap">
                                                        <i class="ri-eye-line align-bottom me-1"></i> नोटीस पहा
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="noresult text-center py-4 d-none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted"></div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <ul class="pagination pagination-separated mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- खुलासा प्राप्त -->
                            <div class="tab-pane" id="replyReceived" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>कर्मचारी</th>
                                                <th>पोलीस ठाणे</th>
                                                <th>बंदोबस्त</th>
                                                <th>दिनांक</th>
                                                <th>ड्युटी पॉइंट</th>
                                                <th class="text-end">कृती</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div class="noresult text-center py-4 d-none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted"></div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <ul class="pagination pagination-separated mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- कार्यवाही पूर्ण -->
                            <div class="tab-pane" id="actionDone" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table data-table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>कर्मचारी</th>
                                                <th>पोलीस ठाणे</th>
                                                <th>बंदोबस्त</th>
                                                <th>दिनांक</th>
                                                <th>ड्युटी पॉइंट</th>
                                                <th class="text-end">कृती</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">संतोष पवार</div>
                                                    <small class="text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                </td>
                                                <td>सातारा शहर पोलीस ठाणे</td>
                                                <td>
                                                    <div>नवरात्रोत्सव बंदोबस्त – सातारा शहर</div>
                                                    <small class="text-muted">सा.पो./बंदोबस्त/2026/B6</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill bg-success-subtle text-success"><i class="mdi mdi-circle-medium"></i>कार्यवाही पूर्ण</span>
                                                    <div><small class="text-muted">09 ऑक्टो, 2026</small></div>
                                                </td>
                                                <td>राजवाडा चौक – मुख्य प्रवेशद्वार</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-soft-primary btn-sm waves-effect text-nowrap">
                                                        <i class="ri-eye-line align-bottom me-1"></i> पहा
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="noresult text-center py-4 d-none">
                                        <p class="text-muted mb-0">कोणतीही नोंद आढळली नाही.</p>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="row align-items-center g-2">
                                        <div class="col-sm">
                                            <div class="text-muted"></div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <ul class="pagination pagination-separated mb-0"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- New Notice Modal -->
                    <div class="modal fade" id="addNoticeModal" tabindex="-1" aria-labelledby="addNoticeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNoticeModalLabel">नवीन कारणे दाखवा नोटीस</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="javascript:void(0);" id="addNoticeForm" novalidate>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="noticeEmployeeSearch" class="form-label">कर्मचारी <span class="text-danger">*</span> <span class="text-muted">(<span id="noticeEmployeeCount"></span> कर्मचारी)</span></label>
                                                <input type="search" class="form-control mb-2" id="noticeEmployeeSearch" placeholder="नाव / बक्कल / मोबाईलने शोधा…">
                                                <select class="form-select" id="noticeEmployee" name="employee" size="6" required>
                                                    <option value="10009">अक्षय कदम — पोलीस हवालदार · बक्कल 10009 · सातारा शहर पोलीस ठाणे · 9710000009</option>
                                                    <option value="10340">अक्षय कदम — पोलीस शिपाई · बक्कल 10340 · सातारा तालुका पोलीस ठाणे · 9710000340</option>
                                                    <option value="10178">अक्षय कुंभार — पोलीस हवालदार · बक्कल 10178 · शाहूपुरी पोलीस ठाणे · 9710000178</option>
                                                    <option value="10379">अक्षय कुंभार — पोलीस शिपाई · बक्कल 10379 · सातारा तालुका पोलीस ठाणे · 9710000379</option>
                                                    <option value="10543">अक्षय खरात — पोलीस शिपाई · बक्कल 10543 · कराड शहर पोलीस ठाणे · 9710000543</option>
                                                    <option value="10902">अक्षय गायकवाड — पोलीस शिपाई · बक्कल 10902 · महाबळेश्वर पोलीस ठाणे · 9710000902</option>
                                                    <option value="10215">अमोल जाधव — पोलीस नाईक · बक्कल 10215 · कराड तालुका पोलीस ठाणे · 9710000215</option>
                                                    <option value="10467">गणेश शिंदे — पोलीस शिपाई · बक्कल 10467 · वाई पोलीस ठाणे · 9710000467</option>
                                                    <option value="10611">विजय माने — सहायक पोलीस उपनिरीक्षक · बक्कल 10611 · फलटण शहर पोलीस ठाणे · 9710000611</option>
                                                    <option value="4521">संतोष पवार — पोलीस हवालदार · बक्कल 4521 · सातारा शहर पोलीस ठाणे · 9800000401</option>
                                                </select>
                                                <div class="invalid-feedback">कर्मचारी निवडा.</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeReason" class="form-label">नोटीसचे कारण <span class="text-danger">*</span></label>
                                                <select class="form-select" id="noticeReason" name="reason" required>
                                                    <option value="absent">बंदोबस्तावर गैरहजर राहणे</option>
                                                    <option value="late" selected>कर्तव्यावर उशिरा हजर राहणे</option>
                                                    <option value="leftPost">परवानगीशिवाय ड्युटी पॉइंट सोडणे</option>
                                                    <option value="negligence">कर्तव्यात कसूर</option>
                                                    <option value="misconduct">गैरवर्तन</option>
                                                    <option value="other">इतर</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeSubject" class="form-label">विषय <span class="text-muted">(इतर असल्यास लिहा)</span></label>
                                                <input type="text" class="form-control" id="noticeSubject" name="subject" required>
                                                <div class="invalid-feedback">विषय लिहा.</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeBandobast" class="form-label">संबंधित बंदोबस्त <span class="text-muted">(ऐच्छिक; गैरहजेरीसाठी आवश्यक)</span></label>
                                                <select class="form-select" id="noticeBandobast" name="bandobast">
                                                    <option value="">— नाही —</option>
                                                    <option value="B6">नवरात्रोत्सव बंदोबस्त – सातारा शहर</option>
                                                    <option value="B3">व्हीआयपी दौरा – कराड</option>
                                                    <option value="B2">दिवाळी बाजार गर्दी नियंत्रण – राजवाडा परिसर, सातारा</option>
                                                </select>
                                                <div class="invalid-feedback">गैरहजेरीसाठी बंदोबस्त निवडा.</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeDate" class="form-label">घटनेचा दिनांक <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="noticeDate" name="incident_date" required>
                                                <div class="invalid-feedback">दिनांक निवडा.</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeDeadline" class="form-label">खुलासा मुदत</label>
                                                <select class="form-select" id="noticeDeadline" name="reply_days">
                                                    <option value="1">1 दिवस</option>
                                                    <option value="3" selected>3 दिवस</option>
                                                    <option value="7">7 दिवस</option>
                                                    <option value="15">15 दिवस</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="noticeIssuer" class="form-label">नोटीस देणारे</label>
                                                <input type="text" class="form-control" id="noticeIssuer" name="issuer" value="सातारा जिल्हा पोलीस मुख्यालय">
                                            </div>
                                            <div class="col-12">
                                                <label for="noticeBody" class="form-label">नोटीस मजकूर <span class="text-muted">(बदलता येतो)</span></label>
                                                <textarea class="form-control" id="noticeBody" name="body" rows="8" required></textarea>
                                                <div class="invalid-feedback">नोटीस मजकूर लिहा.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">रद्द करा</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light d-flex align-items-center">
                                            <i class="ri-check-line"></i>
                                            <span class="px-2">नोटीस जारी करा — मोबाईल ॲपवर पाठवा</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End New Notice Modal -->

                    <!-- Send Notice Modal (opened from a row's नोटीस पाठवा button) -->
                    <div class="modal fade" id="sendNoticeModal" tabindex="-1" aria-labelledby="sendNoticeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendNoticeModalLabel">कारणे दाखवा नोटीस — <span id="sendNoticeTitleName"></span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="javascript:void(0);" id="sendNoticeForm" novalidate>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <small class="text-muted d-block">कर्मचारी</small>
                                                    <div class="fw-semibold" id="sendNoticeName"></div>
                                                    <small class="text-muted" id="sendNoticeEmployeeSub"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <small class="text-muted d-block">बंदोबस्त</small>
                                                    <div id="sendNoticeBandobast"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <small class="text-muted d-block">गैरहजर दिनांक</small>
                                                    <div><span class="fw-semibold" id="sendNoticeDate"></span> · <span id="sendNoticePoint"></span></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sendNoticeDeadline" class="form-label">खुलासा मुदत</label>
                                                <select class="form-select" id="sendNoticeDeadline" name="reply_days">
                                                    <option value="1">1 दिवस</option>
                                                    <option value="3" selected>3 दिवस</option>
                                                    <option value="7">7 दिवस</option>
                                                    <option value="15">15 दिवस</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sendNoticeIssuer" class="form-label">नोटीस देणारे</label>
                                                <input type="text" class="form-control" id="sendNoticeIssuer" name="issuer" value="सातारा जिल्हा पोलीस मुख्यालय">
                                            </div>
                                            <div class="col-12">
                                                <label for="sendNoticeBody" class="form-label">नोटीस मजकूर <span class="text-muted">(बदलता येतो)</span></label>
                                                <textarea class="form-control" id="sendNoticeBody" name="body" rows="8" required></textarea>
                                                <div class="invalid-feedback">नोटीस मजकूर लिहा.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">रद्द करा</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light d-flex align-items-center">
                                            <i class="ri-check-line"></i>
                                            <span class="px-2">नोटीस जारी करा</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Send Notice Modal -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


        <?php include 'component/footer.php'; ?>
    </div>

    <!-- Bootstrap JS (needed for tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tab counts: each pill badge shows the number of rows in its tab's table
        (function () {
            document.querySelectorAll('.page-content .tab-pane').forEach(function (pane) {
                var badge = document.querySelector('[data-count="' + pane.id + '"]');
                var table = pane.querySelector('table.data-table');
                if (badge && table) badge.textContent = table.tBodies[0].rows.length;
            });
        })();
    </script>
    <script>
        // Pagination for the .data-table in each tab (card-footer pager, 10 rows/page)
        (function () {
            var PAGE_SIZE = 10;

            document.querySelectorAll('.page-content table.data-table').forEach(function (table) {
                var tbody = table.tBodies[0];
                var card = table.closest('.card');
                var scope = table.closest('.tab-pane') || card;
                var search = card.querySelector('.search-box .search');
                var noResult = scope.querySelector('.noresult');
                var info = scope.querySelector('.card-footer .text-muted');
                var pager = scope.querySelector('.card-footer .pagination');
                var page = 1;

                var rows = Array.prototype.map.call(tbody.rows, function (tr) {
                    return { tr: tr, text: tr.textContent.replace(/\s+/g, ' ').toLowerCase() };
                });

                function pageItem(label, target, state) {
                    return '<li class="page-item' + (state ? ' ' + state : '') + '">' +
                        '<a href="#" class="page-link" data-page="' + target + '">' + label + '</a></li>';
                }

                function render() {
                    var q = search ? search.value.trim().toLowerCase() : '';
                    var matched = rows.filter(function (r) { return r.text.indexOf(q) !== -1; });
                    var pages = Math.max(1, Math.ceil(matched.length / PAGE_SIZE));
                    page = Math.min(page, pages);
                    var start = (page - 1) * PAGE_SIZE;
                    var end = Math.min(start + PAGE_SIZE, matched.length);

                    tbody.textContent = '';
                    matched.slice(start, end).forEach(function (r) { tbody.appendChild(r.tr); });

                    if (noResult) noResult.classList.toggle('d-none', matched.length > 0);
                    if (info) {
                        info.textContent = matched.length
                            ? 'नोंदी ' + (start + 1) + ' ते ' + end + ' पैकी ' + matched.length + ' दर्शवत आहे'
                            : 'नोंदी 0 पैकी 0 दर्शवत आहे';
                    }
                    if (pager) {
                        var html = pageItem('मागील', page - 1, page === 1 ? 'disabled' : '');
                        for (var i = 1; i <= pages; i++) html += pageItem(i, i, i === page ? 'active' : '');
                        html += pageItem('पुढील', page + 1, page === pages ? 'disabled' : '');
                        pager.innerHTML = html;
                    }
                }

                if (search) {
                    search.addEventListener('input', function () {
                        page = 1;
                        render();
                    });
                }
                if (pager) {
                    pager.addEventListener('click', function (e) {
                        var link = e.target.closest('.page-link');
                        if (!link) return;
                        e.preventDefault();
                        var item = link.parentNode;
                        if (item.classList.contains('disabled') || item.classList.contains('active')) return;
                        page = +link.getAttribute('data-page');
                        render();
                    });
                }
                render();
            });
        })();
    </script>
    <script>
        // New notice modal: employee search, subject from reason, auto-filled notice text, validation
        (function () {
            var MONTHS = ['जाने', 'फेब्रु', 'मार्च', 'एप्रि', 'मे', 'जून', 'जुलै', 'ऑग', 'सप्टें', 'ऑक्टो', 'नोव्हें', 'डिसें'];
            var modalEl = document.getElementById('addNoticeModal');
            var form = document.getElementById('addNoticeForm');
            var search = document.getElementById('noticeEmployeeSearch');
            var employee = document.getElementById('noticeEmployee');
            var reason = document.getElementById('noticeReason');
            var subject = document.getElementById('noticeSubject');
            var bandobast = document.getElementById('noticeBandobast');
            var date = document.getElementById('noticeDate');
            var deadline = document.getElementById('noticeDeadline');
            var body = document.getElementById('noticeBody');
            var bodyEdited = false;

            document.getElementById('noticeEmployeeCount').textContent = employee.options.length;

            function today() {
                var d = new Date();
                return d.getFullYear() + '-' + String(d.getMonth() + 1).padStart(2, '0') + '-' + String(d.getDate()).padStart(2, '0');
            }

            function formatDate(value) {
                var p = value.split('-');
                return p.length === 3 ? +p[2] + ' ' + MONTHS[+p[1] - 1] + ', ' + p[0] : '____';
            }

            function syncSubject() {
                var isOther = reason.value === 'other';
                subject.readOnly = !isOther;
                subject.value = isOther ? '' : reason.options[reason.selectedIndex].text;
                // Absence notices must name the bandobast
                bandobast.required = reason.value === 'absent';
            }

            // Notice text follows the fields until the user edits it by hand
            function fillBody() {
                if (bodyEdited) return;
                var during = bandobast.value ? ' "' + bandobast.options[bandobast.selectedIndex].text + '" बंदोबस्तादरम्यान' : '';
                body.value =
                    'आपण दिनांक ' + formatDate(date.value) + ' रोजी' + during + ' "' + (subject.value || '____') + '" याबाबत कसूर केल्याचे निदर्शनास आले आहे.\n\n' +
                    'आपले हे वर्तन कर्तव्यात कसूर करणारे असून शिस्तीस बाधा आणणारे आहे. त्यामुळे आपल्याविरुद्ध शिस्तभंगाची कारवाई का करण्यात येऊ नये, याबाबतचा आपला लेखी खुलासा ही नोटीस मिळाल्यापासून ' + deadline.value + ' दिवसांच्या आत मोबाईल ॲपद्वारे सादर करावा.\n\n' +
                    'विहित मुदतीत खुलासा प्राप्त न झाल्यास आपणास याबाबत काहीही सांगावयाचे नाही असे समजून नियमानुसार पुढील कार्यवाही करण्यात येईल.';
            }

            function resetForm() {
                form.reset();
                form.classList.remove('was-validated');
                search.value = '';
                Array.prototype.forEach.call(employee.options, function (o) { o.hidden = false; });
                date.value = today();
                bodyEdited = false;
                syncSubject();
                fillBody();
            }

            search.addEventListener('input', function () {
                var q = search.value.trim().toLowerCase();
                Array.prototype.forEach.call(employee.options, function (o) {
                    o.hidden = o.text.toLowerCase().indexOf(q) === -1;
                });
            });

            reason.addEventListener('change', function () {
                syncSubject();
                fillBody();
                if (reason.value === 'other') subject.focus();
            });
            [subject, bandobast, date].forEach(function (el) { el.addEventListener('input', fillBody); });
            deadline.addEventListener('change', fillBody);
            body.addEventListener('input', function () { bodyEdited = true; });

            modalEl.addEventListener('hidden.bs.modal', resetForm);

            // No backend yet: a valid form only closes the modal
            form.addEventListener('submit', function () {
                form.classList.add('was-validated');
                if (!form.checkValidity()) return;
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            });

            resetForm();
        })();
    </script>
    <script>
        // Send notice modal: filled from the clicked row (employee, bandobast, absent date, duty point)
        (function () {
            var modalEl = document.getElementById('sendNoticeModal');
            var form = document.getElementById('sendNoticeForm');
            var deadline = document.getElementById('sendNoticeDeadline');
            var body = document.getElementById('sendNoticeBody');
            var bodyEdited = false;
            var notice = {};

            function text(el) {
                return el ? el.textContent.replace(/\s+/g, ' ').trim() : '';
            }

            function set(id, value) {
                document.getElementById(id).textContent = value;
            }

            // Notice text follows the deadline until the user edits it by hand
            function fillBody() {
                if (bodyEdited) return;
                body.value =
                    'आपली नियुक्ती "' + notice.bandobast + '" (आदेश क्र. ' + notice.order + ') या बंदोबस्तावर दिनांक ' + notice.date + ' रोजी "' + notice.point + '" या ठिकाणी करण्यात आली होती. सदर दिवशी आपण नेमून दिलेल्या कर्तव्यावर गैरहजर आढळून आलात.\n\n' +
                    'आपले हे वर्तन कर्तव्यात कसूर करणारे असून शिस्तीस बाधा आणणारे आहे. त्यामुळे आपल्याविरुद्ध शिस्तभंगाची कारवाई का करण्यात येऊ नये, याबाबतचा आपला लेखी खुलासा ही नोटीस मिळाल्यापासून ' + deadline.value + ' दिवसांच्या आत मोबाईल ॲपद्वारे सादर करावा.\n\n' +
                    'विहित मुदतीत खुलासा प्राप्त न झाल्यास आपणास याबाबत काहीही सांगावयाचे नाही असे समजून नियमानुसार पुढील कार्यवाही करण्यात येईल.';
            }

            modalEl.addEventListener('show.bs.modal', function (e) {
                var row = e.relatedTarget ? e.relatedTarget.closest('tr') : null;
                if (!row) return;
                var cells = row.cells;
                var rank = text(cells[0].querySelector('small')).split(' · ');

                notice = {
                    name: text(cells[0].querySelector('.fw-semibold')),
                    buckle: rank[rank.length - 1],
                    station: text(cells[1]),
                    bandobast: text(cells[2].querySelector('div')),
                    order: text(cells[2].querySelector('small')),
                    date: text(cells[3].querySelector('small')),
                    point: text(cells[4])
                };

                set('sendNoticeTitleName', notice.name);
                set('sendNoticeName', notice.name);
                set('sendNoticeEmployeeSub', notice.buckle + ' · ' + notice.station);
                set('sendNoticeBandobast', notice.bandobast);
                set('sendNoticeDate', notice.date);
                set('sendNoticePoint', notice.point);

                form.reset();
                form.classList.remove('was-validated');
                bodyEdited = false;
                fillBody();
            });

            deadline.addEventListener('change', fillBody);
            body.addEventListener('input', function () { bodyEdited = true; });

            // No backend yet: a valid form only closes the modal
            form.addEventListener('submit', function () {
                form.classList.add('was-validated');
                if (!form.checkValidity()) return;
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            });
        })();
    </script>
</body>

</html>
