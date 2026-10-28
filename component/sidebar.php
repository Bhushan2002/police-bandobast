<!-- ========== App Menu (Velzon structure) ========== -->
<div class="app-menu navbar-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light logo (dark sidebar) -->
        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <span class="d-flex align-items-center gap-2 py-3">
                    <img src="assets/images/logo.png" alt="" height="48"
                        class="rounded-2 p-1">
                    <span class="text-start lh-sm">
                        <span class="d-block text-white fw-semibold fs-16">बंदोबस्त व्यवस्थापन प्रणाली</span>
                        <!-- <span class="brandSub d-block">बंदोबस्त व्यवस्थापन प्रणाली</span> -->
                    </span>
                </span>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">

                <!-- ===== आढावा ===== -->
                <li class="menu-title"><span>आढावा</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="dashboard.php"><i class="ri-home-4-line"></i> <span>डॅशबोर्ड</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="notifications.php"><i class="ri-notification-3-line"></i> <span>सूचना</span></a></li>

                <!-- ===== बंदोबस्त ===== -->
                <li class="menu-title"><span>बंदोबस्त</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="bandobast-list.php"><i class="ri-shield-check-line"></i> <span>सर्व बंदोबस्त</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="bandobast-create.php"><i class="ri-add-line"></i> <span>नवीन बंदोबस्त</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="force-request.php"><i class="ri-group-line"></i> <span>मनुष्यबळ विनंत्या</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="daily-duty.php"><i class="ri-calendar-todo-line"></i> <span>सर्व दैनंदिन ड्युटी</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="daily-duty-create.php"><i class="ri-calendar-event-line"></i> <span>नवीन दैनंदिन ड्युटी</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="duty-recruitment-attendance.php"><i class="ri-user-follow-line"></i> <span>कर्मचारी व हजेरी</span></a></li>

                <!-- ===== हजेरी व शिस्त ===== -->
                <li class="menu-title"><span>हजेरी व शिस्त</span></li>
                <!-- <li class="nav-item"><a class="nav-link menu-link" href="show-cause-notice.php"><i class="ri-file-warning-line"></i> <span>कारणे दाखवा नोटीस</span></a></li> -->
                <li class="nav-item"><a class="nav-link menu-link" href="absent-notice-pending.php"><i class="ri-user-unfollow-line"></i> <span>गैरहजर - नोटीस बाकी</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="disclosure-pending.php"><i class="ri-time-line"></i> <span>खुलासा प्रलंबित</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="received-disclosure.php"><i class="ri-inbox-archive-line"></i> <span>खुलासा प्राप्त</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="proceeding-complete.php"><i class="ri-checkbox-circle-line"></i> <span>कार्यवाही पूर्ण</span></a></li>

                <!-- ===== अहवाल ===== -->
                <li class="menu-title"><span>अहवाल</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="bandobast-report.php"><i class="ri-shield-check-line"></i> <span>बंदोबस्तनिहाय अहवाल</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="police-station-wise-report.php"><i class="ri-map-pin-line"></i> <span>पोलीस ठाणेनिहाय अहवाल</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="attendence-report.php"><i class="ri-time-line"></i> <span>हजेरी अहवाल</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="absence-and-showcause-notices-report.php"><i class="ri-file-warning-line"></i> <span>गैरहजेरी व नोटीस अहवाल</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="category-wise-manpower-report.php"><i class="ri-stack-line"></i> <span>प्रवर्गनिहाय मनुष्यबळ</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="police-station-response-report.php"><i class="ri-chat-check-line"></i> <span>ठाणे प्रतिसाद अहवाल</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="consolidated-summary-report.php"><i class="ri-file-list-3-line"></i> <span>एकत्रित सारांश</span></a></li>

                <!-- ===== मास्टर्स ===== -->
                <li class="menu-title"><span>मास्टर्स</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="designation.php"><i class="ri-award-line"></i> <span>पदनाम</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="department.php"><i class="ri-building-2-line"></i> <span>विभाग</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="senior-officer.php"><i class="ri-user-star-line"></i> <span>वरिष्ठ अधिकारी</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="headquarter.php"><i class="ri-government-line"></i> <span>मुख्यालय</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="police-station.php"><i class="ri-map-pin-line"></i> <span>पोलीस ठाणे</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="shift.php"><i class="ri-time-line"></i> <span>शिफ्ट</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="bandobast-type.php"><i class="ri-list-check-2"></i> <span>बंदोबस्त प्रकार</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="employees.php"><i class="ri-smartphone-line"></i> <span>कर्मचारी (ॲप)</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="face-registration.php"><i class="ri-user-smile-line"></i> <span>चेहरा नोंदणी</span></a></li>

                <!-- ===== नमुने ===== -->
                <li class="menu-title"><span>नमुने</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="rejection-template.php"><i class="ri-file-copy-2-line"></i> <span>निर्णय / कारण नमुने</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="special-instruction-template.php"><i class="ri-information-line"></i> <span>विशेष सूचना</span></a></li>

                <!-- ===== सेटिंग्ज ===== -->
                <li class="menu-title"><span>सेटिंग्ज</span></li>
                <li class="nav-item"><a class="nav-link menu-link" href="digital-signature-setting.php"><i class="ri-quill-pen-line"></i> <span>माझी डिजिटल स्वाक्षरी</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="setting.php"><i class="ri-settings-3-line"></i> <span>हजेरी नियम व लेटरहेड</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="users.php"><i class="ri-user-settings-line"></i> <span>वापरकर्ते</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link" href="audit-log.php"><i class="ri-history-line"></i> <span>ऑडिट लॉग</span></a></li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->

<!-- Vertical Overlay -->
<div class="vertical-overlay"></div>