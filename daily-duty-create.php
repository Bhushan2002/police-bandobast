<?php include 'component/head.php'; ?>


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
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
                                <div>
                                    <h2 class="mb-2">नवीन दैनंदिन ड्युटी</h2>
                                    <p class="text-muted mb-0">
                                        पोलीस ठाणे स्वतः ठरवते — मंजुरी नाही; जतन करताच आदेश निवडलेल्या कर्मचाऱ्यांच्या मोबाईल ॲपमध्ये
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END heading row -->


                    <form action="Controller/BandobastController.php"
                        method="POST"
                        id="bandobastForm"> <!-- START form -->

                        <!-- ===================================== -->
                        <!-- FIRST CARD: DUTY DETAILS              -->
                        <!-- ===================================== -->
                        <div class="row"> <!-- START row 1 -->
                            <div class="col-12">
                                <div class="card"> <!-- START card 1 -->

                                    <div class="card-header">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title rounded bg-primary text-warning fw-semibold">1</span>
                                            </div>
                                            <div>
                                                <h6 class="card-title mb-0">ड्युटी तपशील</h6>
                                                <p class="text-muted mb-0 pt-1">प्रकार, दिनांक व पाळी</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body"> <!-- START card-body 1 -->

                                        <!-- Police station, Duty type, Duty name -->
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="policeStation" class="form-label">
                                                    पोलीस ठाणे <span class="text-danger">*</span>
                                                </label>
                                                <select id="policeStation" name="police_station" class="form-select" required>
                                                    <option value="" disabled>निवडा…</option>
                                                    <option value="सातारा शहर पोलीस ठाणे" selected>सातारा शहर पोलीस ठाणे</option>
                                                    <option value="शाहूपुरी पोलीस ठाणे">शाहूपुरी पोलीस ठाणे</option>
                                                    <option value="सातारा तालुका पोलीस ठाणे">सातारा तालुका पोलीस ठाणे</option>
                                                    <option value="कराड शहर पोलीस ठाणे">कराड शहर पोलीस ठाणे</option>
                                                    <option value="कराड तालुका पोलीस ठाणे">कराड तालुका पोलीस ठाणे</option>
                                                    <option value="फलटण शहर पोलीस ठाणे">फलटण शहर पोलीस ठाणे</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="dutyType" class="form-label">
                                                    ड्युटी प्रकार <b class="text-danger">*</b>
                                                </label>
                                                <select id="dutyType" name="duty_type" class="form-select" required>
                                                    <option value="" disabled>निवडा…</option>
                                                    <option value="पेट्रोलिंग / गस्त" selected>पेट्रोलिंग / गस्त</option>
                                                    <option value="नाकाबंदी">नाकाबंदी</option>
                                                    <option value="रात्र गस्त">रात्र गस्त</option>
                                                    <option value="वाहतूक नियंत्रण">वाहतूक नियंत्रण</option>
                                                    <option value="स्थिर पॉइंट">स्थिर पॉइंट</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="dutyName" class="form-label">
                                                    ड्युटीचे नाव <span class="text-muted">(ऐच्छिक)</span>
                                                </label>
                                                <input type="text" class="form-control" id="dutyName" name="duty_name"
                                                    placeholder="उदा. पोवई नाका नाकाबंदी">
                                            </div>
                                        </div>

                                        <!-- From date, To date, Shift -->
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="fromDate" class="form-label">
                                                    पासून दिनांक <span class="text-danger">*</span>
                                                </label>
                                                <input type="date" class="form-control" id="fromDate" name="from_date"
                                                    value="2026-10-16" required>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="toDate" class="form-label">
                                                    पर्यंत दिनांक <span class="text-danger">*</span>
                                                </label>
                                                <input type="date" class="form-control" id="toDate" name="to_date"
                                                    value="2026-10-16" required>

                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="shift" class="form-label">
                                                    पाळी <span class="text-danger">*</span>
                                                </label>
                                                <select id="shift" name="shift" class="form-select" required>
                                                    <option value="" selected disabled>निवडा…</option>
                                                    <option value="दिवस पाळी">दिवस पाळी (08:00–20:00)</option>
                                                    <option value="रात्र पाळी">रात्र पाळी (20:00–08:00)</option>
                                                    <option value="सकाळ पाळी">सकाळ पाळी (06:00–14:00)</option>
                                                    <option value="दुपार पाळी">दुपार पाळी (14:00–22:00)</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- END card-body 1 -->
                                </div> <!-- END card 1 -->
                            </div>
                        </div> <!-- END row 1 -->


                        <!-- ===================================== -->
                        <!-- SECOND CARD: DUTY LOCATION            -->
                        <!-- ===================================== -->
                        <div class="row"> <!-- START row 2 -->
                            <div class="col-12">
                                <div class="card"> <!-- START card 2 -->

                                    <div class="card-header">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title rounded bg-primary text-warning fw-semibold">2</span>
                                            </div>
                                            <div>
                                                <h6 class="card-title mb-0">
                                                    ड्युटी ठिकाण (Google Maps लोकेशन) <span class="text-danger">*</span>
                                                </h6>
                                                <p class="text-muted mb-0 pt-1">
                                                    सध्याचे स्थान घ्या, Google Maps लिंक पेस्ट करा किंवा अक्षांश-रेखांश टाका
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body"> <!-- START card-body 2 -->
                                        <div class="row g-4">

                                            <!-- ========== LEFT: fields ========== -->
                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label for="eventLocation" class="form-label">
                                                        स्थळाचे नाव / पत्ता <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="eventLocation" name="event_location"
                                                        placeholder="उदा. राजवाडा चौक, सातारा" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="eventMapLink" class="form-label">Google Maps लिंक (ऐच्छिक)</label>
                                                    <div class="d-flex gap-2">
                                                        <input type="text" class="form-control" id="eventMapLink" name="event_map_link"
                                                            placeholder="Google Maps मध्ये स्थान → Share → लिंक कॉपी करून येथे पेस्ट करा">
                                                        <button type="button" id="btnFromLink" class="btn btn-light text-nowrap">
                                                            <i class="ri-map-pin-line align-bottom me-1"></i> लिंकमधून घ्या
                                                        </button>
                                                    </div>
                                                    <div class="form-text">
                                                        छोटी maps.app.goo.gl लिंक ब्राउझरमध्ये उघडून पूर्ण लिंक (ज्यात @अक्षांश,रेखांश असते) पेस्ट करा,
                                                        किंवा Maps मधील निर्देशांक कॉपी करा.
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="eventLatitude" class="form-label">
                                                            अक्षांश (Latitude) <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="eventLatitude" name="event_latitude"
                                                            placeholder="17.6868" required>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="eventLongitude" class="form-label">
                                                            रेखांश (Longitude) <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="eventLongitude" name="event_longitude"
                                                            placeholder="74.0003" required>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-wrap gap-2">
                                                    <button type="button" id="btnCurrentLocation" class="btn btn-primary">
                                                        <i class="ri-navigation-line align-bottom me-1"></i> माझे सध्याचे स्थान घ्या
                                                    </button>
                                                    <button type="button" id="btnOpenMaps" class="btn btn-primary">
                                                        <i class="ri-external-link-line align-bottom me-1"></i> Google Maps उघडा
                                                    </button>
                                                </div>

                                            </div>

                                            <!-- ========== RIGHT: map box ========== -->
                                            <div class="col-lg-6">
                                                <div id="mapPreview"
                                                    class="h-100 border rounded-3 bg-light d-flex align-items-center justify-content-center text-muted text-center p-3"
                                                    style="min-height: 300px;">
                                                    स्थान निवडल्यावर नकाशा येथे दिसेल
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- END card-body 2 -->
                                </div> <!-- END card 2 -->
                            </div>
                        </div> <!-- END row 2 -->



                        <!-- ===================================== -->
                        <!-- THIRD CARD: SELECT EMPLOYEES          -->
                        <!-- ===================================== -->
                        <div class="row"> <!-- START row 3 -->
                            <div class="col-12">
                                <div class="card"> <!-- START card 3 -->

                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-xs flex-shrink-0">
                                                    <span class="avatar-title rounded bg-primary text-warning fw-semibold">3</span>
                                                </div>
                                                <div>
                                                    <h6 class="card-title mb-0">कर्मचारी निवडा</h6>
                                                    <p class="text-muted mb-0 pt-1">
                                                        आपल्या ठाण्याचे कर्मचारी — एकाच वेळी दुसऱ्या ड्युटी/बंदोबस्तावर असलेले चिन्हांकित
                                                    </p>
                                                </div>
                                            </div>
                                            <span class="fw-semibold text-nowrap" id="selectedCount">2 निवडले</span>
                                        </div>
                                    </div>

                                    <div class="card-body"> <!-- START card-body 3 -->

                                        <!-- Search -->
                                        <div class="mb-3">
                                            <input type="search" class="form-control" id="employeeSearch"
                                                placeholder="नाव / बक्कल / पदनाम शोधा...">
                                        </div>

                                        <!-- Employee grid (scrolls inside the card) -->
                                        <div class="overflow-auto pe-1" style="max-height: 290px;">
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-2">

                                                <!-- 1: busy -->
                                                <div class="col">
                                                    <label for="emp1" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp1" name="employees[]" value="4521" disabled>
                                                        <div>
                                                            <div class="">संतोष पवार</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 4521</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 2: busy -->
                                                <div class="col">
                                                    <label for="emp2" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp2" name="employees[]" value="6734" disabled>
                                                        <div>
                                                            <div class="">अमोल कदम</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 6734</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 3: busy -->
                                                <div class="col">
                                                    <label for="emp3" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp3" name="employees[]" value="4410" disabled>
                                                        <div>
                                                            <div class="">महेश घोरपडे</div>
                                                            <small class="d-block text-muted">पोलीस नाईक · बक्कल 4410</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 4: busy -->
                                                <div class="col">
                                                    <label for="emp4" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp4" name="employees[]" value="10001" disabled>
                                                        <div>
                                                            <div class="">प्रशांत शेलार</div>
                                                            <small class="d-block text-muted">वरिष्ठ पोलीस निरीक्षक · बक्कल 10001</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 5: busy -->
                                                <div class="col">
                                                    <label for="emp5" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp5" name="employees[]" value="10002" disabled>
                                                        <div>
                                                            <div class="">प्रकाश घाडगे</div>
                                                            <small class="d-block text-muted">पोलीस निरीक्षक · बक्कल 10002</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 6 -->
                                                <div class="col">
                                                    <label for="emp6" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp6" name="employees[]" value="10003">
                                                        <div>
                                                            <div class="fw-semibold">हेमंत काळे</div>
                                                            <small class="d-block text-muted">पोलीस निरीक्षक · बक्कल 10003</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 7: busy -->
                                                <div class="col">
                                                    <label for="emp7" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp7" name="employees[]" value="10004" disabled>
                                                        <div>
                                                            <div class="">राजेंद्र ढमाळ</div>
                                                            <small class="d-block text-muted">सहायक पोलीस निरीक्षक · बक्कल 10004</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 8: busy -->
                                                <div class="col">
                                                    <label for="emp8" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp8" name="employees[]" value="10005" disabled>
                                                        <div>
                                                            <div class="">रविंद्र देशमुख</div>
                                                            <small class="d-block text-muted">सहायक पोलीस निरीक्षक · बक्कल 10005</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 9 -->
                                                <div class="col">
                                                    <label for="emp9" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp9" name="employees[]" value="10006">
                                                        <div>
                                                            <div class="fw-semibold">विशाल वाघमारे</div>
                                                            <small class="d-block text-muted">सहायक पोलीस निरीक्षक · बक्कल 10006</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 10: busy -->
                                                <div class="col">
                                                    <label for="emp10" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp10" name="employees[]" value="10007" disabled>
                                                        <div>
                                                            <div class="">स्वप्नील शिंदे</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10007</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 11: busy -->
                                                <div class="col">
                                                    <label for="emp11" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp11" name="employees[]" value="10008" disabled>
                                                        <div>
                                                            <div class="">प्रशांत घाडगे</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10008</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 12: busy -->
                                                <div class="col">
                                                    <label for="emp12" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp12" name="employees[]" value="10009" disabled>
                                                        <div>
                                                            <div class="">अक्षय कदम</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10009</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 13: busy -->
                                                <div class="col">
                                                    <label for="emp13" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 opacity-50">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp13" name="employees[]" value="10010" disabled>
                                                        <div>
                                                            <div class="">बाळासाहेब यादव</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10010</small>
                                                            <small class="d-block text-danger">इतरत्र: नवरात्रोत्सव बंदोबस्त – सातारा</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 14: selected -->
                                                <div class="col">
                                                    <label for="emp14" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 border-success bg-success bg-opacity-10">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp14" name="employees[]" value="10011" checked>
                                                        <div>
                                                            <div class="">विकास जाधव</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10011</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 15: selected -->
                                                <div class="col">
                                                    <label for="emp15" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0 border-success bg-success bg-opacity-10">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp15" name="employees[]" value="10012" checked>
                                                        <div>
                                                            <div class="">महादेव पिसाळ</div>
                                                            <small class="d-block text-muted">पोलीस हवालदार · बक्कल 10012</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 16 -->
                                                <div class="col">
                                                    <label for="emp16" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp16" name="employees[]" value="10013">
                                                        <div>
                                                            <div class="">प्रकाश मोहिते</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 10013</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 17 -->
                                                <div class="col">
                                                    <label for="emp17" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp17" name="employees[]" value="10014">
                                                        <div>
                                                            <div class="">महादेव माने</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 10014</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 18 -->
                                                <div class="col">
                                                    <label for="emp18" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp18" name="employees[]" value="10015">
                                                        <div>
                                                            <div class="">दीपक शेलार</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 10015</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 19 -->
                                                <div class="col">
                                                    <label for="emp19" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp19" name="employees[]" value="10016">
                                                        <div>
                                                            <div class="">अक्षय निकम</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 10016</small>
                                                        </div>
                                                    </label>
                                                </div>

                                                <!-- 20 -->
                                                <div class="col">
                                                    <label for="emp20" class="d-flex align-items-start gap-2 h-100 border rounded-3 p-2 mb-0">
                                                        <input class="form-check-input flex-shrink-0 m-0 mt-1" type="checkbox" id="emp20" name="employees[]" value="10017">
                                                        <div>
                                                            <div class="">विकास पिसाळ</div>
                                                            <small class="d-block text-muted">पोलीस शिपाई · बक्कल 10017</small>
                                                        </div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                    </div> <!-- END card-body 3 -->
                                </div> <!-- END card 3 -->
                            </div>
                        </div> <!-- END row 3 -->


                        <!-- ===================================== -->
                        <!-- FOURTH CARD: INSTRUCTIONS             -->
                        <!-- ===================================== -->
                        <div class="row"> <!-- START row 4 -->
                            <div class="col-12">
                                <div class="card"> <!-- START card 4 -->

                                    <div class="card-header">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title rounded bg-primary text-warning fw-semibold">4</span>
                                            </div>
                                            <div>
                                                <h6 class="card-title mb-0">सूचना</h6>
                                                <p class="text-muted mb-0 pt-1">कर्मचाऱ्यांना आदेशात दिसणाऱ्या सूचना</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body"> <!-- START card-body 4 -->

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="instructionTemplate" class="form-label">सूचना नमुना</label>
                                                <select id="instructionTemplate" name="instruction_template" class="form-select">
                                                    <option value="" selected>निवडा...</option>
                                                    <option value="नाकाबंदी">नाकाबंदी – वाहन तपासणी</option>
                                                    <option value="रात्र गस्त">रात्र गस्त – संशयास्पद हालचाली</option>
                                                    <option value="वाहतूक">वाहतूक नियंत्रण</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <label for="instructions" class="form-label">सूचना</label>
                                            <textarea id="instructions" name="instructions" class="form-control" rows="4"
                                                placeholder="उदा. वाहन तपासणी करावी, संशयास्पद व्यक्तींची नोंद ठेवावी"></textarea>
                                        </div>

                                    </div> <!-- END card-body 4 -->
                                </div> <!-- END card 4 -->
                            </div>
                        </div> <!-- END row 4 -->









                        <!-- ===================================== -->
                        <!-- FORM BUTTONS                          -->
                        <!-- ===================================== -->
                        <div class="row mb-4"> <!-- START buttons row -->
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">

                                    <a href="all-bandobast.php" class="btn btn-light w-lg waves-effect waves-light btn-lg ">
                                        रद्द करा
                                    </a>

                                    <button type="submit" class="btn btn-primary w-lg waves-effect waves-light btn-lg d-flex align-items-center">

                                        ड्युटी तयार करा — मोबाईल ॲपवर पाठवा
                                    </button>

                                </div>
                            </div>
                        </div> <!-- END buttons row -->

                    </form> <!-- END form -->

                </div> <!-- END container-fluid -->
            </div> <!-- END page-content -->

            <!-- Footer (include here if needed) -->

        </div> <!-- END main-content -->
    </div> <!-- END layout-wrapper -->


    <!-- Back to Top -->
    <button onclick="topFunction()"
        class="btn btn-danger btn-icon"
        id="back-to-top"
        type="button">
        <i class="ri-arrow-up-line"></i>
    </button>

    <?php include 'component/footer.php' ?>

    <!-- Bootstrap JS (needed for sidebar dropdowns, tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>