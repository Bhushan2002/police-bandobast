# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

Front-end UI prototype for a police bandobast (duty deployment) management system, built on the **Velzon** Bootstrap 5 admin template. UI text is in **Marathi** (Devanagari). Pages are `.php` files only so they can `include` shared components — there is **no backend yet**: no database, sessions, form handling or AJAX. All table rows are hard-coded sample data, and forms use `action="javascript:void(0);"`.

## Running / checking

- Served by XAMPP Apache from `C:\xampp\htdocs\police-bandobast2` → open `http://localhost/police-bandobast2/<page>.php`.
- No build step, package manager, linter or test suite. To syntax-check a page: `php -l department.php` (PHP CLI at `C:\xampp\php\php.exe`).
- Not a git repository.

## Page anatomy

Every top-level page is a self-contained HTML document with the same skeleton (copy an existing page such as `department.php` when adding one):

1. `<head>`: `assets/js/layout.js`, then CSS in order — sweetalert2, `bootstrap.min.css`, `icons.min.css`, `app.min.css`, `custom.min.css` — plus the Eczar Google Font.
2. `<body>` → `.layout-wrapper` → `include 'component/header.php'` + `include 'component/sidebar.php'` → `.main-content > .page-content > .container-fluid` (page title/breadcrumb, Bootstrap modals for add/edit, a `.card` holding the table) → `include 'component/footer.php'`.
3. Scripts at the end of `<body>`: `bootstrap.bundle.min.js`, then page-specific scripts. Only the report pages also load `plugins.js`/`app.js`/flatpickr etc.

`auth/` pages (signin, OTP, password reset) are standalone and reference assets with `../` paths.

## Shared pieces

- `component/sidebar.php` is the navigation and the map of planned pages; several links (`dashboard.php`, `bandobast-create.php`, `approval-*.php`, `users.php`, …) point to pages that don't exist yet.
- `component/search-input.php` renders the card-header search box (`.search-box input.search`); set `$placeholder` before each include.
- `component/header.php`/`footer.php` are still mostly the stock Velzon demo markup.
- `assets/css/custom.min.css` is the project's own stylesheet despite the name (not minified): Eczar font override, colour variables (`--primary-color`, `--ok`/`--warn`/`--bad`), status pills etc. Everything else under `assets/` is vendor template code — don't edit it.

## Tables (data-table cards)

Every list/report table follows the reference markup in `component/table.txt` (a stored sample, not included anywhere): a `.card` with a `card-header` (`h5.card-title` + `component/search-input.php` + optional फिल्टर/CSV `btn-soft-*` buttons), `card-body p-0 > .table-responsive > table.table.data-table.align-middle.mb-0` followed by a hidden `.noresult` message, and a `card-footer` holding an info `.text-muted` div and an empty `ul.pagination`. Cell helpers from `custom.min.css`: `cell-title`/`cell-sub` for the main/grey lines, `col-num` for numbers, `col-action` for the icon-button column (`btn btn-ghost-primary btn-icon`), `min-w-*` on `<th>`. Status (स्थिती) cells use `<span class="badge rounded-pill bg-{c}-subtle text-{c}">` with `{c}` = `success` (सक्रिय, मंजूर, पूर्ण), `warning` (बाकी, प्रलंबित, अंशतः), `danger` (निष्क्रिय, नामंजूर, गैरहजर) or `primary` (actions such as नोंदणी कर) — not the old `status-pill` classes.

An inline script at the bottom of each table page handles search + pagination (10 rows/page) for every `table.data-table`: it filters rows by text from the card's `.search-box .search`, re-appends the visible rows into the `<tbody>` (row elements and their handlers survive), and fills the footer info text and pager. For tables inside tabs (`face-registration.php`) the `.noresult`/`card-footer` live inside each `.tab-pane`, and one card search box filters all panes. Trash buttons (`.remove-item-btn`, `data-bs-target="#deleteRecordModal"`) open a centred delete-confirmation modal placed at the end of `.container-fluid`; a second inline script removes the row on "होय, हटवा" and dispatches a `rowremoved` event on the table so the search/pagination script drops it from its list. All modals use `modal-dialog-centered`.

## Conventions

- **Do not create or edit any CSS** — no new `.css` files, no `<style>` blocks, no changes to `assets/css/*`. Style only with classes that already exist in `assets/` (Bootstrap/Velzon utilities, `custom.min.css` classes, Remix Icons `ri-*` from `icons.min.css`).
- Put page-specific JS **inline** in a `<script>` at the end of `<body>`. Do not create new JS files or new `component/*.php` includes for it — the user has explicitly rejected that approach.
- Files use LF line endings.
