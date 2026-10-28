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
                                <h4 class="mb-sm-0">सूचना
                                </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">आढावा</a></li>
                                        <li class="breadcrumb-item active">सूचना
                                        </li>
                                    </ol>
                                </div>

                            </div>
                            <!-- <div class="d-flex justify-content-between align-items-center p-3">
                                <div class="page-title">
                                    <h2>सर्व सूचना</h2>
                                    <p>आपल्याशी संबंधित प्रत्येक कृतीची सूचना</p>
                                </div> 
                            </div>
                        </div> -->
                        </div>
                        <!-- start page title end -->

                        <div class="card">
                            <!-- <div class="card-header">
                            <h4 class="card-title">सर्व सूचना</h4>
                        </div> -->

                            <div class="list-group list-group-flush" id="addNoticeModal">
                                <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#sendNoticeModal" class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="1">
                                    <i class="ri-checkbox-blank-circle-fill text-warning fs-10 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">मंजुरीसाठी नवीन बंदोबस्त</h6>
                                        <p class="mb-1 text-muted">सातारा शहर पोलीस ठाण्याने "दिवाळी बाजार गर्दी नियंत्रण" मंजुरीसाठी पाठवला.</p>
                                        <small class="text-muted">08 ऑक्टो. 2026, 11:21</small>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#sendNoticeModal"  class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="1">
                                    <i class="ri-checkbox-blank-circle-fill text-warning fs-10 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">बंदोबस्त मंजूर</h6>
                                        <p class="mb-1 text-muted">"नवरात्रोत्सव मिरवणूक" बंदोबस्त पोलीस अधीक्षक यांनी मंजूर केला.</p>
                                        <small class="text-muted">05 ऑक्टो. 2026, 16:40</small>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#sendNoticeModal"  class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="0">
                                    <i class="ri-checkbox-blank-circle-fill text-warning fs-10 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">चेहरा नोंदणी बाकी</h6>
                                        <p class="mb-1 text-muted">12 कर्मचाऱ्यांची चेहरा नोंदणी अद्याप बाकी आहे.</p>
                                        <small class="text-muted">02 ऑक्टो. 2026, 09:15</small>
                                    </div>
                                </a>
                            </div>
                            <div class="noresult text-center py-4 d-none">
                                <p class="text-muted mb-0">कोणतीही सूचना नाही.</p>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                     
                        <div class="modal fade" id="addNoticeModal" tabindex="-1" aria-labelledby="addNoticeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNoticeModalLabel">नवीन कारणे दाखवा नोटीस</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End New Notice Modal -->

                        <!-- Bandobast Details Modal (opened from a notification row) -->
                        <div class="modal fade" id="sendNoticeModal" tabindex="-1" aria-labelledby="sendNoticeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom pb-3">
                                        <h5 class="modal-title fw-bold" id="sendNoticeModalLabel">नवरात्रोत्सव बंदोबस्त – सातारा शहर</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">आदेश क्रमांक</p>
                                                    <p class="mb-0">सा.पो./बंदोबस्त/2026/B6</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">तयार करणारे</p>
                                                    <p class="mb-0">जिल्हा पोलीस मुख्यालय</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">बंदोबस्त प्रकार</p>
                                                    <p class="mb-0">उत्सव</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">स्थिती</p>
                                                    <span class="badge rounded-pill bg-success-subtle text-success w-100 text-start py-2">मंजूर</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">सुरुवात</p>
                                                    <p class="mb-0">10 ऑक्टो. 2026, 16:00</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">समाप्ती</p>
                                                    <p class="mb-0">20 ऑक्टो. 2026, 23:59</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">मंजुरी प्राधिकारी</p>
                                                    <p class="mb-0">राहुल शिंदे</p>
                                                    <small class="text-muted">(उपविभागीय पोलीस अधिकारी (DySP))</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">मनुष्यबळ मागणी / आवश्यक</p>
                                                    <p class="mb-0"><span class="fw-bold">120</span> / 120</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">ठाण्यांनी स्वीकारलेले</p>
                                                    <p class="mb-0 fw-bold text-success">111</p>
                                                    <small class="text-muted">(2/2 प्रतिसाद)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded bg-light p-3 h-100">
                                                    <p class="text-muted fs-12 mb-1">नियुक्त कर्मचारी</p>
                                                    <p class="mb-0">8</p>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="text-muted fw-semibold mt-4 mb-3">बंदोबस्त स्थळ</h6>
                                        <div class="row g-3">
                                            <div class="col-md-5">
                                                <p class="fw-bold mb-1">राजवाडा चौक, सातारा</p>
                                                <p class="text-muted mb-3">17.6868, 74.0003</p>
                                                <a href="https://www.google.com/maps?q=17.6868,74.0003" target="_blank" class="btn btn-light border">
                                                    <i class="ri-map-pin-line align-bottom me-1"></i> Google Maps
                                                </a>
                                                <a href="https://www.google.com/maps/dir/?api=1&destination=18.5204,73.8567" target="_blank" class="btn btn-light border ms-2">
                                                    <i class="ri-send-plane-line align-bottom me-1"></i> मार्ग
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="ratio ratio-16x9 border rounded overflow-hidden">
                                                    <iframe src="https://maps.google.com/maps?q=18.5204,73.8567&z=16&output=embed" loading="lazy" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light border-top">
                                        <button type="button" class="btn btn-light border" data-bs-dismiss="modal">बंद करा</button>
                                        <button type="button" class="btn btn-light border">
                                            <i class="ri-download-2-line align-bottom me-1"></i> आदेश PDF
                                        </button>
                                        <a href="duty-recruitment-attendance.php" class="btn btn-primary">
                                            <i class="ri-group-line align-bottom me-1"></i> कर्मचारी नियुक्ती व हजेरी
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->


            <?php include 'component/footer.php'; ?>
        </div>


</body>

</html>