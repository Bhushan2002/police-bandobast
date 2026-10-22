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
                                <h4 class="mb-sm-0">कर्मचारी (ॲप वापरकर्ते)
                                </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">मास्टर्स</a></li>
                                        <li class="breadcrumb-item active">कर्मचारी (ॲप वापरकर्ते)
                                        </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title ">
                            <h2>कर्मचारी (ॲप वापरकर्ते)</h2>
                            <p>कर्मचारीची सूची</p>
                        </div>
                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            <span class="mdi mdi-plus"></span>
                            <span class="px-2">वरिष्ठ अधिकारी जोडा</span>
                        </button>
                    </div>

                    <!-- Add Vibhag Modal -->
                    <div class="modal fade " id="addVibhagModal" tabindex="-1" aria-labelledby="addVibhagModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addVibhagModalLabel">वरिष्ठ अधिकारी जोडा</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="javascript:void(0);">
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="seniorOfficerNameInput" class="form-label">नाव</label>
                                                <input type="text" class="form-control" id="seniorOfficerNameInput" name="seniorofficername" placeholder="वरिष्ठ अधिकारीचे नाव लिहा">
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
                                                <label for="" class="form-check-label"> बक्कल क्रमांक</label>
                                                <input type="text" inputmode="numeric" class="form-control" id="badgeNumberInput" placeholder="बक्कल क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label"> मोबाईल नंबर</label>
                                                <input type="text" inputmode="numeric" class="form-control" id="mobileNumberInput" placeholder="मोबाईल नंबर लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पोलीस ठाणे</label>
                                                <select class="form-select mb-3">
                                                    <option value="">निवडा…</option>
                                                    <option value="ps1">सातारा शहर पोलीस ठाणे</option>
                                                    <option value="ps2">शाहूपुरी पोलीस ठाणे</option>
                                                    <option value="ps3">सातारा तालुका पोलीस ठाणे</option>
                                                    <option value="ps4">कराड शहर पोलीस ठाणे</option>
                                                    <option value="ps5">कराड तालुका पोलीस ठाणे</option>
                                                    <option value="ps6">फलटण शहर पोलीस ठाणे</option>
                                                    <option value="ps7">वाई पोलीस ठाणे</option>
                                                    <option value="ps8">महाबळेश्वर पोलीस ठाणे</option>
                                                </select>
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
                                                <label for="" class="form-check-label">मनुष्यबळ प्रवर्ग (बंदोबस्त यादीसाठी)</label>
                                                <select class="form-select mb-3"><option value="">निवडा…</option><option value="srOfficer">वरिष्ठ अधिकारी</option><option value="dcp">पोलीस उपायुक्त (DCP)</option><option value="srPI">वरिष्ठ पोलीस निरीक्षक</option><option value="pi">पोलीस निरीक्षक</option><option value="api">सहायक पोलीस निरीक्षक</option><option value="hc">पोलीस हवालदार</option><option value="maleC">पुरुष पोलीस शिपाई</option><option value="femaleC">महिला पोलीस शिपाई</option><option value="traffic">वाहतूक पोलीस</option><option value="aam">सर्वसाधारण दल (आम फोर्स)</option><option value="homeGuard">होमगार्ड</option><option value="warden">वॉर्डन</option></select>
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">ॲप पिन (4 अंकी)</label>
                                                <input type="text"
                                                inputmode="numeric" class="form-control" id="appPinInput" placeholder="ॲप पिन लिहा">
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

                    <div class="card">
                        <div class="card-header">
                            <div class="row g-3 align-items-center">
                                <div class="col-md">
                                    <h5 class="card-title mb-0">सर्व कर्मचारी</h5>
                                </div>
                                <div class="col-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <?php
                                        $placeholder = "कर्मचारी शोधा";
                                        include 'component/search-input.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="min-w-sm">नाव</th>
                                            <th>पदनाम</th>
                                            <th>मनुष्यबळ प्रवर्ग</th>
                                            <th>बक्कल क्रमांक</th>
                                            <th>मोबाईल</th>
                                            <th class="min-w-sm">पोलीस ठाणे</th>
                                            <th>स्थिती</th>
                                            <th>चेहरा</th>

                                            <th class="col-action">कृती</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">संतोष पवार</div></td>

                                            <td>पोलीस हवालदार</td>


                                            <td>पोलीस हवालदार</td>

                                            <td>4521</td>

                                            <td>9800000401</td>

                                            <td>सातारा शहर पोलीस ठाणे</td>

                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>

                                            <td>
                                                <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                            </td>

                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">संतोष पवार</div></td>

                                            <td>पोलीस हवालदार</td>


                                            <td>पोलीस हवालदार</td>

                                            <td>4521</td>

                                            <td>9800000401</td>

                                            <td>सातारा शहर पोलीस ठाणे</td>

                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>

                                            <td>
                                                <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                            </td>

                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">संतोष पवार</div></td>

                                            <td>पोलीस हवालदार</td>


                                            <td>पोलीस हवालदार</td>

                                            <td>4521</td>

                                            <td>9800000401</td>

                                            <td>सातारा शहर पोलीस ठाणे</td>

                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>

                                            <td>
                                                <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                            </td>

                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="cell-title">संतोष पवार</div></td>

                                            <td>पोलीस हवालदार</td>


                                            <td>पोलीस हवालदार</td>

                                            <td>4521</td>

                                            <td>9800000401</td>

                                            <td>सातारा शहर पोलीस ठाणे</td>

                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>

                                            <td>
                                                <span class="badge rounded-pill bg-warning-subtle text-warning">नोंदणी बाकी</span>
                                                <span class="badge rounded-pill bg-primary-subtle text-primary">नोंदणी कर</span>
                                            </td>

                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
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
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="pagination pagination-separated mb-0"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

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
        (function () {
            var PAGE_SIZE = 10;

            document.querySelectorAll('.page-content table.data-table').forEach(function (table) {
                var tbody = table.tBodies[0];
                var card = table.closest('.card');
                var scope = table.closest('.tab-pane') || card;
                var search = card.querySelector('.search-box .search');
                var noResult = scope.querySelector('.noresult');
                var info = scope.querySelector('.card-footer .text-muted');
                var pager = scope.querySelector('.card-footer .pagination');
                var page = 1;

                var rows = Array.prototype.map.call(tbody.rows, function (tr) {
                    return { tr: tr, text: tr.textContent.replace(/\s+/g, ' ').toLowerCase() };
                });

                function pageItem(label, target, state) {
                    return '<li class="page-item' + (state ? ' ' + state : '') + '">' +
                        '<a href="#" class="page-link" data-page="' + target + '">' + label + '</a></li>';
                }

                function render() {
                    var q = search ? search.value.trim().toLowerCase() : '';
                    var matched = rows.filter(function (r) { return r.text.indexOf(q) !== -1; });
                    var pages = Math.max(1, Math.ceil(matched.length / PAGE_SIZE));
                    page = Math.min(page, pages);
                    var start = (page - 1) * PAGE_SIZE;
                    var end = Math.min(start + PAGE_SIZE, matched.length);

                    tbody.textContent = '';
                    matched.slice(start, end).forEach(function (r) { tbody.appendChild(r.tr); });

                    if (noResult) noResult.classList.toggle('d-none', matched.length > 0);
                    if (info) {
                        info.textContent = matched.length
                            ? 'नोंदी ' + (start + 1) + ' ते ' + end + ' पैकी ' + matched.length + ' दर्शवत आहे'
                            : 'नोंदी 0 पैकी 0 दर्शवत आहे';
                    }
                    if (pager) {
                        var html = pageItem('मागील', page - 1, page === 1 ? 'disabled' : '');
                        for (var i = 1; i <= pages; i++) html += pageItem(i, i, i === page ? 'active' : '');
                        html += pageItem('पुढील', page + 1, page === pages ? 'disabled' : '');
                        pager.innerHTML = html;
                    }
                }

                if (search) {
                    search.addEventListener('input', function () {
                        page = 1;
                        render();
                    });
                }
                if (pager) {
                    pager.addEventListener('click', function (e) {
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
                table.addEventListener('rowremoved', function (e) {
                    rows = rows.filter(function (r) { return r.tr !== e.detail; });
                    render();
                });
                render();
            });
        })();
    </script>
    <script>
        // Delete confirmation: the trash button opens #deleteRecordModal, "होय, हटवा" removes that row
        (function () {
            var modalEl = document.getElementById('deleteRecordModal');
            var nameEl = document.getElementById('deleteRecordName');
            var targetRow = null;

            modalEl.addEventListener('show.bs.modal', function (e) {
                targetRow = e.relatedTarget ? e.relatedTarget.closest('tr') : null;
                var title = targetRow && (targetRow.querySelector('.cell-title') || targetRow.cells[0]);
                nameEl.textContent = title ? title.textContent.trim() : '';
            });

            // No backend yet: the row is only removed from the page
            document.getElementById('deleteRecordConfirm').addEventListener('click', function () {
                if (targetRow) {
                    var table = targetRow.closest('table');
                    targetRow.remove();
                    if (table) table.dispatchEvent(new CustomEvent('rowremoved', { detail: targetRow }));
                    targetRow = null;
                }
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            });
        })();
    </script>
</body>

</html>
