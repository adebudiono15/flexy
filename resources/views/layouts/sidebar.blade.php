<div class="main-menu main-menu-sidebar">
        <div class="logo">
                FLEXY
        </div>
        <div class="nav-menu">
                <ul class="nav flex-column">
                        <li class="nav-item {{ (request()->is('dashboard.html')) ? 'active':'' }}"><a
                                        href="dashboard.html"><i class="icon-home"></i> Dashboard</a></li>
                        <li class="menu-title">UI</li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-content" role="button"
                                        aria-expanded="{{ (request()->is('content-*')) ? 'true':'false' }}"
                                        aria-controls="nav-content"><i class="icon-layout"></i> Content <span
                                                class="badge badge-warning badge-pill badge-right">3</span></a>
                                <ul class="menu-dropdown collapse {{ (request()->is('content-*')) ? 'show':'' }}"
                                        id="nav-content">
                                        <li class="{{ (request()->is('content-grid.html')) ? 'active':'' }}"><a
                                                        href="content-grid.html">Grid</a></li>
                                        <li class="{{ (request()->is('content-flex.html')) ? 'active':'' }}"><a
                                                        href="content-flex.html">Flex</a></li>
                                        <li class="{{ (request()->is('content-typhography.html')) ? 'active':'' }}"><a
                                                        href="content-typhography.html">Typography</a></li>
                                </ul>
                        </li>
                        <li class="nav-item {{ (request()->is('colors.html')) ? 'active':'' }}"><a href="colors.html"><i
                                                class="icon-droplet"></i> Colors</a></li>
                        <li class="nav-item {{ (request()->is('cards.html')) ? 'active':'' }}"><a href="cards.html"><i
                                                class="icon-credit-card"></i> Cards</a></li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-icons" role="button"
                                        aria-expanded="{{ (request()->is('icons-*')) ? 'true':'false' }}"
                                        aria-controls="nav-icons"><i class="icon-eye"></i> Icons <span
                                                class="badge badge-warning badge-pill badge-right">2</span></a>
                                <ul class="menu-dropdown collapse {{ (request()->is('icons-*')) ? 'show':'' }}"
                                        id="nav-icons">
                                        <li class="{{ (request()->is('icons-box-icon.html')) ? 'active':'' }}"><a
                                                        href="icons-box-icon.html">Box Icon</a></li>
                                        <li class="{{ (request()->is('icons-feather-icon.html')) ? 'active':'' }}"><a
                                                        href="icons-feather-icon.html">Feather Icon</a></li>
                                </ul>
                        </li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-components" role="button"
                                        aria-expanded="{{ (request()->is('component-*')) ? 'true':'false' }}"
                                        aria-controls="nav-components"><i class="icon-briefcase"></i> Components <span
                                                class="badge badge-warning badge-pill badge-right">18</span></a>
                                <ul class="menu-dropdown collapse {{ (request()->is('component-*')) ? 'show':'' }}"
                                        id="nav-components">
                                        <li class="{{ (request()->is('component-alert.html')) ? 'active':'' }}"><a
                                                        href="component-alert.html">Alert</a></li>
                                        <li class="{{ (request()->is('component-badges.html')) ? 'active':'' }}"><a
                                                        href="component-badges.html">Badges</a></li>
                                        <li class="{{ (request()->is('component-breadcrumbs.html')) ? 'active':'' }}"><a
                                                        href="component-breadcrumbs.html">Breadcrumbs</a></li>
                                        <li class="{{ (request()->is('component-buttons.html')) ? 'active':'' }}"><a
                                                        href="component-buttons.html">Buttons</a></li>
                                        <li class="{{ (request()->is('component-carousel.html')) ? 'active':'' }}"><a
                                                        href="component-carousel.html">Carousel</a></li>
                                        <li class="{{ (request()->is('component-dropdown.html')) ? 'active':'' }}"><a
                                                        href="component-dropdown.html">Dropdown</a></li>
                                        <li class="{{ (request()->is('component-list-group.html')) ? 'active':'' }}"><a
                                                        href="component-list-group.html">List Group</a></li>
                                        <li class="{{ (request()->is('component-modals.html')) ? 'active':'' }}"><a
                                                        href="component-modals.html">Modals</a></li>
                                        <li class="{{ (request()->is('component-media.html')) ? 'active':'' }}"><a
                                                        href="component-media.html">Media Objects</a></li>
                                        <li class="{{ (request()->is('component-navs.html')) ? 'active':'' }}"><a
                                                        href="component-navs.html">Navs</a></li>
                                        <li class="{{ (request()->is('component-navbar.html')) ? 'active':'' }}"><a
                                                        href="component-navbar.html">Navbar</a></li>
                                        <li class="{{ (request()->is('component-pagination.html')) ? 'active':'' }}"><a
                                                        href="component-pagination.html">Pagination</a></li>
                                        <li class="{{ (request()->is('component-popover.html')) ? 'active':'' }}"><a
                                                        href="component-popover.html">Popover</a></li>
                                        <li class="{{ (request()->is('component-progress.html')) ? 'active':'' }}"><a
                                                        href="component-progress.html">Progress</a></li>
                                        <li class="{{ (request()->is('component-spinner.html')) ? 'active':'' }}"><a
                                                        href="component-spinner.html">Spinner</a></li>
                                        <li class="{{ (request()->is('component-tabs.html')) ? 'active':'' }}"><a
                                                        href="component-tabs.html">Tabs</a></li>
                                        <li class="{{ (request()->is('component-tooltips.html')) ? 'active':'' }}"><a
                                                        href="component-tooltips.html">Tooltips</a></li>
                                        <li class="{{ (request()->is('component-toast.html')) ? 'active':'' }}"><a
                                                        href="component-toast.html">Toast</a></li>
                                </ul>
                        </li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-excomponents" role="button"
                                        aria-expanded="{{ (request()->is('extra-*')) ? 'true':'false' }}"
                                        aria-controls="nav-excomponents"><i class="icon-codepen"></i> Extra
                                        Components</a>
                                <ul class="menu-dropdown collapse {{ (request()->is('extra-*')) ? 'show':'' }}"
                                        id="nav-excomponents">
                                        <li class="{{ (request()->is('extra-avatar.html')) ? 'true':'false' }}"><a
                                                        href="extra-avatar.html">Avatar</a></li>
                                        <li class="{{ (request()->is('extra-chips.html')) ? 'true':'false' }}"><a
                                                        href="extra-chips.html">Chips</a></li>
                                        <li class="{{ (request()->is('extra-divider.html')) ? 'true':'false' }}"><a
                                                        href="extra-divider.html">Divider</a></li>
                                </ul>
                        </li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-form" role="button"
                                        aria-expanded="{{ (request()->is('form-*')) ? 'true':'false' }}"
                                        aria-controls="nav-form"><i class="icon-copy"></i> Form Elements</a>
                                <ul class="menu-dropdown collapse {{ (request()->is('form-*')) ? 'show':'' }}"
                                        id="nav-form">
                                        <li class="{{ (request()->is('form-input.html')) ? 'active':'' }}"><a
                                                        href="form-input.html">Input</a></li>
                                        <li class="{{ (request()->is('form-input-group.html')) ? 'active':'' }}"><a
                                                        href="form-input-group.html">Input Group</a></li>
                                        <li class="{{ (request()->is('form-number-input.html')) ? 'active':'' }}"><a
                                                        href="form-number-input.html">Number Input</a></li>
                                        <li class="{{ (request()->is('form-textarea.html')) ? 'active':'' }}"><a
                                                        href="form-textarea.html">Textarea</a></li>
                                        <li class="{{ (request()->is('form-select.html')) ? 'active':'' }}"><a
                                                        href="form-select.html">Select</a></li>
                                        <li class="{{ (request()->is('form-checkbox.html')) ? 'active':'' }}"><a
                                                        href="form-checkbox.html">Checkbox</a></li>
                                        <li class="{{ (request()->is('form-radio.html')) ? 'active':'' }}"><a
                                                        href="form-radio.html">Radio</a></li>
                                        <li class="{{ (request()->is('form-switch.html')) ? 'active':'' }}"><a
                                                        href="form-switch.html">Switch</a></li>
                                        <li class="{{ (request()->is('form-datetime.html')) ? 'active':'' }}"><a
                                                        href="form-datetime.html">Date & Time Picker</a></li>
                                        <li class="{{ (request()->is('form-input-mask.html')) ? 'active':'' }}"><a
                                                        href="form-input-mask.html">Input Mask</a></li>
                                        <li class="{{ (request()->is('form-file-uploader.html')) ? 'active':'' }}"><a
                                                        href="form-file-uploader.html">File Uploader</a></li>
                                </ul>
                        </li>
                        <li class="nav-item {{ (request()->is('form-layout.html')) ? 'active':'' }}"><a
                                        href="form-layout.html"><i class="icon-box"></i> Form Layouts</a></li>
                        <li class="nav-item {{ (request()->is('form-wizards.html')) ? 'active':'' }}"><a
                                        href="form-wizards.html"><i class="icon-more-horizontal"></i> Step &amp;
                                        Wizards</a></li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-tables" role="button"
                                        aria-expanded="{{ (request()->is('tables-*')) ? 'true':'false' }}"
                                        aria-controls="nav-tables"><i class="icon-server"></i> Tables</a>
                                <ul class="menu-dropdown collapse {{ (request()->is('tables-*')) ? 'show':'' }}"
                                        id="nav-tables">
                                        <li class="{{ (request()->is('tables-bootstrap.html')) ? 'active':'' }}"><a
                                                        href="tables-bootstrap.html">Table</a></li>
                                        <li class="{{ (request()->is('tables-datatables.html')) ? 'active':'' }}"><a
                                                        href="tables-datatables.html">DataTables</a></li>
                                        <li class="{{ (request()->is('tables-bootstraptable.html')) ? 'active':'' }}"><a
                                                        href="tables-bootstraptable.html">Bootstrap Table</a></li>
                                </ul>
                        </li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-editor" role="button"
                                        aria-expanded="{{ (request()->is('editor-*')) ? 'true':'false' }}"
                                        aria-controls="nav-editor"><i class="icon-edit"></i> HTML Editor</a>
                                <ul class="menu-dropdown collapse {{ (request()->is('editor-*')) ? 'show':'' }}"
                                        id="nav-editor">
                                        <li class="{{ (request()->is('editor-quill.html')) ? 'active':'' }}"><a
                                                        href="editor-quill.html">Quill</a></li>
                                        <li class="{{ (request()->is('editor-summernote.html')) ? 'active':'' }}"><a
                                                        href="editor-summernote.html">Summernote</a></li>
                                </ul>
                        </li>
                        <li class="menu-title">Pages</li>
                        <li class="nav-item  {{ (request()->is('pages-profile.html')) ? 'active':'' }}"><a
                                        href="pages-profile.html"><i class="icon-user"></i> Profile</a></li>
                        <li class="nav-item  {{ (request()->is('index.html')) ? 'active':'' }}"><a href="login.html"><i
                                                class="icon-lock"></i> Login</a></li>
                        <li class="nav-item  {{ (request()->is('pages-email.html')) ? 'active':'' }}"><a
                                        href="pages-email.html"><i class="icon-mail"></i> Email</a></li>
                        <li class="nav-item  {{ (request()->is('pages-invoice.html')) ? 'active':'' }}"><a
                                        href="invoice.html"><i class="icon-file"></i> Invoice</a></li>
                        <li class="nav-item  {{ (request()->is('pages-user-setting.html')) ? 'active':'' }}"><a
                                        href="pages-user-setting.html"><i class="icon-settings"></i> User Setting</a>
                        </li>
                        <li class="nav-item {{ (request()->is('pages-empty-state.html')) ? 'active':'' }} "><a
                                        href="pages-empty-state.html"><i class="icon-info"></i> Empty State</a></li>
                        <li class="nav-item {{ (request()->is('pages-landing-page.html')) ? 'active':'' }} "><a
                                        href="pages-landing-page.html"><i class="icon-monitor"></i> Landing Page</a>
                        </li>
                        <li class="menu-title">Extends</li>
                        <li class="nav-item {{ (request()->is('extends-chart.html')) ? 'active':'' }}"><a
                                        href="extends-charts.html"><i class="icon-pie-chart"></i> Chart</a></li>
                        <li class="nav-item {{ (request()->is('extends-maps.html')) ? 'active':'' }}"><a
                                        href="extends-maps.html"><i class="icon-map"></i> Maps</a></li>
                        <li class="nav-item submenu">
                                <a data-toggle="collapse" href="#nav-menu" role="button"
                                        aria-expanded="{{ (request()->is('menu-*')) ? 'true':'false' }}"
                                        aria-controls="nav-menu"><i class="icon-server"></i> Menu Level</a>
                                <ul class="menu-dropdown collapse {{ (request()->is('menu-*')) ? 'show':'' }}"
                                        id="nav-menu">
                                        <li class="{{ (request()->is('')) ? 'active':'' }}"><a href="">Second Level</a>
                                        </li>
                                        <li class="nav-item submenu">
                                                <a data-toggle="collapse" href="#nav-second" role="button"
                                                        aria-expanded="{{ (request()->is('second-*')) ? 'true':'false' }}"
                                                        aria-controls="nav-second">Second Level</a></li>
                                        <ul class="menu-dropdown collapse {{ (request()->is('menu-*')) ? 'show':'' }}"
                                                id="nav-second">
                                                <ul class="{{ (request()->is('')) ? 'active':'' }}"><a href=""
                                                                class="text-white"> <i
                                                                        class="bx bx-right-arrow-alt"></i> Second
                                                                Level</a>
                                                </ul>
                                        </ul>
                        </li>

                </ul>
        </div>
</div>