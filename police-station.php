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
                                <h4 class="mb-sm-0">पोलीस ठाणे</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">मास्टर्स</a></li>
                                        <li class="breadcrumb-item active">पोलीस ठाणे </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="page-title ">
                            <h2>पोलीस ठाणे</h2>
                            <p>पोलीस ठाण्याची सूची</p>
                        </div>
                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addVibhagModal">
                            <span class="mdi mdi-plus"></span>
                            <span class="px-2">पोलीस ठाणे जोडा</span>
                        </button>
                        
                    </div>

                    <!-- Add Vibhag Modal -->
                    <div class="modal fade " id="addVibhagModal" tabindex="-1" aria-labelledby="addVibhagModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addVibhagModalLabel">पोलीस ठाणे जोडा</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="javascript:void(0);">
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="policeThaneNameInput" class="form-label">पोलीस ठाण्याचे नाव </label>
                                                <input type="text" class="form-control" id="policeThaneNameInput" name="police_thane_name" placeholder="पोलीस ठाण्याचे नाव लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="policeThaneCodeInput" class="form-label">पोलीस ठाणे मुख्यालय</label>

                                                <select class="form-select mb-3">
                                                    <option selected>निवडा</option>
                                                    <option value="1">सातारा जिल्हा पोलीस मुख्यालय</option>
                                                    <option value="2">पुणे जिल्हा पोलीस मुख्यालय</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label"> जिल्हा</label>
                                                <input type="text" class="form-control" id="districtInput" placeholder="जिल्हा लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">तालुका</label>
                                                <input type="text" class="form-control" id="talukaInput" placeholder="तालुका लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">गावाचे नाव</label>
                                                <input type="text" class="form-control" id="villageInput" placeholder="गावाचे नाव लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">शहराचे नाव</label>
                                                <input type="text" class="form-control" id="cityInput" placeholder="शहराचे नाव लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पिन कोड</label>
                                                <input type="text" class="form-control" id="pinCodeInput" placeholder="पिन कोड लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">लँडलाईन क्रमांक</label>
                                                <input type="text" class="form-control" id="landlineInput" placeholder="लँडलाईन क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पोलीस ठाणे मोबाईल क्रमांक (लॉगिन यूजरनेम) </label>
                                                <input type="text" class="form-control" id="mobileInput" placeholder="पोलीस ठाणे मोबाईल क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पोलीस ठाणे मोबाईल क्रमांक (लॉगिन यूजरनेम) </label>
                                                <input type="text" class="form-control" id="mobileInput" placeholder="पोलीस ठाणे मोबाईल क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पोलीस ठाणे लँडलाईन क्रमांक</label>
                                                <input type="text" class="form-control" id="landlineInput" placeholder="पोलीस ठाणे लँडलाईन क्रमांक लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पोलीस ठाणे लॉगिन पासवर्ड</label>
                                                <input type="password" class="form-control" id="passwordInput" placeholder="पोलीस ठाणे लॉगिन पासवर्ड लिहा">
                                            </div>
                                            <div class="col-6">
                                                <label for="" class="form-check-label">पासवर्डची पुष्टी</label>
                                                <input type="password" class="form-control" id="confirmPasswordInput" placeholder="पासवर्डची पुष्टी लिहा">
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
                                    <h5 class="card-title mb-0">सर्व पोलीस ठाणी</h5>
                                </div>
                                <div class="col-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <?php
                                        $placeholder = "पोलीस ठाणे शोधा";
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
                                            <th>पोलीस ठाण्याचे नाव</th>
                                            <th>शहराचे नाव</th>
                                            <th>जिल्हा</th>
                                            <th>पोलीस ठाणे मोबाईल क्रमांक (लॉगिन यूजरनेम)</th>
                                            <th>पोलीस ठाणे मुख्यालय</th>
                                            <th>स्थिती</th>
                                            <th class="col-action">कृती</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td>सातारा</td>
                                            <td>सातारा</td>
                                            <td>1234567890</td>
                                            <td>सातारा मुख्यालय </td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td>सातारा</td>
                                            <td>सातारा</td>
                                            <td>1234567890</td>
                                            <td>सातारा मुख्यालय </td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td>सातारा</td>
                                            <td>सातारा</td>
                                            <td>1234567890</td>
                                            <td>सातारा मुख्यालय </td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td>सातारा</td>
                                            <td>सातारा</td>
                                            <td>1234567890</td>
                                            <td>सातारा मुख्यालय </td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
                                            <td class="col-action">
                                                <button type="button" class="btn btn-ghost-primary btn-icon edit-item-btn" title="संपादन" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-pencil-line"></i></button>
                                                <button type="button" class="btn btn-ghost-danger btn-icon remove-item-btn" title="हटवा" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><div class="cell-title">सातारा शहर पोलीस ठाणे</div></td>
                                            <td>सातारा</td>
                                            <td>सातारा</td>
                                            <td>1234567890</td>
                                            <td>सातारा मुख्यालय </td>
                                            <td><span class="badge rounded-pill bg-success-subtle text-success">सक्रिय</span></td>
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
