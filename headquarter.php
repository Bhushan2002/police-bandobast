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
                                <h4 class="mb-sm-0">मुख्यालय</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">मास्टर्स</a></li>
                                        <li class="breadcrumb-item active">मुख्यालय </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title ">
                            <h2>मुख्यालय</h2>
                            <p>मुख्यालयाची सूची</p>
                        </div>
                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            <span class="mdi mdi-plus"></span>
                            <span class="px-2">मुख्यालय जोडा</span>
                        </button>
                    </div>

                    <!-- Add Vibhag Modal -->
                    <div class="modal fade " id="addVibhagModal" tabindex="-1" aria-labelledby="addVibhagModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addVibhagModalLabel">मुख्यालय जोडा</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="javascript:void(0);">
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="headquarterNameInput" class="form-label">मुख्यालयाचे नाव</label>
                                                <input type="text" class="form-control" id="headquarterNameInput" name="headquartername" placeholder="मुख्यालयाचे नाव लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="designationInput" class="form-label">पदनाम</label>
                                                <select class="form-select mb-3">
                                                    <option value="">निवडा…</option>
                                                    <option value="ds1">पोलीस अधीक्षक</option>
                                                    <option value="ds2">अपर पोलीस अधीक्षक</option>
                                                    <option value="ds3">उपविभागीय पोलीस अधिकारी (DySP)</option>
                                                    <option value="ds4">पोलीस निरीक्षक</option>
                                                    <option value="ds5">सहायक पोलीस निरीक्षक</option>
                                                    <option value="ds6">पोलीस उपनिरीक्षक</option>
                                                    <option value="ds7">सहायक पोलीस उपनिरीक्षक</option>
                                                    <option value="ds8">पोलीस हवालदार</option>
                                                    <option value="ds9">पोलीस नाईक</option>
                                                    <option value="ds10">पोलीस शिपाई</option>
                                                    <option value="ds11">चालक पोलीस शिपाई</option>
                                                    <option value="ds12">वरिष्ठ पोलीस निरीक्षक</option>
                                                    <option value="ds13">होमगार्ड</option>
                                                    <option value="ds14">वॉर्डन</option>
                                                    <option value="ds15">महिला पोलीस शिपाई</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label for="" class="form-check-label"> मोबाईल नंबर</label>
                                                <input type="text" inputmode="numeric" class="form-control" id="mobileNumberInput" placeholder="मोबाईल नंबर लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">ई-मेल आयडी</label>
                                                <input type="email" class="form-control" id="emailInput" placeholder="ई-मेल आयडी लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">विभाग</label>
                                                <select class="form-select mb-3">
                                                    <option selected>निवडा…</option>
                                                    <option value="dp1">कायदा व सुव्यवस्था</option>
                                                    <option value="dp2">वाहतूक शाखा</option>
                                                    <option value="dp3">स्थानिक गुन्हे शाखा</option>
                                                    <option value="dp4">विशेष शाखा</option>
                                                    <option value="dp5">जिल्हा पोलीस मुख्यालय (प्रशासन)</option>
                                                    <option value="dp6">होमगार्ड</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">सेवा पुस्तक क्रमांक</label>
                                                <input type="text" class="form-control" id="serviceBookInput" placeholder="सेवा पुस्तक क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पासवर्ड</label>
                                                <input type="password" class="form-control" id="passwordInput" placeholder="पासवर्ड लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पासवर्डची पुष्टी</label>
                                                <input type="password" class="form-control" id="confirmPasswordInput" placeholder="पासवर्डची पुष्टी लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पद / नियुक्ती</label>
                                                <input type="text" class="form-control" id="positionInput" placeholder="पद / नियुक्ती लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">नियुक्ती — पासून </label>
                                                <input type="date" class="form-control" id="dateInput">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">नियुक्ती — पर्यंत </label>
                                                <input type="date" class="form-control" id="dateInput">
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
                    <!-- End Add Vibhag Modal -->







                    <!-- data table -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                            aria-describedby="model-datatables_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 52.8px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">अ.क्र.</th>
                                                    <th>मुख्यालयाचे नाव</th>
                                                    <th>पदनाम</th>
                                                    <th>मोबाईल</th>
                                                    <th>ई-मेल आयडी</th>
                                                    <th>विभाग</th>
                                                    <th>स्थिती</th>
                                                    <th class="col-action">कृती</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>सातारा जिल्हा पोलीस मुख्यालय</td>
                                                    <td>अपर पोलीस अधीक्षक</td>
                                                    <td>9800000101</td>
                                                    <td>hq.satara@example.com</td>
                                                    <td>जिल्हा पोलीस मुख्यालय (प्रशासन)</td>
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
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>सातारा जिल्हा पोलीस मुख्यालय</td>
                                                    <td>अपर पोलीस अधीक्षक</td>
                                                    <td>9800000101</td>
                                                    <td>hq.satara@example.com</td>
                                                    <td>जिल्हा पोलीस मुख्यालय (प्रशासन)</td>
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
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>सातारा जिल्हा पोलीस मुख्यालय</td>
                                                    <td>अपर पोलीस अधीक्षक</td>
                                                    <td>9800000101</td>
                                                    <td>hq.satara@example.com</td>
                                                    <td>जिल्हा पोलीस मुख्यालय (प्रशासन)</td>
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
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>सातारा जिल्हा पोलीस मुख्यालय</td>
                                                    <td>अपर पोलीस अधीक्षक</td>
                                                    <td>9800000101</td>
                                                    <td>hq.satara@example.com</td>
                                                    <td>जिल्हा पोलीस मुख्यालय (प्रशासन)</td>
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
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>सातारा जिल्हा पोलीस मुख्यालय</td>
                                                    <td>अपर पोलीस अधीक्षक</td>
                                                    <td>9800000101</td>
                                                    <td>hq.satara@example.com</td>
                                                    <td>जिल्हा पोलीस मुख्यालय (प्रशासन)</td>
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
                                                                    <a class="dropdown-item remove-item-btn">
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

    <!-- Bootstrap JS (needed for modals) -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search + pagination for the .data-table cards (card-header search box, card-footer pager)
        (function() {
            var PAGE_SIZE = 10;

            document.querySelectorAll('.page-content table.data-table').forEach(function(table) {
                var tbody = table.tBodies[0];
                var card = table.closest('.card');
                var scope = table.closest('.tab-pane') || card;
                var search = card.querySelector('.search-box .search');
                var noResult = scope.querySelector('.noresult');
                var info = scope.querySelector('.card-footer .text-muted');
                var pager = scope.querySelector('.card-footer .pagination');
                var page = 1;

                var rows = Array.prototype.map.call(tbody.rows, function(tr) {
                    return {
                        tr: tr,
                        text: tr.textContent.replace(/\s+/g, ' ').toLowerCase()
                    };
                });

                function pageItem(label, target, state) {
                    return '<li class="page-item' + (state ? ' ' + state : '') + '">' +
                        '<a href="#" class="page-link" data-page="' + target + '">' + label + '</a></li>';
                }

                function render() {
                    var q = search ? search.value.trim().toLowerCase() : '';
                    var matched = rows.filter(function(r) {
                        return r.text.indexOf(q) !== -1;
                    });
                    var pages = Math.max(1, Math.ceil(matched.length / PAGE_SIZE));
                    page = Math.min(page, pages);
                    var start = (page - 1) * PAGE_SIZE;
                    var end = Math.min(start + PAGE_SIZE, matched.length);

                    tbody.textContent = '';
                    matched.slice(start, end).forEach(function(r) {
                        tbody.appendChild(r.tr);
                    });

                    if (noResult) noResult.classList.toggle('d-none', matched.length > 0);
                    if (info) {
                        info.textContent = matched.length ?
                            'नोंदी ' + (start + 1) + ' ते ' + end + ' पैकी ' + matched.length + ' दर्शवत आहे' :
                            'नोंदी 0 पैकी 0 दर्शवत आहे';
                    }
                    if (pager) {
                        var html = pageItem('मागील', page - 1, page === 1 ? 'disabled' : '');
                        for (var i = 1; i <= pages; i++) html += pageItem(i, i, i === page ? 'active' : '');
                        html += pageItem('पुढील', page + 1, page === pages ? 'disabled' : '');
                        pager.innerHTML = html;
                    }
                }

                if (search) {
                    search.addEventListener('input', function() {
                        page = 1;
                        render();
                    });
                }
                if (pager) {
                    pager.addEventListener('click', function(e) {
                        var link = e.target.closest('.page-link');
                        if (!link) return;
                        e.preventDefault();
                        var item = link.parentNode;
                        if (item.classList.contains('disabled') || item.classList.contains('active')) return;
                        page = +link.getAttribute('data-page');
                        render();
                    });
                }
                // A row deleted by the delete-confirmation modal leaves the list for good
                table.addEventListener('rowremoved', function(e) {
                    rows = rows.filter(function(r) {
                        return r.tr !== e.detail;
                    });
                    render();
                });
                render();
            });
        })();
    </script>
    <script>
        // Delete confirmation: the trash button opens #deleteRecordModal, "होय, हटवा" removes that row
        (function() {
            var modalEl = document.getElementById('deleteRecordModal');
            var nameEl = document.getElementById('deleteRecordName');
            var targetRow = null;

            modalEl.addEventListener('show.bs.modal', function(e) {
                targetRow = e.relatedTarget ? e.relatedTarget.closest('tr') : null;
                var title = targetRow && (targetRow.querySelector('.cell-title') || targetRow.cells[0]);
                nameEl.textContent = title ? title.textContent.trim() : '';
            });

            // No backend yet: the row is only removed from the page
            document.getElementById('deleteRecordConfirm').addEventListener('click', function() {
                if (targetRow) {
                    var table = targetRow.closest('table');
                    targetRow.remove();
                    if (table) table.dispatchEvent(new CustomEvent('rowremoved', {
                        detail: targetRow
                    }));
                    targetRow = null;
                }
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            });
        })();
    </script>
</body>

</html>