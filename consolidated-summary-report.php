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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-end bg-galaxy-transparent">
                                <!-- <h4 class="mb-sm-0">एकत्रित सारांश अहवाल</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">अहवाल</a></li>
                                        <li class="breadcrumb-item active">एकत्रित सारांश अहवाल</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>एकत्रित सारांश अहवाल</h2>
                            <p>सर्व निर्देशक एकाच ठिकाणी</p>
                        </div>

                        <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <i class="ri-filter-3-line align-bottom me-1"></i> फिल्टर
                        </button>
                    </div>

                    <div class="d-flex flex-wrap  align-items-center">
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-shield-check-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">बंदोबस्त</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">4</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class="ri-group-line text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">मागणी</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">570</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-check-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">स्वीकृत</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">536</h3>
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
                                            <i class="ri-smartphone-line text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नियुक्त</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">18</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-check-line text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">उपस्थिती</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">16%</h3>
                                        <!-- <small class="text-muted">9/58</small> -->
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-danger-subtle rounded fs-3">
                                            <i class="ri-forbid-line text-danger"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">गैरहजर</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">49</h3>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate mx-2 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="ri-file-warning-line text-warning"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="fw-medium text-muted mb-0">नोटीस</p>
                                        <h3 class="mt-1 mb-0 ff-secondary fw-semibold">2</h3>
                                        <!-- <small class="text-muted">खुलासा 1 · कार्यवाही 1</small> -->
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <!-- पोलीस ठाणेनिहाय -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>पोलीस ठाणे</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>यादीतील नावे</th>
                                                    <th>प्रतिसाद पू/अं/ना/प्र</th>
                                                    <th>नियुक्त</th>
                                                    <th>ड्युटी-दिवस</th>
                                                    <th>उपस्थित</th>
                                                    <th>गैरहजर</th>
                                                    <th>नोटीस</th>
                                                    <th>उपस्थिती %</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>229</td>
                                                    <td>229</td>
                                                    <td>216</td>
                                                    <td>2/0/0/0</td>
                                                    <td>8</td>
                                                    <td>36</td>
                                                    <td>7</td>
                                                    <td>29</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100">19%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>131</td>
                                                    <td>122</td>
                                                    <td>121</td>
                                                    <td>1/1/0/0</td>
                                                    <td>4</td>
                                                    <td>20</td>
                                                    <td>1</td>
                                                    <td>19</td>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>सातारा तालुका पोलीस ठाणे</td>
                                                    <td>60</td>
                                                    <td>45</td>
                                                    <td>45</td>
                                                    <td>0/1/0/0</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>कराड शहर पोलीस ठाणे</td>
                                                    <td>70</td>
                                                    <td>70</td>
                                                    <td>67</td>
                                                    <td>1/0/0/0</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>कराड तालुका पोलीस ठाणे</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>1/0/0/0</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>फलटण शहर पोलीस ठाणे</td>
                                                    <td>60</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>0/1/0/0</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- बंदोबस्तनिहाय -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">बंदोबस्तनिहाय</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>बंदोबस्त</th>
                                                    <th>दिनांक</th>
                                                    <th>स्थिती</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>नियुक्त</th>
                                                    <th>ड्युटी-दिवस</th>
                                                    <th>उपस्थित</th>
                                                    <th>गैरहजर</th>
                                                    <th>%</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>नवरात्रोत्सव बंदोबस्त – सातारा शहर</td>
                                                    <td>10 ऑक्टो, 2026</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">मंजूर</span>
                                                    </td>
                                                    <td>120</td>
                                                    <td>111</td>
                                                    <td>8</td>
                                                    <td>48</td>
                                                    <td>4</td>
                                                    <td>44</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">8%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>व्हीआयपी दौरा – कराड</td>
                                                    <td>18 ऑक्टो, 2026</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">मंजूर</span>
                                                    </td>
                                                    <td>90</td>
                                                    <td>90</td>
                                                    <td>3</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>दसरा मिरवणूक – फलटण</td>
                                                    <td>20 ऑक्टो, 2026</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">मंजूर</span>
                                                    </td>
                                                    <td>60</td>
                                                    <td>50</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>गणेशोत्सव विसर्जन बंदोबस्त 2026 – सातारा</td>
                                                    <td>25 सप्टें, 2026</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">मंजूर</span>
                                                    </td>
                                                    <td>300</td>
                                                    <td>285</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="progress" style="min-width: 140px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- प्रवर्गनिहाय मनुष्यबळ -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">प्रवर्गनिहाय मनुष्यबळ</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>प्रवर्ग</th>
                                                    <th>मागणी</th>
                                                    <th>स्वीकृत</th>
                                                    <th>यादीतील नावे</th>
                                                    <th>तूट</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>वरिष्ठ अधिकारी</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>पोलीस उपायुक्त (DCP)</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>वरिष्ठ पोलीस निरीक्षक</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>5</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>पोलीस निरीक्षक</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>11</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>सहायक पोलीस निरीक्षक</td>
                                                    <td>19</td>
                                                    <td>19</td>
                                                    <td>17</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>पोलीस हवालदार</td>
                                                    <td>59</td>
                                                    <td>56</td>
                                                    <td>56</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>पुरुष पोलीस शिपाई</td>
                                                    <td>250</td>
                                                    <td>230</td>
                                                    <td>230</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>महिला पोलीस शिपाई</td>
                                                    <td>99</td>
                                                    <td>93</td>
                                                    <td>93</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>वाहतूक पोलीस</td>
                                                    <td>58</td>
                                                    <td>56</td>
                                                    <td>46</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>सर्वसाधारण दल (आम फोर्स)</td>
                                                    <td>50</td>
                                                    <td>47</td>
                                                    <td>47</td>
                                                    <td>3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- कर्मचारीनिहाय हजेरी -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">कर्मचारीनिहाय हजेरी</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>कर्मचारी</th>
                                                    <th>बक्कल</th>
                                                    <th>पोलीस ठाणे</th>
                                                    <th>ड्युटी-दिवस</th>
                                                    <th>उपस्थित</th>
                                                    <th>गैरहजर</th>
                                                    <th>चेहरा जुळणी</th>
                                                    <th>नोटीस / कार्यवाही</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>अनिल यादव</td>
                                                    <td>10163</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>प्रशांत घाडगे</td>
                                                    <td>10008</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>प्रिया मोरे</td>
                                                    <td>7012</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                    <td>—</td>
                                                    <td>खुलासा प्रलंबित</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>स्वप्नील शिंदे</td>
                                                    <td>10007</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>अमोल कदम</td>
                                                    <td>6734</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>8</td>
                                                    <td>3</td>
                                                    <td>5</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>गणेश भोसले</td>
                                                    <td>2208</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>महेश घोरपडे</td>
                                                    <td>4410</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>6</td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>संतोष पवार</td>
                                                    <td>4521</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>8</td>
                                                    <td>3</td>
                                                    <td>5</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>अक्षय कदम</td>
                                                    <td>10009</td>
                                                    <td>सातारा शहर पोलीस ठाणे</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>हेमंत पाटील</td>
                                                    <td>10164</td>
                                                    <td>शाहूपुरी पोलीस ठाणे</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- कारणे दाखवा नोटीस -->
                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">कारणे दाखवा नोटीस</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>जा. क्र.</th>
                                                    <th>कर्मचारी</th>
                                                    <th>गैरहजर दिनांक</th>
                                                    <th>जारी करणारे</th>
                                                    <th>स्थिती</th>
                                                    <th>खुलासा</th>
                                                    <th>कार्यवाही</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>सा.पो./कानो/2026/001</td>
                                                    <td>अश्विनी जगताप</td>
                                                    <td>25 सप्टें, 2026</td>
                                                    <td>विजय मोहिते</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">कार्यवाही पूर्ण</span>
                                                    </td>
                                                    <td>प्राप्त</td>
                                                    <td>ताकीद (समज) देऊन बंद</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>सा.पो./कानो/2026/002</td>
                                                    <td>प्रिया मोरे</td>
                                                    <td>10 ऑक्टो, 2026</td>
                                                    <td>राहुल शिंदे</td>
                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-warning-subtle text-warning">खुलासा प्रलंबित</span>
                                                    </td>
                                                    <td>नाही</td>
                                                    <td>—</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <!-- नोटीसवरील कार्यवाही — सारांश -->
                    <div class="card p-3">
                        <div class="px-2">
                            <h4 class="page-title mb-3">नोटीसवरील कार्यवाही — सारांश</h4>
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <span class="flex-shrink-0" style="min-width: 200px;">ताकीद (समज) देऊन बंद</span>
                                <div class="progress flex-grow-1">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <b class="flex-shrink-0">1</b>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

        <!-- Filter modal -->
        <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filterModalLabel">फिल्टर</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="javascript:void(0);">
                        <div class="modal-body">
                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label class="form-label">पासून</label>
                                    <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" value="16 Aug, 2026" readonly="readonly">
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">पर्यंत</label>
                                    <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" value="14 Nov, 2026" readonly="readonly">
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">पोलीस ठाणे</label>
                                    <select class="form-select">
                                        <option value="">सर्व</option>
                                        <option value="ps1">सातारा शहर पोलीस ठाणे</option>
                                        <option value="ps2">शाहूपुरी पोलीस ठाणे</option>
                                        <option value="ps3">सातारा तालुका पोलीस ठाणे</option>
                                        <option value="ps4">कराड शहर पोलीस ठाणे</option>
                                        <option value="ps5">कराड तालुका पोलीस ठाणे</option>
                                        <option value="ps6">फलटण शहर पोलीस ठाणे</option>
                                        <option value="ps7">वाई पोलीस ठाणे</option>
                                        <option value="ps8">महाबळेश्वर पोलीस ठाणे</option>
                                    </select>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">बंदोबस्त प्रकार</label>
                                    <select class="form-select">
                                        <option value="">सर्व</option>
                                        <option value="bt1">उत्सव</option>
                                        <option value="bt2">व्हीआयपी दौरा</option>
                                        <option value="bt3">निवडणूक</option>
                                        <option value="bt4">मोर्चा / रॅली</option>
                                        <option value="bt5">क्रीडा कार्यक्रम</option>
                                        <option value="bt6">धार्मिक मिरवणूक / यात्रा</option>
                                    </select>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <label class="form-label">बंदोबस्त स्थिती</label>
                                    <select class="form-select">
                                        <option value="">सर्व</option>
                                        <option value="Approved" selected="">मंजूर</option>
                                        <option value="Pending">प्रलंबित</option>
                                        <option value="Rejected">नामंजूर</option>
                                    </select>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-light">रीसेट</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">लागू करा</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'component/footer.php'; ?>
    </div>

    <!-- Flatpickr (date / range picker) -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script>
        document.querySelectorAll('[data-provider="flatpickr"]').forEach(function(el) {
            flatpickr(el, {
                dateFormat: el.dataset.dateFormat || 'd M, Y',
                mode: el.dataset.rangeDate === 'true' ? 'range' : 'single',
                disableMobile: true,
                // render calendar inside the modal so its focus trap doesn't block the calendar
                static: !!el.closest('.modal')
            });
        });
    </script>
</body>

</html>