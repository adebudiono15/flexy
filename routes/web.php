<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.login');
});
Route::get('/dashboard.html', function () {
    return view('pages.dashboard');
});
// Content
Route::get('/content-grid.html', function () {
    return view('pages.content.grid');
});
Route::get('/content-flex.html', function () {
    return view('pages.content.flex');
});
Route::get('/content-typhography.html', function () {
    return view('pages.content.typhography');
});
// Colors
Route::get('/colors.html', function () {
    return view('pages.colors');
});
// Icons
Route::get('/icons-box-icon.html', function () {
    return view('pages.icons.box');
});
Route::get('/icons-feather-icon.html', function () {
    return view('pages.icons.feather');
});
// Cards
Route::get('/cards.html', function () {
    return view('pages.cards');
});
// UI Components
Route::get('/component-alert.html', function () {
    return view('pages.component.alert');
});
Route::get('/component-badges.html', function () {
    return view('pages.component.badges');
});
Route::get('/component-buttons.html', function () {
    return view('pages.component.buttons');
});
Route::get('/component-breadcrumbs.html', function () {
    return view('pages.component.breadcrumb');
});
Route::get('/component-media.html', function () {
    return view('pages.component.media');
});
Route::get('/component-modals.html', function () {
    return view('pages.component.modals');
});
Route::get('/component-navbar.html', function () {
    return view('pages.component.navbar');
});
Route::get('/component-navs.html', function () {
    return view('pages.component.navs');
});
Route::get('/component-pagination.html', function () {
    return view('pages.component.pagination');
});
Route::get('/component-popover.html', function () {
    return view('pages.component.popover');
});
Route::get('/component-progress.html', function () {
    return view('pages.component.progress');
});
Route::get('/component-spinner.html', function () {
    return view('pages.component.spinner');
});
Route::get('/component-tabs.html', function () {
    return view('pages.component.tabs');
});
Route::get('/component-tooltips.html', function () {
    return view('pages.component.tooltips');
});
Route::get('/component-toast.html', function () {
    return view('pages.component.toast');
});
Route::get('/component-carousel.html', function () {
    return view('pages.component.carousel');
});
Route::get('/component-dropdown.html', function () {
    return view('pages.component.dropdown');
});
Route::get('/component-list-group.html', function () {
    return view('pages.component.list-group');
});
Route::get('/component-media.html', function () {
    return view('pages.component.media');
});
Route::get('/component-popover.html', function () {
    return view('pages.component.popover');
});
Route::get('/component-tooltips.html', function () {
    return view('pages.component.tooltips');
});
Route::get('/component-toast.html', function () {
    return view('pages.component.toast');
});
// Extra Components
Route::get('/extra-autocompleted.html', function () {
    return view('pages.extra.autocompleted');
});
Route::get('/extra-avatar.html', function () {
    return view('pages.extra.avatar');
});
Route::get('/extra-chips.html', function () {
    return view('pages.extra.chips');
});
Route::get('/extra-divider.html', function () {
    return view('pages.extra.divider');
});
// Form Elements
Route::get('/form-input.html', function () {
    return view('pages.form.input');
});
Route::get('/form-input-group.html', function () {
    return view('pages.form.input-group');
});
Route::get('/form-number-input.html', function () {
    return view('pages.form.number-input');
});
Route::get('/form-textarea.html', function () {
    return view('pages.form.textarea');
});
Route::get('/form-select.html', function () {
    return view('pages.form.select');
});
Route::get('/form-checkbox.html', function () {
    return view('pages.form.checkbox');
});
Route::get('/form-radio.html', function () {
    return view('pages.form.radio');
});
Route::get('/form-switch.html', function () {
    return view('pages.form.switch');
});
Route::get('/form-datetime.html', function () {
    return view('pages.form.datetime');
});
Route::get('/form-input-mask.html', function () {
    return view('pages.form.input-mask');
});
Route::get('/form-file-uploader.html', function () {
    return view('pages.form.file-uploader');
});

Route::get('/form-layout.html', function () {
    return view('pages.form-layout');
});
Route::get('/form-wizards.html', function () {
    return view('pages.form-wizards');
});
// Tables
Route::get('/tables-bootstrap.html', function () {
    return view('pages.tables.tables-bootstrap');
});
Route::get('/tables-datatables.html', function () {
    return view('pages.tables.tables-datatables');
});
Route::get('/tables-bootstraptable.html', function () {
    return view('pages.tables.tables-bootstraptable');
});
// HTML Editor
Route::get('/editor-tinymce.html', function () {
    return view('pages.editor.editor-tinymce');
});
Route::get('/editor-quill.html', function () {
    return view('pages.editor.editor-quill');
});
// Pages
Route::get('/pages-profile.html', function () {
    return view('pages.pages-profile');
});
Route::get('/login.html', function () {
    return view('pages.login');
});
Route::get('/pages-email.html', function () {
    return view('pages.pages-email');
});
Route::get('/invoice.html', function () {
    return view('pages.invoice');
});
Route::get('/edit-invoice.html', function () {
    return view('pages.edit-invoice');
});
Route::get('/pages-user-setting.html', function () {
    return view('pages.pages-user-setting');
});
Route::get('/pages-empty-state.html', function () {
    return view('pages.pages-empty-state');
});
Route::get('/pages-landing-page.html', function () {
    return view('pages.pages-landing-page');
});
// Extends
Route::get('/extends-charts.html', function () {
    return view('pages.extends.extends-charts');
});
Route::get('/extends-maps.html', function () {
    return view('pages.extends.extends-maps');
});
