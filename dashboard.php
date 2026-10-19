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

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
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
                                <h4 class="mb-sm-0">डॅशबोर्ड</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">डॅशबोर्ड</a></li>

                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title">
                            <h2>डॅशबोर्ड</h2>
                            <!-- <p>सर्व निर्देशक एकाच ठिकाणी</p> -->
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center">
                                <span class="mdi mdi-plus"></span>
                                <span class="px-2"> नवीन बंदोबस्त</span>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap mx-2 align-items-center">
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-shield-check-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">एकूण बंदोबस्त</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">6</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class=" ri-time-line text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">चालू बंदोबस्त (आज)</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">1</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class=" ri-camera-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">आजची हजेरी</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">0/8</h3>
                                        <!-- <small class="text-muted">94%</small> -->
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-group-line  text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">मागणी केलेले मनुष्यबळ</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">732</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class=" ri-file-forbid-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नोटीस प्रलंबित</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">1</h3>
                                        <!-- <small class="text-muted">9/58</small> -->
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <!-- chart -->
                    <div class="row">


                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">दिनांकनिहाय हजेरी</h4>
                                    <p>मागील 21 दिवस · चेहरा-पडताळणी ॲप हजेरी</p>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="column_chart_datalabel" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">कार्य प्रगती</h4>
                                    <p>सध्याची स्थिती</p>
                                </div>
                                <div class="card-body">
                                    <div class="my-3">

                                        <div class="mb-2">मनुष्यबळ पूर्तता (मंजूर / मागणी)</div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>536 / 732</small>
                                    </div>

                                    <div class="my-3">

                                        <div class="mb-2">ठाण्यांचा प्रतिसाद</div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" style="width: 82%" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>9 / 11</small>
                                    </div>
                                    <div class="my-3">

                                        <div class="mb-2">21 दिवसांची उपस्थिती</div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" style="width: 5%;" role="progressbar" aria-valuenow="5" aria-valuemin="20" aria-valuemax="100"></div>
                                        </div>
                                        <small>4 / 75</small>
                                    </div>
                                    <div class="my-3">

                                        <div class="mb-2">चेहरा नोंदणी</div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>0 / 930</small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">पोलीस ठाणेनिहाय मनुष्यबळ</h4>
                                    <p>मागणी विरुद्ध मंजूर · नामंजूर बंदोबस्त वगळून</p>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="grouped_bar" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">बंदोबस्त स्थिती</h4>
                                    <p>एकूण 6</p>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="simple_dount_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-md">
                                            <h5 class="card-title mb-0">आगामी व चालू बंदोबस्त</h5>
                                            <p>मंजूर मनुष्यबळाच्या प्रगतीसह</p>
                                        </div>
                                        <div class="col-md-auto">
                                            <div class="d-flex flex-wrap align-items-center ">
                                                <button type="button" class="btn btn-soft-secondary">
                                                    सर्व पहा
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
                                                    <th class="col-num">दिनांक</th>
                                                    <th class="col-num">बंदोबस्त</th>
                                                    <th class="col-num">मागणी</th>
                                                    <th class="col-num">नियुक्त</th>
                                                    <th class="col-num">स्थिती</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>10 ऑक्टो</td>
                                                    <td class="col-num">
                                                        <span>नवरात्रोत्सव बंदोबस्त – सातारा शहर </span>
                                                        <small>उत्सव</small>

                                                    </td>
                                                    <td class="col-num">120</td>
                                                    <td class="col-num">

                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-num"><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                                </tr>

                                                <tr>
                                                    <td>10 ऑक्टो</td>
                                                    <td class="col-num">
                                                        <span>नवरात्रोत्सव बंदोबस्त – सातारा शहर </span>
                                                        <small>उत्सव</small>

                                                    </td>
                                                    <td class="col-num">120</td>
                                                    <td class="col-num">

                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-num"><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                                </tr>

                                                <tr>
                                                    <td>10 ऑक्टो</td>
                                                    <td class="col-num">
                                                        <span>नवरात्रोत्सव बंदोबस्त – सातारा शहर </span>
                                                        <small>उत्सव</small>

                                                    </td>
                                                    <td class="col-num">120</td>
                                                    <td class="col-num">

                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-num"><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                                </tr>

                                                <tr>
                                                    <td>10 ऑक्टो</td>
                                                    <td class="col-num">
                                                        <span>नवरात्रोत्सव बंदोबस्त – सातारा शहर </span>
                                                        <small>उत्सव</small>

                                                    </td>
                                                    <td class="col-num">120</td>
                                                    <td class="col-num">

                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-num"><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                                </tr>

                                                <tr>
                                                    <td>10 ऑक्टो</td>
                                                    <td class="col-num">
                                                        <span>नवरात्रोत्सव बंदोबस्त – सातारा शहर </span>
                                                        <small>उत्सव</small>

                                                    </td>
                                                    <td class="col-num">120</td>
                                                    <td class="col-num">

                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-num"><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
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
                                            <div class="text-muted">नोंदी 1 ते 8 पैकी 8 दर्शवत आहे</div>
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
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">प्रवर्गनिहाय मनुष्यबळ</h5>
                                    <p>प्रलंबित + मंजूर</p>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3 ">
                                        <span class="col-4">पुरुष पोलीस शिपाई</span>
                                        <div class="progress mx-2" style="width: 60%;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>317</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="col-4">महिला पोलीस शिपाई</span>
                                        <div class="progress mx-2" style="width: 60%;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>131</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="col-4">पोलीस हवालदार</span>
                                        <div class="progress mx-2" style="width: 60%;">
                                            <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>77</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="col-4">वाहतूक पोलीस</span>
                                        <div class="progress mx-2" style="width: 60%;">
                                            <div class="progress-bar" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>72</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="col-4">सर्वसाधारण दल (आम फोर्स)</span>
                                        <div class="progress mx-2" style="width: 60%;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>313</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
        <?php include 'component/footer.php'; ?>
    </div>

    <!-- ApexCharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script>
        // resolve data-colors (CSS vars like "--vz-success") into actual color values
        function getChartColorsArray(id) {
            var el = document.getElementById(id);
            if (!el) return null;
            var colors = el.getAttribute('data-colors');
            if (!colors) return null;
            return JSON.parse(colors).map(function(c) {
                c = c.replace(' ', '');
                return getComputedStyle(document.documentElement).getPropertyValue(c).trim() || c;
            });
        }

        var columnDatalabelColors = getChartColorsArray('column_chart_datalabel');
        if (columnDatalabelColors) {
            new ApexCharts(document.querySelector('#column_chart_datalabel'), {
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            position: 'top'
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ['#adb5bd']
                    }
                },
                series: [{
                    name: 'Bandobast',
                    data: [12, 18, 25, 40, 22, 30, 28, 19, 35, 14, 26, 9]
                }],
                colors: columnDatalabelColors,
                grid: {
                    borderColor: '#f1f1f1'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        show: false
                    }
                }
            }).render();
        }
    </script>
</body>

</html>