<?php include 'component/head.php'; ?>

<body>
    <div class="layout-wrapper">
        <?php include 'component/header.php'; ?>
        <?php include 'component/sidebar.php'; ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <!-- <div class="row">
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
                    </div> -->

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>डॅशबोर्ड</h2>
                           <p class="text-muted">सातारा जिल्हा पोलीस मुख्यालय · मुख्यालय</p>
                        </div>
                        <a href="bandobast-create.php">
                            <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center">
                                <span class="mdi mdi-plus"></span>
                                <span class="px-2"> नवीन बंदोबस्त</span>
                            </button>
                        </a>

                    </div>

                    <div class="d-flex flex-wrap m-2 align-items-center">
                        <div class="card card-animate flex-fill">
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
                                    <div id="column_stacked_chart" data-colors='["rgb(26, 199, 6)", "rgb(226, 14, 14)"]' class="apex-charts" dir="ltr"></div>
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
    <!-- <script src="assets/libs/apexcharts/apexcharts.min.js"></script> -->
    <script>
        // data-colors मधील CSS variables वरून रंग मिळवणे
        function getChartColors(id) {
            var el = document.getElementById(id);
            if (!el) return [];
            return JSON.parse(el.getAttribute('data-colors')).map(function (v) {
                var c = getComputedStyle(document.documentElement).getPropertyValue(v.trim()).trim();
                return c || v;
            });
        }

        // 1. दिनांकनिहाय हजेरी — मागील 21 दिवस (dummy data)
        var attendanceChart = new ApexCharts(document.querySelector('#column_stacked_chart'), {
            chart: { type: 'bar', height: 350, stacked: true, toolbar: { show: false } },
            series: [
                { name: 'हजर', data: [0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] },
                { name: 'गैरहजर', data: [0, 0, 0, 0, 0, 0, 0, 4, 8, 8, 8, 8, 8, 8, 8, 11, 8, 10, 0, 0, 0] }
            ],
            xaxis: {
                categories: ['3/10', '4/10', '5/10', '6/10', '7/10', '8/10', '9/10', '10/10', '11/10', '12/10', '13/10',
                    '14/10', '15/10', '16/10', '17/10', '18/10', '19/10', '20/10', '21/10', '22/10', '23/10']
            },
            plotOptions: { bar: { columnWidth: '60%', borderRadius: 4 } },
            dataLabels: { enabled: false },
            legend: { position: 'bottom' },
            colors: getChartColors('column_stacked_chart')
        });
        attendanceChart.render();

        // 2. पोलीस ठाणेनिहाय मनुष्यबळ — मागणी विरुद्ध मंजूर (dummy data)
        var stationChart = new ApexCharts(document.querySelector('#grouped_bar'), {
            chart: { type: 'bar', height: 360, toolbar: { show: false } },
            series: [
                { name: 'मागणी', data: [335, 166, 81, 70, 60, 20] },
                { name: 'मंजूर', data: [229, 122, 45, 70, 50, 20] }
            ],
            xaxis: {
                categories: ['सातारा शहर पोलीस ठाणे', 'शाहूपुरी पोलीस ठाणे', 'सातारा तालुका पोलीस ठाणे',
                    'कराड शहर पोलीस ठाणे', 'फलटण शहर पोलीस ठाणे', 'कराड तालुका पोलीस ठाणे'],
                labels: { show: false },
                axisBorder: { show: false },
                axisTicks: { show: false }
            },
            yaxis: {
                labels: { maxWidth: 220, style: { fontSize: '13px', fontWeight: 500 } }
            },
            grid: {
                xaxis: { lines: { show: false } },
                yaxis: { lines: { show: false } }
            },
            plotOptions: {
                bar: { horizontal: true, barHeight: '80%', borderRadius: 4, dataLabels: { position: 'top' } }
            },
            stroke: { show: true, width: 2, colors: ['transparent'] },
            dataLabels: { enabled: true, offsetX: 22, style: { fontSize: '11px', fontWeight: 600, colors: ['#495057'] } },
            legend: { position: 'top', horizontalAlign: 'right', markers: { radius: 2 } },
            tooltip: { shared: true, intersect: false },
            colors: getChartColors('grouped_bar')
        });
        stationChart.render();

        // 3. बंदोबस्त स्थिती — एकूण 6 (dummy data)
        var statusChart = new ApexCharts(document.querySelector('#simple_dount_chart'), {
            chart: { type: 'donut', height: 320 },
            series: [1, 2, 1, 1, 1],
            labels: ['चालू', 'मंजूर', 'प्रलंबित', 'नामंजूर', 'पूर्ण'],
            legend: { position: 'bottom' },
            dataLabels: { dropShadow: { enabled: false } },
            plotOptions: {
                pie: { donut: { labels: { show: true, total: { show: true, label: 'एकूण' } } } }
            },
            colors: getChartColors('simple_dount_chart')
        });
        statusChart.render();
    </script>

</body>

</html>