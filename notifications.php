<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&display=swap" rel="stylesheet">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
    <style>
        .gridjs-table {
            table-layout: auto;
        }
    </style>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>


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
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <div class="page-title">
                                    <h2>सूचना</h2>
                                    <p>आपल्याशी संबंधित प्रत्येक कृतीची सूचना</p>
                                </div>
                                <!-- <div class="d-flex">
                                    <button type="button" class="btn btn-soft-secondary waves-effect material-shadow-none"> <span class="ri-file-excel-line"></span>
                                        <span class="px-2">Excel (CSV)</span></button>

                                    <button type="button" class="btn btn-secondary waves-effect waves-light d-flex align-items-center mx-1" data-bs-toggle="modal">
                                        <span class="ri-file-pdf-line"></span>
                                        <span class="px-2">PDF अहवाल</span>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- start page title end -->

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills d-inline-flex bg-light border rounded p-1 gap-1" id="notificationFilter" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link active py-1 px-3" data-filter="all">
                                        सर्व <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="all"></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link py-1 px-3" data-filter="unread">
                                        न वाचलेल्या <span class="badge bg-secondary-subtle text-secondary ms-1" data-count="unread"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="list-group list-group-flush" id="notificationList">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="1">
                                <i class="ri-checkbox-blank-circle-fill text-warning fs-10 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">मंजुरीसाठी नवीन बंदोबस्त</h6>
                                    <p class="mb-1 text-muted">सातारा शहर पोलीस ठाण्याने "दिवाळी बाजार गर्दी नियंत्रण" मंजुरीसाठी पाठवला.</p>
                                    <small class="text-muted">08 ऑक्टो. 2026, 11:21</small>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="1">
                                <i class="ri-checkbox-blank-circle-fill text-warning fs-10 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">बंदोबस्त मंजूर</h6>
                                    <p class="mb-1 text-muted">"नवरात्रोत्सव मिरवणूक" बंदोबस्त पोलीस अधीक्षक यांनी मंजूर केला.</p>
                                    <small class="text-muted">05 ऑक्टो. 2026, 16:40</small>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex gap-2 py-3" data-unread="0">
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
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


        <?php include 'component/footer.php'; ?>
    </div>

    <!-- Bootstrap JS (needed for tabs and modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // सर्व / न वाचलेल्या filter + counts; clicking an unread notification marks it read
        (function () {
            var list = document.getElementById('notificationList');
            var items = Array.prototype.slice.call(list.querySelectorAll('.list-group-item'));
            var tabs = document.querySelectorAll('#notificationFilter .nav-link');
            var noResult = list.parentNode.querySelector('.noresult');
            var filter = 'all';

            function isUnread(item) { return item.getAttribute('data-unread') === '1'; }

            function render() {
                var shown = 0;
                items.forEach(function (item) {
                    var show = filter === 'all' || isUnread(item);
                    item.classList.toggle('d-none', !show);
                    if (show) shown++;
                });
                document.querySelector('[data-count="all"]').textContent = items.length;
                document.querySelector('[data-count="unread"]').textContent = items.filter(isUnread).length;
                noResult.classList.toggle('d-none', shown > 0);
            }

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabs.forEach(function (t) { t.classList.toggle('active', t === tab); });
                    filter = tab.getAttribute('data-filter');
                    render();
                });
            });

            // No backend yet: read state lives only on the page
            items.forEach(function (item) {
                item.addEventListener('click', function () {
                    item.setAttribute('data-unread', '0');
                    render();
                });
            });

            render();
        })();
    </script>
</body>

</html>