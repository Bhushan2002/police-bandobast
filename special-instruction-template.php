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
                                <!-- <h4 class="mb-sm-0">विशेष सूचना नमुने</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">नमुने</a></li>
                                        <li class="breadcrumb-item active">विशेष सूचना नमुने </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>विशेष सूचना नमुने</h2>
                            <p class="text-muted">विशेष सूचना आणि कारणांचे नमुने</p>
                        </div>
                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            <span class="mdi mdi-plus"></span>
                            <span class="px-2">विशेष सूचना नमुने जोडा</span>
                        </button>
                    </div>


                    <!-- Add Vibhag Modal -->
                    <div class="modal fade " id="addVibhagModal" tabindex="-1" aria-labelledby="addVibhagModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addVibhagModalLabel">विशेष सूचना नमुने जोडा</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);">
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <label for="instructionTitleInput" class="form-label">शीर्षक</label>
                                                    <input type="text" class="form-control" id="instructionTitleInput" name="instructiontitle" placeholder="नमुन्याचे शीर्षक लिहा">
                                                </div>

                                                <div class="col-12">
                                                    <label for="" class="form-check-label">वर्णन</label>
                                                    <textarea type="text" class="form-control" id="instructionDescriptionInput" placeholder="वर्णन लिहा"></textarea>
                                                </div>



                                                <div class="col-12">
                                                    <label class="form-label d-block">स्थिती</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="status" id="statusActive" value="Active" checked>
                                                        <label class="form-check-label" for="statusActive">सक्रिय</label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="status" id="statusInactive" value="Inactive">
                                                        <label class="form-check-label" for="statusInactive">निष्क्रिय</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">रद्द करा</button>
                                            <button type="submit" class="btn btn-primary">जतन करा</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Add Vibhag Modal -->



                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap  align-middle table-hover no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>शीर्षक</th>
                                                    <th>वर्णन</th>
                                                    <th>स्थिती</th>
                                                    <th>कृती</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>गर्दी नियंत्रण नियमावली</td>
                                                    <td>सर्व प्रवेश व निर्गमन ठिकाणी बॅरिकेडिंग करावे. महिला व ज्येष्ठ नागरिका…</td>

                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">सक्रिय</span>
                                                    </td>

                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn sa-warning">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>व्हीआयपी ताफा नियमावली</td>
                                                    <td>ताफा जाण्यापूर्वी 2 तास आधी मार्ग तपासणी पूर्ण करावी. ताफ्याच्या मार्ग…</td>

                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">सक्रिय</span>
                                                    </td>

                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn sa-warning">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>व्हीआयपी ताफा नियमावली</td>
                                                    <td>ताफा जाण्यापूर्वी 2 तास आधी मार्ग तपासणी पूर्ण करावी. ताफ्याच्या मार्ग…</td>

                                                    <td class="text-center align-middle">
                                                        <span class="badge bg-success-subtle text-success">सक्रिय</span>
                                                    </td>

                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn sa-warning">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
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


                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center px-4 pb-4 pt-0">
                                    <div class="avatar-lg mx-auto mb-3">
                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-1">
                                            <i class="ri-delete-bin-line"></i>
                                        </span>
                                    </div>
                                    <h5 class="mb-2" id="deleteRecordModalLabel">नोंद हटवायची आहे का?</h5>
                                    <p class="text-muted mb-0">
                                        <span class="fw-semibold text-body" id="deleteRecordName"></span> ही नोंद कायमची हटवली जाईल. ही क्रिया परत घेता येणार नाही.
                                    </p>
                                    <div class="d-flex justify-content-center gap-2 mt-4">
                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">रद्द करा</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light d-flex align-items-center" id="deleteRecordConfirm">
                                            <i class="ri-delete-bin-line"></i>
                                            <span class="px-2">होय, हटवा</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Delete Confirmation Modal -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


        <?php include 'component/footer.php'; ?>
    </div>


</body>

</html>