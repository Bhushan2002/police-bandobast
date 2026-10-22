<!-- ========== App Menu (Velzon structure) ========== -->
<div class="app-menu navbar-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light logo (dark sidebar) -->
        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="../assets/images/logo.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <span class="d-flex align-items-center gap-2 py-3">
                    <img src="../assets/images/logo.png" alt="" height="48"
                        class="rounded-2  p-1">
                    <span class="text-start lh-sm">
                        <span class="d-block text-white fw-semibold fs-16">पोलीस</span>
                        <span class="brandSub d-block">बंदोबस्त व्यवस्थापन प्रणाली</span>
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

                <li class="menu-title"><span>मेनू</span></li>

                <!-- ===== आढावा ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarOverview" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarOverview">
                        <i class="ri-dashboard-2-line"></i> <span>आढावा</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarOverview">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="dashboard.php" class="nav-link">डॅशबोर्ड</a></li>
                            <li class="nav-item">
                                <!-- <a href="notifications.php" class="nav-link">सूचना</a> -->
                                <a href="#sidebarDailyDuty" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDailyDuty">सूचना</a>
                                <div class="collapse menu-dropdown" id="sidebarDailyDuty">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item"><a href="daily-duty.php" class="nav-link">
                                                सर्व
                                            </a></li>
                                        <li class="nav-item"><a href="daily-duty-create.php" class="nav-link">
                                                न वाचलेल्या
                                            </a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ===== बंदोबस्त ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBandobast" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBandobast">
                        <i class="ri-shield-check-line"></i> <span>बंदोबस्त</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBandobast">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="bandobast-list.php" class="nav-link">सर्व बंदोबस्त</a></li>
                            <li class="nav-item"><a href="bandobast-create.php"
                                    class="nav-link menu-primary-action">नवीन बंदोबस्त</a></li>
                            <li class="nav-item"><a href="force-request.php" class="nav-link">मनुष्यबळ विनंत्या</a></li>
                            <!-- दैनंदिन ड्युटी (second-level dropdown) -->
                            <li class="nav-item">
                                <a href="#sidebarDailyDuty" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDailyDuty">दैनंदिन ड्युटी</a>
                                <div class="collapse menu-dropdown" id="sidebarDailyDuty">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item"><a href="daily-duty.php" class="nav-link">सर्व दैनंदिन
                                                ड्युटी</a></li>
                                        <li class="nav-item"><a href="daily-duty-create.php" class="nav-link">नवीन
                                                दैनंदिन ड्युटी</a></li>
                                        <li class="nav-item"><a href="duty-recruitment-attendance.php"
                                                class="nav-link">कर्मचारी व हजेरी</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ===== हजेरी व शिस्त ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAttendance" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAttendance">
                        <i class="ri-calendar-check-line"></i> <span>हजेरी व शिस्त</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAttendance">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="attendance.php" class="nav-link">हजेरी नोंदवही</a></li>
                            <li class="nav-item"><a href="leave.php" class="nav-link">रजा व्यवस्थापन</a></li>
                            <li class="nav-item">
                                <!-- <a href="show-cause-notice.php" class="nav-link">कारणे दाखवा नोटीस</a> -->

                                <a href="#sidebarDailyDuty" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDailyDuty">कारणे दाखवा नोटीस</a>
                                <div class="collapse menu-dropdown" id="sidebarDailyDuty">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item"><a href="daily-duty.php" class="nav-link">गैरहजर - नोटीस बाकी</a></li>
                                        <li class="nav-item"><a href="daily-duty-create.php" class="nav-link">खुलासा प्रलंबित</a></li>
                                        <li class="nav-item"><a href="duty-recruitment-attendance.php"
                                                class="nav-link">खुलासा प्राप्त</a></li>
                                        <li class="nav-item"><a href="duty-recruitment-attendance.php"
                                                class="nav-link">कार्यवाही पूर्ण</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ===== मास्टर्स ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMasters" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMasters">
                        <i class="ri-database-2-line"></i> <span>मास्टर्स</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMasters">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="designation.php" class="nav-link">पदनाम</a></li>
                            <li class="nav-item"><a href="department.php" class="nav-link">विभाग</a></li>
                            <li class="nav-item"><a href="senior-officer.php" class="nav-link">वरिष्ठ अधिकारी</a></li>
                            <li class="nav-item"><a href="headquarter.php" class="nav-link">मुख्यालय</a></li>
                            <li class="nav-item"><a href="police-station.php" class="nav-link">पोलीस ठाणे</a></li>
                            <li class="nav-item"><a href="shift.php" class="nav-link">शिफ्ट</a></li>
                            <li class="nav-item"><a href="bandobast-type.php" class="nav-link">बंदोबस्त प्रकार</a></li>
                            <li class="nav-item"><a href="employees.php" class="nav-link">कर्मचारी (ॲप)</a></li>
                            <li class="nav-item">
                                <!-- <a href="face-registration.php" class="nav-link">चेहरा नोंदणी</a> -->
                                <a href="#sidebarDailyDuty" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDailyDuty">चेहरा नोंदणी</a>
                                <div class="collapse menu-dropdown" id="sidebarDailyDuty">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item"><a href="daily-duty.php" class="nav-link">
                                                सर्व
                                            </a></li>
                                        <li class="nav-item"><a href="daily-duty-create.php" class="nav-link">
                                                बाकी
                                            </a></li>
                                        <li class="nav-item"><a href="duty-recruitment-attendance.php"
                                                class="nav-link">
                                                झाली
                                            </a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ===== नमुने ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTemplates" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarTemplates">
                        <i class="ri-file-copy-2-line"></i> <span>नमुने</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTemplates">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="rejection-template.php" class="nav-link">निर्णय / कारण
                                    नमुने</a></li>
                            <li class="nav-item"><a href="special-instruction-template.php" class="nav-link">विशेष सूचना</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ===== अहवाल ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarReports" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarReports">
                        <i class="ri-bar-chart-box-line"></i> <span>अहवाल</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarReports">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="bandobast-report.php" class="nav-link">बंदोबस्तनिहाय अहवाल</a>
                            </li>
                            <li class="nav-item"><a href="police-station-wise-report.php" class="nav-link">पोलीस ठाणेनिहाय अहवाल</a>
                            </li>
                            <li class="nav-item"><a href="attendence-report.php" class="nav-link">हजेरी अहवाल</a></li>
                            <li class="nav-item"><a href="absence-and-showcause-notices-report.php" class="nav-link">गैरहजेरी व नोटीस
                                    अहवाल</a></li>
                            <li class="nav-item"><a href="category-wise-manpower-report.php" class="nav-link">प्रवर्गनिहाय
                                    मनुष्यबळ</a></li>
                            <li class="nav-item"><a href="police-station-response-report.php" class="nav-link">ठाणे प्रतिसाद अहवाल</a>
                            </li>
                            <li class="nav-item"><a href="consolidated-summary-report.php" class="nav-link">एकत्रित सारांश</a></li>
                        </ul>
                    </div>
                </li>

                <!-- ===== सेटिंग्ज ===== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSettings">
                        <i class="ri-settings-3-line"></i> <span>सेटिंग्ज</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSettings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="digital-signature-setting.php" class="nav-link">माझी डिजिटल
                                    स्वाक्षरी</a></li>
                            <li class="nav-item"><a href="setting.php" class="nav-link">हजेरी नियम व
                                    लेटरहेड</a></li>
                            <li class="nav-item"><a href="users.php" class="nav-link">वापरकर्ते</a></li>
                            <li class="nav-item"><a href="audit-log.php" class="nav-link">ऑडिट लॉग</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->

<!-- Vertical Overlay -->
<div class="vertical-overlay"></div>