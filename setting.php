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
                                <h4 class="mb-sm-0">सेटिंग्ज</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">सेटिंग्ज</a></li>
                                        <li class="breadcrumb-item active">सेटिंग्ज </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title ">
                            <h2>सेटिंग्ज</h2>
                            <p>हजेरी नियम व आदेश लेटरहेड</p>
                        </div>
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            पोलीस ठाणे जोडा</button> -->
                    </div>

                    <!-- Face Match Settings Card -->
                    <div class="card">
                        <form action="javascript:void(0);">
                            <div class="card-body">
                                <h6 class="fw-semibold mb-2">चेहरा जुळणी</h6>
                                <div class="alert alert-success d-flex align-items-center gap-2 fw-medium" role="alert">
                                    <i class="ri-check-line fs-16"></i>
                                    नेहमी आवश्यक — मुख्यालयात नोंदवलेल्या चेहऱ्याशी जुळल्याशिवाय हजेरी नोंदवली जात नाही.
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="faceMatchLevel" class="form-label fw-medium">जुळणीची कडकपणा पातळी</label>
                                        <select class="form-select" id="faceMatchLevel" name="face_match_level">
                                            <option value="0.40">सैल (0.40)</option>
                                            <option value="0.50" selected>सामान्य (0.50) — शिफारस</option>
                                            <option value="0.60">कडक (0.60)</option>
                                        </select>
                                        <p class="text-muted fs-12 mt-1 mb-0">कडक = चुकीची व्यक्ती स्वीकारण्याचा धोका कमी, पण खऱ्या व्यक्तीला कधी पुन्हा प्रयत्न करावा लागू शकतो.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">जिवंतपणा (Liveness) तपासणी</label>
                                        <div class="btn-group w-100" role="group" aria-label="जिवंतपणा तपासणी">
                                            <input type="radio" class="btn-check" name="liveness_check" id="livenessOn" value="on" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="livenessOn">चालू</label>
                                            <input type="radio" class="btn-check" name="liveness_check" id="livenessOff" value="off" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="livenessOff">बंद</label>
                                        </div>
                                        <p class="text-muted fs-12 mt-1 mb-0">चालू असल्यास कर्मचाऱ्याला डोके थोडे वळवून पुन्हा सरळ पाहावे लागते — छापील फोटो/स्क्रीन दाखवून हजेरी टळते.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gpsTag" class="form-label fw-medium">GPS टॅग</label>
                                        <select class="form-select" id="gpsTag" name="gps_tag">
                                            <option value="optional" selected>ऐच्छिक — मिळाल्यास टॅग, नसल्यास "GPS नाही" नोंद (शिफारस)</option>
                                            <option value="required">आवश्यक — GPS मिळाल्याशिवाय हजेरी नोंदवली जात नाही</option>
                                            <option value="off">बंद — GPS टॅग घेतला जात नाही</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                                        <i class="ri-check-line"></i>
                                        <span class="px-2">जतन करा</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Face Match Settings Card -->

                    <!-- Letterhead & Logo Card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">आदेश लेटरहेड व लोगो</h5>
                            <p class="text-muted fs-12 mb-0">सर्व बंदोबस्त आदेश, वैयक्तिक आदेश, नोटीस व अहवाल या नावाने व लोगोसह तयार होतात</p>
                        </div>
                        <form action="javascript:void(0);">
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-lg-9">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="lhTopLine" class="form-label fw-medium">वरची ओळ</label>
                                                <input type="text" class="form-control" id="lhTopLine" name="top_line" value="महाराष्ट्र पोलीस">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhShortName" class="form-label fw-medium">लघु नाव (ॲप/लोगो)</label>
                                                <input type="text" class="form-control" id="lhShortName" name="short_name" value="सातारा पोलीस">
                                            </div>
                                            <div class="col-12">
                                                <label for="lhOfficeName" class="form-label fw-medium">कार्यालयाचे नाव</label>
                                                <input type="text" class="form-control" id="lhOfficeName" name="office_name" value="पोलीस अधीक्षक कार्यालय, सातारा">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhAddress" class="form-label fw-medium">पत्ता</label>
                                                <input type="text" class="form-control" id="lhAddress" name="address" value="पोवई नाका, सातारा – 415001">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhPhone" class="form-label fw-medium">दूरध्वनी</label>
                                                <input type="text" class="form-control" id="lhPhone" name="phone" value="02162-XXXXXX">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhOrderPrefix" class="form-label fw-medium">आदेश क्रमांक उपसर्ग</label>
                                                <input type="text" class="form-control" id="lhOrderPrefix" name="order_prefix" value="सा.पो./बंदोबस्त">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhNoticePrefix" class="form-label fw-medium">नोटीस क्रमांक उपसर्ग</label>
                                                <input type="text" class="form-control" id="lhNoticePrefix" name="notice_prefix" value="सा.पो./कानो">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhWatermark" class="form-label fw-medium">PDF वॉटरमार्क (लोगो)</label>
                                                <select class="form-select" id="lhWatermark" name="watermark">
                                                    <option value="on" selected>चालू — प्रत्येक पानावर फिकट लोगो</option>
                                                    <option value="off">बंद — वॉटरमार्क नाही</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lhWatermarkOpacity" class="form-label fw-medium">वॉटरमार्क गडदपणा: <span class="text-danger fw-semibold" id="lhWatermarkOpacityValue">7%</span></label>
                                                <input type="range" class="form-range mt-2" id="lhWatermarkOpacity" name="watermark_opacity" min="0" max="30" step="1" value="7">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Logo -->
                                    <div class="col-lg-3 text-center">
                                        <div class="border rounded p-3 d-inline-block">
                                            <img src="assets/images/mumbai%20police.png" alt="लोगो" class="avatar-xl object-fit-contain" id="lhLogoPreview">
                                        </div>
                                        <div class="mt-3">
                                            <input type="file" class="d-none" id="lhLogoFile" name="logo" accept="image/png, image/jpeg">
                                            <label for="lhLogoFile" class="btn btn-light d-inline-flex align-items-center mb-0">
                                                <i class="ri-file-line"></i>
                                                <span class="px-2">अधिकृत लोगो अपलोड</span>
                                            </label>
                                        </div>
                                        <p class="text-muted fs-12 mt-2 mb-0">सध्या डिफॉल्ट लोगो. PNG/JPG, कमाल 400 KB.</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <button type="button" class="btn btn-light d-flex align-items-center">
                                        <i class="ri-eye-line"></i>
                                        <span class="px-2">नमुना आदेश PDF</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                                        <i class="ri-check-line"></i>
                                        <span class="px-2">लेटरहेड जतन करा</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Letterhead & Logo Card -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


        <?php include 'component/footer.php'; ?>
    </div>

    <script>
        // Letterhead: show the watermark opacity value and preview the uploaded logo
        (function () {
            var opacity = document.getElementById('lhWatermarkOpacity');
            var opacityValue = document.getElementById('lhWatermarkOpacityValue');
            opacity.addEventListener('input', function () {
                opacityValue.textContent = opacity.value + '%';
            });

            var logoFile = document.getElementById('lhLogoFile');
            var logoPreview = document.getElementById('lhLogoPreview');
            logoFile.addEventListener('change', function () {
                var file = logoFile.files[0];
                if (!file) return;
                if (file.size > 400 * 1024) {
                    alert('लोगो कमाल 400 KB असावा.');
                    logoFile.value = '';
                    return;
                }
                var reader = new FileReader();
                reader.onload = function () {
                    logoPreview.src = reader.result;
                };
                reader.readAsDataURL(file);
            });
        })();
    </script>

    <!-- Bootstrap JS (needed for sidebar dropdowns, tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
