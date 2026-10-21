<?php
session_start();
$pageTitle = 'New Bandobast';
?>

<!doctype html>
<html lang="en"
      data-layout="vertical"
      data-topbar="light"
      data-sidebar="dark"
      data-sidebar-size="lg"
      data-sidebar-image="none"
      data-preloader="disable"
      data-theme="default"
      data-theme-colors="default">

<head>
    <meta charset="utf-8">

    <title>
        <?= htmlspecialchars($pageTitle) ?> | Police Bandobast Management System
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Velzon Layout -->
    <script src="assets/js/layout.js"></script>

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    
     <!-- Language  -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&display=swap" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">

    
</head>

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
                                <h2 class="mb-2">नवीन बंदोबस्त</h2>
                                <p class="text-muted mb-0">
                                    बंदोबस्त तयार करा व पोलीस ठाणेनिहाय मनुष्यबळ मागणी करा
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- END heading row -->


                <form action="Controller/BandobastController.php"
                      method="POST"
                      id="bandobastForm"> <!-- START form -->

                    <!-- ===================================== -->
                    <!-- FIRST CARD: BANDOBAST DETAILS         -->
                    <!-- ===================================== -->
                    <div class="row"> <!-- START row 1 -->
                        <div class="col-12">
                            <div class="card"> <!-- START card 1 -->

                                <div class="card-header">
                                    <h4 class="card-title mb-0">बंदोबस्त तपशील</h4>
                                    <p class="text-muted mb-0 pt-1">मूलभूत माहिती व मंजुरी प्राधिकारी</p>
                                </div>

                                <div class="card-body"> <!-- START card-body 1 -->

                                    <!-- Title -->
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="bandobastTitle" class="form-label">
                                                बंदोबस्ताचे शीर्षक
                                            </label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="bandobastTitle"
                                                   name="bandobast_title"
                                                   placeholder="उदा. गणेशोत्सव विसर्जन बंदोबस्त 2026"
                                                   required>
                                        </div>
                                    </div>

                                    <!-- Type, Start, End -->
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <label for="bandobastType" class="form-label">
                                                बंदोबस्त प्रकार
                                            </label>
                                            <select id="bandobastType"
                                                    name="bandobast_type"
                                                    class="form-select"
                                                    required>
                                                <option value="" selected disabled>निवडा</option>
                                                <option value="उत्सव">उत्सव</option>
                                                <option value="व्हीआयपी दौरा">व्हीआयपी दौरा</option>
                                                <option value="निवडणूक">निवडणूक</option>
                                                <option value="मोर्चा / रॅली">मोर्चा / रॅली</option>
                                                <option value="क्रीडा कार्यक्रम">क्रीडा कार्यक्रम</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="startDateTime" class="form-label">
                                                सुरुवात दिनांक व वेळ
                                            </label>
                                            <input type="datetime-local"
                                                   class="form-control"
                                                   id="startDateTime"
                                                   name="start_date_time"
                                                   required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="endDateTime" class="form-label">
                                                समाप्ती दिनांक व वेळ
                                            </label>
                                            <input type="datetime-local"
                                                   class="form-control"
                                                   id="endDateTime"
                                                   name="end_date_time"
                                                   required>
                                        </div>

                                    </div>

                                    <!-- Approval Authority, Personnel -->
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <label for="approvalAuthority" class="form-label">
                                                मंजुरी प्राधिकारी
                                            </label>
                                            <select id="approvalAuthority"
                                                    name="approval_authority"
                                                    class="form-select"
                                                    required>
                                                <option value="" selected disabled>निवडा</option>
                                                <option value="पोलीस अधीक्षक">पोलीस अधीक्षक</option>
                                                <option value="अपर पोलीस अधीक्षक">अपर पोलीस अधीक्षक</option>
                                                <option value="उपविभागीय पोलीस अधिकारी (DySP)">उपविभागीय पोलीस अधिकारी (DySP)</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="requiredPersonnel" class="form-label">
                                                किती मनुष्यबळ आवश्यक
                                            </label>
                                            <input type="number"
                                                   class="form-control"
                                                   id="requiredPersonnel"
                                                   name="required_personnel"
                                                   min="0"
                                                   placeholder="मनुष्यबळ संख्या"
                                                   required>
                                        </div>

                                    </div>

                                </div> <!-- END card-body 1 -->
                            </div> <!-- END card 1 -->
                        </div>
                    </div> <!-- END row 1 -->


                    <!-- ===================================== -->
                    <!-- SECOND CARD: EVENT LOCATION           -->
                    <!-- ===================================== -->
                    <div class="row"> <!-- START row 2 -->
                        <div class="col-12">
                            <div class="card"> <!-- START card 2 -->

                                <div class="card-header">
                                    <h4 class="card-title mb-0">बंदोबस्त स्थळ (Google Maps लोकेशन)</h4>
                                    <p class="text-muted mb-0 pt-1">
                                        सध्याचे स्थान घ्या, Google Maps लिंक पेस्ट करा किंवा अक्षांश-रेखांश टाका
                                    </p>
                                </div>

                                <div class="card-body"> <!-- START card-body 2 -->

                                    <!-- Location and Maps link -->
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="eventLocation" class="form-label">
                                                स्थळाचे नाव / पत्ता
                                            </label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="eventLocation"
                                                   name="event_location"
                                                   placeholder="उदा. राजवाडा चौक, सातारा">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="eventRoute" class="form-label">
                                                Google Maps लिंक (ऐच्छिक)
                                            </label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="eventRoute"
                                                   name="event_route"
                                                   placeholder="Google Maps मध्ये स्थान → Share → लिंक कॉपी करून येथे पेस्ट करा">
                                        </div>
                                    </div>

                                    <!-- Latitude and Longitude -->
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="eventLatitude" class="form-label">
                                                अक्षांश (Latitude)
                                            </label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="eventLatitude"
                                                   name="event_latitude"
                                                   placeholder="उदा. 19.2587">
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="eventLongitude" class="form-label">
                                                रेखांश (Longitude)
                                            </label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="eventLongitude"
                                                   name="event_longitude"
                                                   placeholder="उदा. 72.8347">
                                        </div>
                                    </div>

                                    <!-- Map buttons -->
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button"
                                                    id="btnCurrentLocation"
                                                    class="btn btn-primary waves-effect waves-light  btn-equal ">
                                                     <i class="ri-map-pin-user-fill me-1"></i>
                                                माझे सध्याचे स्थान घ्या
                                            </button>

                                            <button type="button"
                                                    id="btnOpenMaps"
                                                    class="btn btn-primary waves-effect waves-light btn-equal ms-2">
                                                     <i class=" ri-external-link-line me-1"></i>
                                                Google Maps उघडा
                                            </button>
                                        </div>
                                    </div>

                                </div> <!-- END card-body 2 -->
                            </div> <!-- END card 2 -->
                        </div>
                    </div> <!-- END row 2 -->


                    <!-- ===================================== -->
                    <!-- THIRD CARD: SPECIAL INSTRUCTIONS      -->
                    <!-- ===================================== -->
                    <div class="row"> <!-- START row 3 -->
                        <div class="col-12">
                            <div class="card"> <!-- START card 3 -->

                                <div class="card-header">
                                    <h4 class="card-title mb-0">विशेष सूचना</h4>
                                    <p class="text-muted mb-0 pt-1">नमुना निवडा किंवा स्वतः सूचना लिहा</p>
                                </div>

                                <div class="card-body"> <!-- START card-body 3 -->

                                    <!-- Template select -->
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="instructionTemplate" class="form-label">
                                                सूचना नमुना
                                            </label>
                                            <select id="instructionTemplate"
                                                    name="instruction_template"
                                                    class="form-select">
                                                <option value="" selected disabled>निवडा</option>
                                                <option value="गर्दी नियंत्रण नियमावली">गर्दी नियंत्रण नियमावली</option>
                                                <option value="व्हीआयपी ताफा नियमावली">व्हीआयपी ताफा नियमावली</option>
                                                <option value="निवडणूक">निवडणूक</option>
                                                <option value="मोर्चा / रॅली">मोर्चा / रॅली</option>
                                                <option value="क्रीडा कार्यक्रम">क्रीडा कार्यक्रम</option>
                                            </select>
                                        </div>
                                    </div>

                                                                    <!-- Textarea -->
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="specialInstructions" class="form-label">सूचना लिहा</label>
                                            <textarea class="form-control"
                                                    id="specialInstructions"
                                                    name="special_instructions"
                                                    rows="4"
                                                    placeholder="तैनात मनुष्यबळासाठी विशेष सूचना लिहा..."></textarea>
                                        </div>
                                    </div>

                                    </div> <!-- END card-body 3 -->
                                    </div> <!-- END card 3 -->
                                    </div>
                                    </div> <!-- END row 3 -->





                    <!-- ===================================== -->
                    <!-- FOURTH CARD: DOCUMENTS                -->
                    <!-- ===================================== -->
                    <div class="row"> <!-- START row 4 -->
                        <div class="col-12">
                            <div class="card"> <!-- START card 4 -->

                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="card-title mb-1">दस्तऐवज</h4>
                                        <p class="text-muted mb-0">आदेश, दस्तऐवज व इतर संबंधित फाईल्स</p>
                                    </div>

                                    <button type="button" id="btnAddFile" class="btn btn-primary">
                                        <i class="ri-upload-2-line align-bottom me-1"></i>
                                        फाईल जोडा
                                    </button>
                                </div>

                                <div class="card-body"> <!-- START card-body 4 -->

                                    <div class="row">

                                        <!-- Document type -->
                                        <div class="col-md-6 mb-3">
                                            <label for="documentType" class="form-label">दस्तऐवज प्रकार</label>
                                            <select id="documentType" name="document_type" class="form-select">
                                                <option value="" selected disabled>निवडा</option>
                                                <option value="आदेश">आदेश</option>
                                                <option value="इतर">इतर संबंधित दस्तऐवज</option>
                                            </select>
                                        </div>

                                        <!-- File upload -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">फाईल्स जोडा </label>

                                            <input type="file" id="documentFiles" name="documents[]" multiple hidden
                                                accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">

                                            <div id="uploadBox"
                                                class="form-control d-flex align-items-center justify-content-between border-dashed"
                                                style="cursor:pointer;">
                                                <span class="text-muted">
                                                    <i class="ri-upload-cloud-2-line align-middle me-1"></i>
                                                    फाईल्स निवडण्यासाठी क्लिक करा
                                                </span>
                                                <span class="text-muted fs-12">PDF, JPG, PNG, DOC | 5 MB</span>
                                            </div>
                                        </div>

                                    </div>

                                <!-- Selected files list: full width, below the row -->
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-group" id="fileList"></ul>
                                    </div>
                                </div>


                    </div> <!-- END card-body 4 -->

                    </div> <!-- END card 4 -->
                    </div>
                </div> <!-- END row 4 -->



                    <!-- ===================================== -->
<!-- FIFTH CARD: FORCE REQUEST             -->
<!-- ===================================== -->
<div class="row"> <!-- START row 5 -->
    <div class="col-12">
        <div class="card"> <!-- START card 5 -->

            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title mb-1">पोलीस ठाणेनिहाय मनुष्यबळ मागणी</h4>
                    <p class="text-muted mb-0">एकूण बेरीज</p>
                </div>

                <button type="button" id="btnAddStation" class="btn btn-primary">
                    <i class="ri-add-line align-bottom me-1"></i>
                    पोलीस ठाणे जोडा
                </button>
            </div>

            <div class="card-body"> <!-- START card-body 5 -->

                <div class="listjs-table" id="customerList"> <!-- START listjs -->

                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle table-nowrap mb-0" id="customerTable">

                            <thead class="table-light align-middle text-center">
                                <tr>
                                    <th scope="col" style="width: 30px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                            <th class="sort" data-sort="id">#</th>
                                            <th class="sort" data-sort="psId">पोलीस <br>ठाणे</th>
                                            <th class="sort" data-sort="reqDate">विनंती <br>दिनांक</th>
                                            <th class="sort" data-sort="srOfficer">वरिष्ठ <br>अधिकारी</th>
                                            <th class="sort" data-sort="dcp">पोलीस <br>उपायुक्त (DCP)</th>
                                            <th class="sort" data-sort="srPi">वरिष्ठ पोलीस <br>निरीक्षक</th>
                                            <th class="sort" data-sort="pi">पोलीस <br>निरीक्षक</th>
                                            <th class="sort" data-sort="api">सहायक पोलीस <br>निरीक्षक</th>
                                            <th class="sort" data-sort="hc">पोलीस <br>हवालदार</th>
                                            <th class="sort" data-sort="pcMale">पुरुष पोलीस <br>शिपाई</th>
                                            <th class="sort" data-sort="pcFemale">महिला पोलीस <br>शिपाई</th>
                                            <th class="sort" data-sort="traffic">वाहतूक <br>पोलीस</th>
                                            <th class="sort" data-sort="generalForce">सर्वसाधारण दल <br>(आम फोर्स)</th>
                                            <th class="sort" data-sort="homeGuard">होमगार्ड</th>
                                            <th class="sort" data-sort="warden">वॉर्डन</th>
                                           

                                            <th class="sort" data-sort="total">एकूण</th>
                                            <th class="sort" data-sort="action">कृती</th>
                                </tr>
                            </thead>

                            <tbody class="list form-check-all text-center" id="forceRequestTableBody">

                                <!-- Example row: This will be dynamically generated -->
                                

                        <tr data-id="1">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>

                            <td class="id">1</td> 

                            <td>
                                <select data-k="psId" name="ps_id[]" class="form-select" style="min-width:200px" required>
                                    <option value="">पोलीस ठाणे निवडा…</option>
                                    <option value="ps1">सातारा शहर पोलीस ठाणे</option>
                                    <option value="ps2">शाहूपुरी पोलीस ठाणे</option>
                                    <option value="ps3">सातारा तालुका पोलीस ठाणे</option>
                                    <option value="ps4">कराड शहर पोलीस ठाणे</option>
                                    <option value="ps5">कराड तालुका पोलीस ठाणे</option>
                                    <option value="ps6">फलटण शहर पोलीस ठाणे</option>
                                    <option value="ps7">वाई पोलीस ठाणे</option>
                                    <option value="ps8">महाबळेश्वर पोलीस ठाणे</option>
                                </select>
                            </td>

                            <td>
                                <input type="date" data-k="reqDate" name="req_date[]" class="form-control" style="min-width:140px">
                            </td>

                            <td><input type="number" min="0" value="0" data-k="srOfficer"  name="sr_officer[]"  class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="dcp"        name="dcp[]"         class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="srPi"       name="sr_pi[]"       class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="pi"         name="pi[]"          class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="api"        name="api[]"         class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="hc"         name="hc[]"          class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="pcMale"     name="pc_male[]"     class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="pcFemale"   name="pc_female[]"   class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="traffic"    name="traffic[]"     class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="generalForce" name="general_force[]" class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="homeGuard"  name="home_guard[]"  class="form-control text-center qty"></td>
                            <td><input type="number" min="0" value="0" data-k="warden"     name="warden[]"      class="form-control text-center qty"></td>

                            <!-- Total is calculated, so it is read-only -->
                            <td><input type="number" value="0" data-k="total" name="total[]" class="form-control text-center fw-semibold bg-light row-total" readonly tabindex="-1"></td>

                           

                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button type="button" class="btn btn-ghost-primary btn-icon btn-action" title="पहा">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-ghost-success btn-icon btn-action" title="मनुष्यबळ नियुक्त करा">
                                            <i class="ri-group-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-ghost-danger btn-icon btn-action btn-delete" title="हटवा">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </td>
                </tr>

                <tfoot>
    <tr class="table-total fw-bold">
        <td colspan="4">एकूण बेरीज</td>
        <td data-sum="srOfficer">0</td>
        <td data-sum="dcp">0</td>
        <td data-sum="srPi">0</td>
        <td data-sum="pi">0</td>
        <td data-sum="api">0</td>
        <td data-sum="hc">0</td>
        <td data-sum="pcMale">0</td>
        <td data-sum="pcFemale">0</td>
        <td data-sum="traffic">0</td>
        <td data-sum="generalForce">0</td>
        <td data-sum="homeGuard">0</td>
        <td data-sum="warden">0</td>
        <td data-sum="total">0</td>
        <td></td>
    </tr>
</tfoot>


                            </tbody>
                        </table>

                        <div class="noresult" style="display: none">
                            <div class="text-center"></div>
                        </div>
                    </div> <!-- END table-card -->

                    <!-- Info + Pagination -->
                    <div class="row align-items-center mt-3">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" role="status" aria-live="polite">
                                नोंदी 1 to 1 of 1 दर्शवत आहे
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <ul class="pagination justify-content-md-end mb-0">
                                <li class="page-item disabled"><a href="#" class="page-link">मागील</a></li>
                                <li class="page-item active"><a href="#" class="page-link" aria-current="page">1</a></li>
                                <li class="page-item disabled"><a href="#" class="page-link">पुढील</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- END listjs -->

            </div> <!-- END card-body 5 -->
        </div> <!-- END card 5 -->
    </div>
</div> <!-- END row 5 -->





                    <!-- ===================================== -->
                    <!-- sixth CARD: Total Manpower Summary)                -->
                    <!-- ===================================== -->
                    
                    <div class="row"> <!-- START row 6-->
                        <div class="col-12">
                            <div class="card">
    <!-- Header -->
    <div class="card-header d-flex align-items-center gap-3">
        
        <div>
            <h4 class="card-title mb-1">एकूण मनुष्यबळ सारांश</h4>
            <p class="text-muted mb-0 fs-13">मागणी केलेले मनुष्यबळ विरुद्ध आवश्यक मनुष्यबळ</p>
        </div>
    </div>

    <div class="card-body">
        <!-- Stat cards -->
        <div class="row g-3">
            <div class="col-xl-3 col-md-6">
                <div class="card card-animate bg-primary border-0 mb-0 h-100">
                    <div class="card-body">
                        <p class="fw-medium text-white mb-0">एकूण मनुष्यबळ (एकूण बेरीज)</p>
                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold text-white" id="sumTotal">0</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-animate bg-light border mb-0 h-100">
                    <div class="card-body">
                        <p class="fw-medium text-muted mb-0">आवश्यक मनुष्यबळ</p>
                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold" id="sumRequired">—</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-animate bg-light border mb-0 h-100">
                    <div class="card-body">
                        <p class="fw-medium text-muted mb-0">निवडलेली पोलीस ठाणी</p>
                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold" id="sumStations">0</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-animate bg-light border mb-0 h-100">
                    <div class="card-body">
                        <p class="fw-medium text-muted mb-0">पूर्तता</p>
                        <h2 class="mt-3 mb-2 ff-secondary fw-semibold" id="sumPercent">—</h2>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress -->
        <div class="progress progress-sm rounded-pill my-4">
            <div class="progress-bar bg-success rounded-pill" id="sumProgress" role="progressbar" style="width:0%"></div>
        </div>

        <!-- Rank-wise breakdown -->
        <div class="row row-cols-xl-6 row-cols-md-3 row-cols-2 g-3">
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">वरिष्ठ अधिकारी</span><span class="fw-bold" data-break="srOfficer">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">पोलीस उपायुक्त (DCP)</span><span class="fw-bold" data-break="dcp">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">वरिष्ठ पोलीस निरीक्षक</span><span class="fw-bold" data-break="srPi">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">पोलीस निरीक्षक</span><span class="fw-bold" data-break="pi">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">सहायक पोलीस निरीक्षक</span><span class="fw-bold" data-break="api">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">पोलीस हवालदार</span><span class="fw-bold" data-break="hc">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-14">पुरुष पोलीस शिपाई</span><span class="fw-bold" data-break="pcMale">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-13">महिला पोलीस शिपाई</span><span class="fw-bold" data-break="pcFemale">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-13">वाहतूक पोलीस</span><span class="fw-bold" data-break="traffic">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-13">सर्वसाधारण दल (आम फोर्स)</span><span class="fw-bold" data-break="generalForce">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-13">होमगार्ड</span><span class="fw-bold" data-break="homeGuard">0</span></div></div>
            <div class="col"><div class="border rounded-3 px-3 py-2 d-flex justify-content-between align-items-center h-100"><span class="fs-13">वॉर्डन</span><span class="fw-bold" data-break="warden">0</span></div></div>
        </div>
    </div>
</div>
                    </div>
                </div> <!-- END row 6 -->




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
                                   
                                    मंजुरीसाठी सादर करा
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

<!-- JavaScript Files -->



<script src="assets/js/config.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>