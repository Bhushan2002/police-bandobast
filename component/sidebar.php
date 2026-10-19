<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="dashboard.php" class="logo logo-dark">
            <span class="logo-sm"><img src="assets/images/logo.png" alt="" height="22"></span>
            <span class="logo-lg"><img src="assets/images/logo.png" alt="" height="17"></span>
        </a>
        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm"><img src="assets/images/logo.png" alt="" height="22"></span>
            <span class="logo-lg"><img src="assets/images/logo.png" alt="" height="50"></span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar" class="h-100">
        <div class="container-fluid simplebar-content-wrapper">

            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Menu</span></li>

                <!-- Dashboard (single link, no submenu) -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard.php">
                        <i class="ri-dashboard-2-line"></i> <span>डॅशबोर्ड</span>
                    </a>
                </li>

                <!-- Master -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuMaster" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuMaster">
                        <i class="ri-database-2-line"></i> <span>मास्टर्स</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuMaster" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="department.php" class="nav-link">विभाग</a></li>
                            <li class="nav-item"><a href="designation.php" class="nav-link">पदनाम</a></li>
                            <li class="nav-item"><a href="senior-officer.php" class="nav-link">वरिष्ठ अधिकारी</a></li>
                            <li class="nav-item"><a href="headquarter.php" class="nav-link">मुख्यालय</a></li>
                            <li class="nav-item"><a href="police-station.php" class="nav-link">पोलीस ठाणे</a></li>
                            <li class="nav-item"><a href="shift.php" class="nav-link">पाळी (शिफ्ट)</a></li>
                            <li class="nav-item"><a href="bandobast-type.php" class="nav-link">बंदोबस्त प्रकार</a></li>
                            <li class="nav-item"><a href="employees.php" class="nav-link">कर्मचारी (ॲप)</a></li>
                            <li class="nav-item"><a href="face-registration.php" class="nav-link">चेहरा नोंदणी</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Templates -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuTemplates" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuTemplates">
                        <i class="ri-file-text-line"></i> <span>नमुने</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuTemplates" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="rejection-template.php" class="nav-link">निर्णय / कारण नमुने</a></li>
                            <li class="nav-item"><a href="special-instruction-template.php" class="nav-link">विशेष सूचना नमुने</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Bandobast -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuBandobast" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuBandobast">
                        <i class="ri-shield-star-line"></i> <span>Bandobast</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuBandobast" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="bandobast-create.php" class="nav-link">Create Bandobast</a></li>
                            <li class="nav-item"><a href="bandobast-list.php" class="nav-link">Bandobast List</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Request -->
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuRequest" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuRequest">
                        <i class="ri-group-line"></i> <span>Request</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuRequest" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="force-request-form.php" class="nav-link">Station Wise Request</a></li>
                            <li class="nav-item"><a href="force-request-list.php" class="nav-link">Request List</a></li>
                            <li class="nav-item"><a href="force-request-list.php" class="nav-link">Force Request View</a></li>
                        </ul>
                    </div>
                </li> -->

                <!-- Approvals -->
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuApprovals" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuApprovals">
                        <i class="ri-checkbox-circle-line"></i> <span>Approvals</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuApprovals" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="approval-pending.php" class="nav-link">Pending</a></li>
                            <li class="nav-item"><a href="approval-approved.php" class="nav-link">Approved</a></li>
                            <li class="nav-item"><a href="approval-rejected.php" class="nav-link">Rejected</a></li>
                        </ul>
                    </div>
                </li> -->
                
                <!-- Reports -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuReports" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuReports">
                        <i class="ri-pie-chart-line"></i> <span>अहवाल</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuReports" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="bandobast-report.php" class="nav-link">बंदोबस्तनिहाय अहवाल</a></li>
                            <li class="nav-item"><a href="police-station-wise-report.php" class="nav-link">पोलीस ठाणेनिहाय अहवाल</a></li>
                            <li class="nav-item"><a href="attendence-report.php" class="nav-link">हजेरी अहवाल</a></li>
                            
                            <li class="nav-item"><a href="absence-and-showcause-notices-report.php" class="nav-link">गैरहजेरी व कारणे दाखवा नोटीस अहवाल</a></li>
                            <li class="nav-item"><a href="category-wise-manpower-report.php" class="nav-link">प्रवर्गनिहाय मनुष्यबळ अहवाल</a></li>
                            <li class="nav-item"><a href="police-station-response-report.php" class="nav-link">पोलीस ठाणे प्रतिसाद अहवाल</a></li>
                            <li class="nav-item"><a href="consolidated-summary-report.php" class="nav-link">एकत्रित सारांश अहवाल</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Settings-->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuAdmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuAdmin">
                        <i class="ri-settings-3-line"></i> <span>सेटिंग्ज</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuAdmin" data-bs-parent="#navbar-nav">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="digital-signature-setting.php" class="nav-link">माझी डिजिटल स्वाक्षरी</a></li>
                            <li class="nav-item"><a href="setting.php" class="nav-link">सेटिंग्ज</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Dark layer shown behind the menu on mobile -->
<div class="vertical-overlay"></div>