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
                                <!-- <h4 class="mb-sm-0">माझी डिजिटल स्वाक्षरी</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">सेटिंग्ज</a></li>
                                        <li class="breadcrumb-item active">माझी डिजिटल स्वाक्षरी </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-1">
                        <div class="page-title">
                            <h2>माझी डिजिटल स्वाक्षरी</h2>
                            <p>फक्त लॉगिन केलेले अधिकारी स्वतःची सही येथे देतात — ती आदेश, नोटीस व अहवाल PDF वर छापली जाते</p>
                        </div>
                    </div>

                    <!-- My Signature Card -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <!-- <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary rounded">
                                    <i class="ri-quill-pen-line text-secondary"></i>
                                </span>
                            </div> -->
                            <div>
                                <h5 class="card-title mb-0">माझी स्वाक्षरी</h5>
                                <p class="card-text mb-0">आपण काढलेल्या अहवाल / नोटीसवर ही सही येईल</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="border rounded p-3 d-flex flex-wrap align-items-center gap-3">
                                <div class="border border-dashed rounded bg-light px-5 py-4 text-muted" id="signPreview">
                                    स्वाक्षरी नाही
                                </div>
                                <div>
                                    <h6 class="mb-1">राज्य नियंत्रण कक्ष</h6>
                                    <p class="card-text mb-0">राज्य नियंत्रण कक्ष</p>
                                    <p class="card-text mb-2"><small id="signUnderText">सहीखाली: राज्य नियंत्रण कक्ष</small></p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#signatureModal">
                                        <span class="mdi mdi-pencil-outline"></span>
                                        <span class="px-2" id="signBtnText">स्वाक्षरी द्या</span>
                                    </button>
                                </div>
                            </div>
                            <p class="card-text mb-0 mt-3">
                                <i class="ri-lock-2-line text-secondary"></i>
                                सुरक्षा: प्रत्येक अधिकाऱ्याची सही फक्त त्यांच्याच लॉगिनमधून देता / बदलता / काढता येते. मुख्यालय किंवा इतर कोणताही अधिकारी दुसऱ्याची सही जोडू किंवा बदलू शकत नाही.
                            </p>
                        </div>
                    </div>
                    <!-- End My Signature Card -->

                    <!-- Signature Modal -->
                    <div class="modal fade" id="signatureModal" tabindex="-1" aria-labelledby="signatureModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-bottom pb-3">
                                    <h5 class="modal-title" id="signatureModalLabel">डिजिटल स्वाक्षरी — राज्य नियंत्रण कक्ष</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Mode switch -->
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-sign-mode="draw">
                                            <span class="mdi mdi-pencil-outline"></span>
                                            <span class="px-2">येथे सही करा</span>
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm d-flex align-items-center" data-sign-mode="upload">
                                            <span class="mdi mdi-file-outline"></span>
                                            <span class="px-2">सहीचा फोटो / स्कॅन अपलोड</span>
                                        </button>
                                    </div>

                                    <!-- Draw -->
                                    <div id="signDrawPane">
                                        <canvas id="signCanvas" class="border border-dashed rounded w-100 bg-white" height="200"></canvas>
                                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-2">
                                            <p class="card-text mb-0"><small>माऊसने / बोटाने / स्टायलसने चौकटीत सही करा</small></p>
                                            <div class="d-flex align-items-center gap-2">
                                                <label for="signInk" class="form-label mb-0">शाई</label>
                                                <select id="signInk" class="form-select form-select-sm w-auto">
                                                    <option value="#1a3a8f">निळी</option>
                                                    <option value="#000000">काळी</option>
                                                </select>
                                                <button type="button" class="btn btn-light btn-sm d-flex align-items-center" id="clearSign">
                                                    <span class="mdi mdi-refresh"></span>
                                                    <span class="px-2">पुसा</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Upload -->
                                    <div id="signUploadPane" class="d-none">
                                        <div class="border border-dashed rounded p-4 text-center">
                                            <input type="file" id="signFile" class="form-control" accept="image/png, image/jpeg">
                                            <p class="card-text mb-0 mt-2" id="signFileHint"><small>पांढऱ्या कागदावर केलेल्या सहीचा स्पष्ट फोटो / स्कॅन (PNG / JPG) निवडा</small></p>
                                        </div>
                                    </div>

                                    <!-- Preview -->
                                    <label class="form-label mt-3">पूर्वावलोकन (PDF मध्ये असे दिसेल)</label>
                                    <div class="border rounded bg-white text-center p-3" id="signModalPreview">
                                        <span class="text-muted">स्वाक्षरी नाही</span>
                                    </div>

                                    <!-- Name / designation under signature -->
                                    <div class="row g-3 mt-1">
                                        <div class="col-md-6">
                                            <label for="signName" class="form-label">सहीखालील नाव</label>
                                            <input type="text" id="signName" class="form-control" placeholder="राज्य नियंत्रण कक्ष">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="signDesignation" class="form-label">सहीखालील पदनाम</label>
                                            <input type="text" id="signDesignation" class="form-control" value="राज्य नियंत्रण कक्ष">
                                        </div>
                                    </div>

                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="signConsent">
                                        <label class="form-check-label" for="signConsent">
                                            मी प्रमाणित करतो/करते की ही माझी स्वतःची अधिकृत स्वाक्षरी आहे व ती प्रणालीतील आदेशांवर वापरण्यास माझी संमती आहे.
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light border-top pt-3">
                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">रद्द करा</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center" id="saveSign" disabled>
                                        <span class="mdi mdi-check"></span>
                                        <span class="px-2">स्वाक्षरी जतन करा</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Signature Modal -->

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
    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <script>
        // Convert the page tables into Grid.js tables (pagination + card search box)
        (function () {
            if (typeof gridjs === 'undefined') return;

            var SEARCH_SELECTOR = '.form-icon input';
            var PAGE_SIZE = 10;

            // Keep the cell's own classes and the bold look of <th scope="row">
            function cellHtml(cell) {
                var cls = cell.className;
                if (cell.tagName === 'TH' && cell.parentNode.parentNode.tagName === 'TBODY') {
                    cls = (cls + ' fw-semibold').trim();
                }
                var inner = cell.innerHTML.trim();
                return gridjs.html(cls ? '<div class="' + cls + '">' + inner + '</div>' : inner);
            }

            document.querySelectorAll('.page-content table').forEach(function (table) {
                var thead = table.tHead;
                var tbody = table.tBodies[0];
                if (!thead || !tbody) return;

                var columns = Array.prototype.map.call(thead.rows[0].cells, function (th) {
                    var col = { name: cellHtml(th) };
                    var width = th.style.width || th.getAttribute('width');
                    if (width) col.width = width;
                    return col;
                });

                var rows = Array.prototype.map.call(tbody.rows, function (tr) {
                    return {
                        cells: Array.prototype.map.call(tr.cells, cellHtml),
                        text: tr.textContent.replace(/\s+/g, ' ').toLowerCase()
                    };
                });

                var container = document.createElement('div');
                container.className = 'pt-2';
                table.parentNode.replaceChild(container, table);

                var grid = new gridjs.Grid({
                    columns: columns,
                    data: rows.map(function (r) { return r.cells; }),
                    pagination: { limit: PAGE_SIZE },
                    autoWidth: false
                }).render(container);

                var scope = container.closest('.card') || container.closest('.container-fluid');
                var search = scope && scope.querySelector(SEARCH_SELECTOR);
                if (!search) return;

                search.addEventListener('input', function () {
                    var q = search.value.trim().toLowerCase();
                    var data = rows
                        .filter(function (r) { return r.text.indexOf(q) !== -1; })
                        .map(function (r) { return r.cells; });
                    grid.updateConfig({ data: data }).forceRender();
                });
            });
        })();
    </script>
    <script>
        // Signature pad: draw on the canvas or upload a photo, preview it, then save it to the card
        (function () {
            var modalEl = document.getElementById('signatureModal');
            var canvas = document.getElementById('signCanvas');
            var ctx = canvas.getContext('2d');
            var inkSelect = document.getElementById('signInk');
            var drawPane = document.getElementById('signDrawPane');
            var uploadPane = document.getElementById('signUploadPane');
            var fileInput = document.getElementById('signFile');
            var fileHint = document.getElementById('signFileHint');
            var fileHintHtml = fileHint.innerHTML;
            var modalPreview = document.getElementById('signModalPreview');
            var nameInput = document.getElementById('signName');
            var desigInput = document.getElementById('signDesignation');
            var consent = document.getElementById('signConsent');
            var saveBtn = document.getElementById('saveSign');
            var modeBtns = modalEl.querySelectorAll('[data-sign-mode]');

            var CANVAS_HEIGHT = 200;          // CSS px, same as the height attribute
            var MAX_FILE = 2 * 1024 * 1024;   // 2 MB upload limit
            var mode = 'draw';
            var ratio = 1;
            var drawing = false;
            var hasInk = false;
            var box;                          // bounding box of the ink, used to crop the export
            var uploaded = null;              // data URL of the uploaded image

            function resetBox() {
                box = { minX: Infinity, minY: Infinity, maxX: -Infinity, maxY: -Infinity };
            }

            // w-100 stretches the canvas, but its drawing surface stays 300px wide unless we
            // resize it to the shown width (only measurable while the modal is visible).
            // Resizing also clears the drawing.
            function fitCanvas() {
                ratio = window.devicePixelRatio || 1;
                canvas.width = canvas.getBoundingClientRect().width * ratio;
                canvas.height = CANVAS_HEIGHT * ratio;
                ctx.setTransform(ratio, 0, 0, ratio, 0, 0);
                ctx.lineWidth = 2.5;
                ctx.lineCap = 'round';
                ctx.lineJoin = 'round';
                hasInk = false;
                resetBox();
            }

            function clearPad() {
                ctx.save();
                ctx.setTransform(1, 0, 0, 1, 0, 0);
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.restore();
                hasInk = false;
                resetBox();
                refresh();
            }

            function point(e) {
                var rect = canvas.getBoundingClientRect();
                var p = { x: e.clientX - rect.left, y: e.clientY - rect.top };
                box.minX = Math.min(box.minX, p.x);
                box.minY = Math.min(box.minY, p.y);
                box.maxX = Math.max(box.maxX, p.x);
                box.maxY = Math.max(box.maxY, p.y);
                return p;
            }

            // Pointer events cover mouse, finger and stylus with one set of handlers
            canvas.addEventListener('pointerdown', function (e) {
                drawing = true;
                canvas.setPointerCapture(e.pointerId);
                var p = point(e);
                ctx.strokeStyle = inkSelect.value;
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(p.x, p.y);   // a single tap leaves a dot
                ctx.stroke();
            });
            canvas.addEventListener('pointermove', function (e) {
                if (!drawing) return;
                var p = point(e);
                ctx.lineTo(p.x, p.y);
                ctx.stroke();
            });
            function endStroke() {
                if (!drawing) return;
                drawing = false;
                hasInk = true;
                refresh();
            }
            canvas.addEventListener('pointerup', endStroke);
            canvas.addEventListener('pointercancel', endStroke);
            // Stop the page from scrolling while signing with a finger
            ['touchstart', 'touchmove'].forEach(function (type) {
                canvas.addEventListener(type, function (e) { e.preventDefault(); }, { passive: false });
            });

            document.getElementById('clearSign').addEventListener('click', clearPad);

            // Export only the inked area (transparent PNG) so it sits neatly on the PDF
            function drawnImage() {
                var pad = 8;
                var x = Math.max(0, box.minX - pad);
                var y = Math.max(0, box.minY - pad);
                var w = Math.min(canvas.width / ratio, box.maxX + pad) - x;
                var h = Math.min(CANVAS_HEIGHT, box.maxY + pad) - y;
                var out = document.createElement('canvas');
                out.width = w * ratio;
                out.height = h * ratio;
                out.getContext('2d').drawImage(canvas, x * ratio, y * ratio, w * ratio, h * ratio, 0, 0, out.width, out.height);
                return out.toDataURL('image/png');
            }

            function currentImage() {
                if (mode === 'draw') return hasInk ? drawnImage() : null;
                return uploaded;
            }

            // Name and designation printed under the signature (placeholder is the default name)
            function captionParts() {
                var parts = [nameInput.value.trim() || nameInput.placeholder, desigInput.value.trim()];
                return parts.filter(function (t, i) { return t && parts.indexOf(t) === i; });
            }

            function signatureImg(src) {
                var img = new Image();
                img.src = src;
                img.height = 60;
                img.alt = 'स्वाक्षरी';
                img.className = 'mw-100';
                return img;
            }

            function refresh() {
                var src = currentImage();
                modalPreview.innerHTML = '';
                if (src) {
                    modalPreview.appendChild(signatureImg(src));
                    captionParts().forEach(function (t, i) {
                        var line = document.createElement('div');
                        line.className = i === 0 ? 'fw-semibold' : 'text-muted';
                        line.textContent = t;
                        modalPreview.appendChild(line);
                    });
                } else {
                    var empty = document.createElement('span');
                    empty.className = 'text-muted';
                    empty.textContent = 'स्वाक्षरी नाही';
                    modalPreview.appendChild(empty);
                }
                saveBtn.disabled = !(src && consent.checked);
            }

            function setMode(m) {
                mode = m;
                modeBtns.forEach(function (btn) {
                    var on = btn.getAttribute('data-sign-mode') === m;
                    btn.classList.toggle('btn-primary', on);
                    btn.classList.toggle('btn-light', !on);
                });
                drawPane.classList.toggle('d-none', m !== 'draw');
                uploadPane.classList.toggle('d-none', m !== 'upload');
                refresh();
            }
            modeBtns.forEach(function (btn) {
                btn.addEventListener('click', function () { setMode(btn.getAttribute('data-sign-mode')); });
            });

            function setHint(error) {
                fileHint.classList.toggle('text-danger', !!error);
                fileHint.innerHTML = fileHintHtml;
                if (error) fileHint.querySelector('small').textContent = error;
            }

            fileInput.addEventListener('change', function () {
                var file = fileInput.files[0];
                uploaded = null;
                setHint('');
                if (file && !/^image\/(png|jpeg)$/.test(file.type)) {
                    setHint('फक्त PNG / JPG फाइल निवडा');
                    fileInput.value = '';
                } else if (file && file.size > MAX_FILE) {
                    setHint('फाइल 2 MB पेक्षा मोठी आहे');
                    fileInput.value = '';
                } else if (file) {
                    var reader = new FileReader();
                    reader.onload = function () { uploaded = reader.result; refresh(); };
                    reader.readAsDataURL(file);
                    return;
                }
                refresh();
            });

            nameInput.addEventListener('input', refresh);
            desigInput.addEventListener('input', refresh);
            consent.addEventListener('change', refresh);

            // Every time the modal opens it starts fresh on the draw pad
            modalEl.addEventListener('show.bs.modal', function () {
                hasInk = false;
                uploaded = null;
                fileInput.value = '';
                setHint('');
                consent.checked = false;
                setMode('draw');
            });
            modalEl.addEventListener('shown.bs.modal', function () {
                fitCanvas();
                refresh();
            });
            var lastWidth = window.innerWidth;
            window.addEventListener('resize', function () {
                if (window.innerWidth === lastWidth) return;   // ignore mobile address-bar height changes
                lastWidth = window.innerWidth;
                if (modalEl.classList.contains('show') && mode === 'draw') {
                    fitCanvas();
                    refresh();
                }
            });

            // No backend yet: the signature is shown on the card but lost on reload
            saveBtn.addEventListener('click', function () {
                var src = currentImage();
                if (!src || !consent.checked) return;
                var preview = document.getElementById('signPreview');
                preview.innerHTML = '';
                preview.appendChild(signatureImg(src));
                preview.classList.remove('text-muted', 'px-5', 'py-4');
                preview.classList.add('p-2');
                document.getElementById('signUnderText').textContent = 'सहीखाली: ' + captionParts().join(', ');
                document.getElementById('signBtnText').textContent = 'स्वाक्षरी बदला';
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            });
        })();
    </script>
</body>

</html>
