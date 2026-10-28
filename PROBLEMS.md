# Application Audit — Bugs & UI Problems

Audit date: 2026-10-28
Scope: all 34 pages, `component/*`, `auth/*`, shared scripts.
All PHP files pass `php -l` (no syntax errors). Every problem below was checked against the code.

---

## A. Critical bugs (things that are broken)

### 1. Bootstrap JS is loaded twice
`component/footer.php` already loads `bootstrap.bundle.min.js`, but 18 pages load it again after the footer (e.g. `department.php:235`, `daily-duty.php:207`, `show-cause-notice.php:656`, and all master pages).
- **Effect:** every click handler is registered twice. Dropdowns and collapses open and then close straight away, so the row "⋯" menus and Filters buttons look dead. Modals can open with two backdrops.
- **Fix:** remove the extra `<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js">` from each page.

### 2. Delete does nothing on 10 master pages
`.remove-item-btn` has no `data-bs-toggle="modal" data-bs-target="#deleteRecordModal"`.
Pages: `bandobast-type.php`, `department.php`, `designation.php`, `employees.php`, `headquarter.php`, `police-station.php`, `rejection-template.php`, `senior-officer.php`, `shift.php`, `special-instruction-template.php`. Only `face-registration.php` is wired up.
- **Fix:** add the two attributes to every Delete item.

### 3. Edit and View do nothing
- `.edit-item-btn` has no modal target on the same 10 pages.
- `face-registration.php` Edit buttons target `#showModal`, which doesn't exist.
- View links are `href="#!"`.
- **Fix:** point Edit to the page's add modal (or a copy of it as an edit modal). Add the missing modal to face-registration.

### 4. Sign-in page is broken and unsafe (`auth/signin.php`)
- Line 71: the form posts to `https://themesbrand.com/velzon/html/master/index.html`, so a submitted login would go to a third-party website.
- Lines 119–127: scripts use `assets/...` without `../`, so all of them 404 and the show-password button doesn't work.
- Line 15: the favicon path is wrong. `auth/password-reset.php:15` has the same problem.
- "Forgot password?" links to `auth-pass-reset-cover.html`, which doesn't exist, and the label is in English.
- **Fix:** `action="javascript:void(0);"`, add `../` to the script paths, link to `password-reset.php`, and use a Marathi label.

### 5. OTP page loads a PHP page as JavaScript (`auth/otp-verification-page.php`)
- Lines 146 and 150: `<script src="../absence-and-showcause-notices-report.php">`. This throws console errors, and particles.js never loads.
- "पुन्हा पाठवा" links to `auth-pass-reset-basic.html` (missing).
- The logo links to `../index.html` (missing). `password-reset.php` has the same logo link.
- **Fix:** use `../assets/libs/particles.js/particles.js`, remove the second tag, and fix the links.

### 6. Duplicate `id="buttons-datatables"` on report pages
- `attendence-report.php`: 2 tables
- `consolidated-summary-report.php`: 5 tables
- `police-station-response-report.php`: 2 tables
- **Effect:** only the first table gets DataTables search, paging and export. The rest are plain tables.
- *(Reported only. No fix decided yet.)*

### 7. Missing script files: 404s on every page (`component/footer.php`)
- `assets/js/pages/apexcharts.init.js` doesn't exist.
- dayjs is loaded from `../../../../cdnjs.cloudflare.com/ajax/libs/dayjs/...`, a leftover path from the HTTrack website copy (2 tags).
- **Fix:** remove these 3 script tags. The dashboard already has its own inline chart code.

### 8. Dead links (404)
| Link | Where | Should go to |
|---|---|---|
| `all-bandobast.php` | `bandobast-create.php:658`, `daily-duty-create.php:568`, `duty-recruitment-attendance.php:33,36` | `bandobast-list.php` / `daily-duty.php` |
| `new-bandobast.php` | `bandobast-list.php:41` | `bandobast-create.php` |
| `new-force-request.php` | `force-request.php:26` | page not built yet |
| `users.php`, `audit-log.php` | `component/sidebar.php:88-89` | pages not built yet |
| `index.html` (logo) | `component/header.php:72,81` | `dashboard.php` |
| `pages-profile.html`, `apps-chat.html`, `apps-tasks-kanban.html`, `pages-faqs.html`, `pages-profile-settings.html` | header profile menu | remove or retarget |
| `auth-logout-basic.html` (Logout) | header profile menu | `auth/signin.php` |

### 9. Forms submit to a controller that doesn't exist
`action="Controller/BandobastController.php"` in `bandobast-create.php:36`, `daily-duty-create.php:32` and `duty-recruitment-attendance.php:248`. Submitting gives a 404.
- **Fix:** `action="javascript:void(0);"` until the backend exists.

### 10. Filters buttons point to a missing panel
`data-bs-target="#filterPanel"`, but no `#filterPanel` element exists in:
`absent-notice-pending.php`, `bandobast-list.php` (4 buttons), `daily-duty.php`, `disclosure-pending.php`, `force-request.php`, `proceeding-complete.php`, `received-disclosure.php`.
- **Fix:** add a collapse filter panel (with a unique id) for each card, or remove the button.

### 11. Broken image in settings
`setting.php:147` uses `assets/images/mumbai%20police.png`. The file name contains a space, which is fragile.
- **Fix:** rename the file without the space, or use `assets/images/logo.png`.

### 12. `index.php` is an empty page
Its title is "Document" and it shows only the header and sidebar: no content, no footer, no redirect. Opening the site root gives a blank page.
- **Fix:** redirect to `dashboard.php` (or `auth/signin.php`).

---

## B. Markup / HTML problems

### 13. Duplicate IDs
| File | Duplicate id |
|---|---|
| `notifications.php` | `addNoticeModal` (on the list wrapper at line 45 and the modal at line 78) |
| `police-station.php` | `landlineInput`, `mobileInput` |
| `headquarter.php` | `dateInput` |
| `senior-officer.php` | `dateInput` |
| `shift.php` | `shiftTimeInput` |

The add and edit modals share ids, so clicking a label focuses the wrong field.

### 14. Labels pointing to fields that don't exist (copy-paste leftovers)
- `for="designationInput"` in `employees.php`, `headquarter.php`, `rejection-template.php`, `senior-officer.php`
- `for="policeThaneCodeInput"` in `police-station.php`
- `for="vibhagNameInput"` in `shift.php`

### 15. Tables contain DataTables' generated markup (20 pages)
The source was copied from the browser after DataTables had already run:
`class="... dataTable no-footer dtr-inline collapsed"`, `<th class="sorting sorting_asc" style="width: 52.8px;" aria-controls="model-datatables">`, `aria-describedby="model-datatables_info"`.
- **Fix:** strip it back to `table table-bordered nowrap table-striped align-middle`.

### 16. Header and language attribute
- `component/header.php` lines 1–62 hold a commented-out `<!doctype>` and `<head>` block. Delete it.
- `component/head.php` sets `<html lang="en">`, but the content is Marathi. Change it to `lang="mr"`.

### 17. `<style>` block in `attendence-report.php`
Line 4 has a `<style>` block placed outside `<head>`, which is invalid HTML. The font is already set by `custom.min.css`, so the block can be removed.

### 18. Dead inline scripts on master pages
The search and pagination script (for example `department.php:236–318`) looks for `table.data-table`. Those tables now use DataTables and no longer have that class, so the script does nothing. The delete script only works once Delete is wired up (#2).

### 19. Script order in `component/footer.php`
- All the scripts sit inside the `<footer>` element.
- `datatables.init.js` is loaded before jQuery. It only works because it waits for `DOMContentLoaded`.
- **Fix:** load jQuery before `plugins.js` and `datatables.init.js`.

---

## C. UI / UX problems

### 20. The header is still the Velzon demo
- The notifications dropdown has fake English entries ("Maureen Gibson", avatars, "We talked about a project on linkedin").
- "All (4)" and "4 New" don't match the bell badge, which says "3".
- English text: "View All Messages", "Search ...", "Welcome!", "Profile / Messages / Taskboard / Help / Settings / Logout", "Headquarter User".
- **Fix:** replace with Marathi notification items that link to `notifications.php`, and keep only Profile and Logout in the user menu.

### 21. English text in the Marathi UI
- Row menus: "View / Edit / Delete" on all master pages.
- The "Filters" button on list pages and in `component/card-header.php`.
- "Forgot password?" on sign-in.
- DataTables controls: "Copy / CSV / Excel / Print / PDF", "Search:", "Showing 1 to N of N entries", "Previous / Next". No Marathi `language` setting is configured.

### 22. PDF export can't show Marathi
pdfmake's `vfs_fonts.js` contains only Roboto, so Devanagari text comes out as boxes in exported PDFs.
- **Fix:** remove the PDF button for now, or add a Devanagari font when the backend is built.

### 23. Page titles are duplicated or inconsistent
Most pages show the title twice: once in the breadcrumb bar (`<h4 class="mb-sm-0">`) and again as a large `<h2>`. Examples: `shift.php:20/35`, `dashboard.php:16/30`, `department.php:16/31`. Other pages have commented out one of the two (`bandobast-report.php`, `setting.php`).
- **Fix:** pick one pattern and use it on every page.

### 24. Missing breadcrumbs and browser tab titles
- No breadcrumb on `bandobast-create.php`, `daily-duty.php`, `daily-duty-create.php`, `duty-recruitment-attendance.php`, `force-request.php`.
- `$pageTitle` is set on only 4 pages, so every other browser tab reads "Police Bandobast | Police Bandobast Management System" (English and identical).
- **Fix:** set a Marathi `$pageTitle` before `include 'component/head.php'` on every page.

### 25. Two different table styles
- Master and report pages use DataTables, which has working search and paging.
- List pages (`bandobast-list.php`, `daily-duty.php`, `force-request.php`, `duty-recruitment-attendance.php`, `show-cause-notice.php`, `dashboard.php`) use custom `.data-table` cards. Their search boxes do nothing and their pagination is empty.
- The app looks unfinished and inconsistent as a result.

### 26. Sample data problems
- `department.php`: rows 3 and 4 are both "स्थानिक गुन्हे शाखा".
- `section-count` badges are hard-coded.
- Dashboard chart data is mostly zeros.

### 27. Many inline `style=""` attributes
`consolidated-summary-report.php` (27), `dashboard.php` (24), `attendence-report.php` (16), `police-station-wise-report.php` (9), and others. Replace them with existing utility classes where possible.

### 28. Naming and orphan pages
- `attendence-report.php` is misspelt ("attendance"). The sidebar links to this name.
- `show-cause-notice.php` has no link anywhere (its sidebar link is commented out), but the file is still in the project.

---

## Suggested fix order
1. **#1, #7, #19**: shared script fixes in the footer and removing the duplicate Bootstrap. This fixes most of the "button does nothing" problems at once.
2. **#2, #3, #10**: wire up Delete, Edit and Filters.
3. **#4, #5, #8, #9, #12**: auth pages, dead links, form actions, index page.
4. **#13–#18**: duplicate ids, labels, table markup cleanup, stray style and scripts.
5. **#20–#24**: header cleanup, Marathi labels, headings, page titles. Then **#25–#28**.
