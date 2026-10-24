    <?php
    include 'component/head.php'; ?>

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
                                        <h2>गैरहजर — नोटीस बाकी</h2>
                                        <p>ही नोटीस अनुमती देण्यासाठी कारणे दाखवा</p>
                                    </div>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addNoticeModal">
                                            <span class="mdi mdi-plus"></span>
                                            <span class="px-2">नवीन नोटीस</span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start page title end -->

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <?php include 'component/search-input.php'; ?>
                                <button type="button" class="btn btn-soft-primary" data-bs-toggle="collapse"
                                    data-bs-target="#filterPanel" aria-expanded="false" aria-controls="filterPanel">
                                    <i class="ri-filter-3-line align-bottom me-1"></i> Filters
                                </button>

                            </div>
                            <div class="card-body">
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


                        <!-- गैरहजर — नोटीस बाकी -->

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

                <?php include 'component/footer.php'; ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- layout-wrapper -->
    </body>

    </html>