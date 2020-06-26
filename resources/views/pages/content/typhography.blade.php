@extends('layouts.master')

@section('title','Typography')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Content</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Typography</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Default Font</h5>
                    <p>The default web fonts (Roboto, Helvetica, sans-serif)</p>

                    <li>Use a <a href="https://getbootstrap.com/docs/4.5/content/reboot/#native-font-stack">native
                            font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for
                        each OS and device.</li>
                    <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code
                            class="highlighter-rouge">$font-size-base</code>, and <code
                            class="highlighter-rouge">$line-height-base</code> attributes as our typographic base
                        applied
                        to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
                    <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link
                        underlines only on <code class="highlighter-rouge">:hover</code>.</li>
                    <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code
                            class="highlighter-rouge">background-color</code> on the <code
                            class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code>
                        by
                        default).
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    <!-- example 2 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">HTML Headings Default</h5>
                <p class="ml-3">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are
                    available.
                    <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the
                    font styling of a heading.</p>
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th>Preview</th>
                                <th class="text-right">Font Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>H6 Heading</h6>
                                </td>
                                <td class="type-info text-right">1rem</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>H5 Heading</h5>
                                </td>
                                <td class="type-info text-right">1.25rem</td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>H4 Heading</h4>
                                </td>
                                <td class="type-info text-right">1.5rem</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>H3 Heading</h3>
                                </td>
                                <td class="type-info text-right">1.75rem</td>
                            </tr>
                            <tr>
                                <td>
                                    <h2>H2 Heading</h2>
                                </td>
                                <td class="type-info text-right">2rem</td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>H1 Heading</h1>
                                </td>
                                <td class="type-info text-right">2.5rem</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- last example 2  -->

        <!-- example 3 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Light / Bold Headings</h5>
                <p class="ml-3">All HTML headings are available with light and bold font-weight. Use
                    <code>.text-bold-400</code> for light heading and <code>.text-bold-600</code> for bold headings.
                </p>
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th>Light headings</th>
                                <th class="text-right">Bold headings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="text-bold-300">Heading 6</h6>
                                </td>
                                <td class="text-right">
                                    <h6 class="text-bold-600">Heading 6</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="text-bold-300">Heading 5</h5>
                                </td>
                                <td class="text-right">
                                    <h5 class="text-bold-600">Heading 5</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-bold-300">Heading 4</h4>
                                </td>
                                <td class="text-right">
                                    <h4 class="text-bold-600">Heading 4</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="text-bold-300">Heading 3</h3>
                                </td>
                                <td class="text-right">
                                    <h3 class="text-bold-600">Heading 3</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="text-bold-300">Heading 2</h2>
                                </td>
                                <td class="text-right">
                                    <h2 class="text-bold-600">Heading 2</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="text-bold-300">Heading 1</h1>
                                </td>
                                <td class="text-right">
                                    <h1 class="text-bold-600">Heading 1</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- last exmaple 3 -->
    </div>

    <!-- example 4 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Customizing Headings Default</h5>
                <p class="ml-3">Use the included utility classes to recreate the small secondary heading text.
                </p>
                <div class="table-responsive">
                    <table class="table table-mx-0 table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Display heading <small class="text-muted">Secondary text</small></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Display heading <small class="text-muted">Secondary text</small></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Display heading <small class="text-muted">Secondary text</small></h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Display heading <small class="text-muted">Secondary text</small></h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2>Display heading <small class="text-muted">Secondary text</small></h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>Display heading <small class="text-muted">Secondary text</small></h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- last example 4  -->

        <!-- example 5 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Heading Color</h5>
                <p class="ml-3">Heading elements are also changed with different color options. <br> Use
                    <code>.text-"color name"</code> class with heading elements. </p>
                <div class="table-responsive">
                    <table class="table table-mx-0 table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="text-secondary">Display heading</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="text-danger">Display heading</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-warning">Display heading</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="text-info">Display heading</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="text-success">Display heading</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="text-primary">Display heading</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- last exmaple 5 -->
    </div>

    <!-- example 6 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Display Headings</h5>
                    <p>Traditional heading elements are designed to work best in the meet of your page content. When you
                        need a heading to stand out, consider using a <strong>display
                            heading</strong>—a larger, slightly more opinionated heading style.</p>
                    <div class="table-responsive">
                        <table class="table table-mx-0 table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h1 class="display-1">Display 1</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="display-2">Display 2</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="display-3">Display 3</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="display-4">Display 4</h1>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 6 -->

    <!-- example 7 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Blockquotes Default</h5>
                <p class="ml-3">Left aligned basic blockquotes. Use text utilities classes like
                    <code>.text-center or .text-right</code> as needed to change the alignment of your blockquote.
                </p>
                <blockquote class="blockquote">
                    <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.
                    </p>
                </blockquote>

            </div>
        </div>
        <!-- last example 7  -->

        <!-- example 8 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Naming A Source Default</h5>
                <p class="ml-3">Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code>
                    for identifying the source.</p>
                <blockquote class="blockquote">
                    <p class="mb-0">Once in your life, try working hard on something. Try changing. Nothing bad can
                        happen.</p>
                    <footer class="blockquote-footer">Jack Ma
                        <cite title="Source Title">Businessman</cite>
                    </footer>
                </blockquote>

            </div>
        </div>
        <!-- last exmaple 8 -->
    </div>

    <!-- example 9 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Blockquotes Styling</h5>
                <p class="ml-3">Add attribute <code
                        class="highlighter-rouge">.border-left/right-color .border-left/right-3</code> helper classes,
                    where color can be any color from Frest Admin color palette.</p>
                <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                    <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly,
                        and get on with improving your other innovations.</p>
                    <footer class="blockquote-footer">Dafid
                        <cite title="Source Title">Entrepreneur</cite>
                    </footer>
                </blockquote>

            </div>
        </div>
        <!-- last example 9  -->

        <!-- example 10 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Blockquotes With Avatar</h5>
                <p class="ml-3">Blockquotes with avatar. it use Media Object. You can customize image type, border
                    alignment & style.</p>
                <div>
                    <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                        <div class="media">
                            <div class="pr-1">
                                <img class="media-object img-xl mt-1" src="assets/img/avatar_5.jpeg"
                                    alt="Generic placeholder image">
                            </div>
                            <div class="media-body ml-1">
                                Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                            </div>
                        </div>
                        <footer class="blockquote-footer text-right">Gustaf
                            <cite title="Source Title">Entrepreneur</cite>
                        </footer>
                    </blockquote>

                </div>
            </div>
        </div>
        <!-- last exmaple 10 -->
    </div>

    <!-- example 11 -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Lists Unstyled</h5>
                <p class="ml-3">Add attribute <code>.list-unstyled</code> for Lists Unstyled. It remove the default
                    <code class="highlighter-rouge">list-style</code> and left margin on list items (immediate children
                    only).
                    <strong>This only applies to immediate children list items</strong>, meaning you will need to add
                    the class for any nested lists as well.</p>
                <ul class="list-unstyled ml-3">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ul>

            </div>
        </div>
        <!-- last example 11  -->

        <!-- example 12 -->
        <div class="col-md-4">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Lists Unordered</h5>
                <p class="ml-3">List of items in which the order does not explicitly matter. Use
                    <code>.list-style-circle</code> or
                    <code>.list-style-square</code> class in unordered list to add circle or square bullet points.
                </p>
                <div class="card-text">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- last exmaple 12 -->

        <!-- example 13 -->
        <div class="col-md-4">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Lists Ordered</h5>
                <p class="ml-3">List of items in which the order does explicitly matter. Use
                    <code>&lt;ol type="1|a|A|i|I"&gt;</code>, The type attribute specifies the kind of marker to use in
                    the list.</p>
                <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                        <ol>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ol>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ol>

            </div>
        </div>
        <!-- ;ast example 13 -->
    </div>

    <!-- example 14 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">List Icon</h5>
                <p class="ml-3">list of terms with icons, use <code>.list-style-icons</code>.</p>
                <ul class="list-style-icons">
                    <li><i class="bx bx-folder-open"></i> Facilisis in pretium nisl aliquet</li>
                    <li><i class="bx bx-folder-openpen-o"></i> Nulla volutpat aliquam velit
                        <ul class="list-style-icons">
                            <li><i class="bx bx-folder-open"></i> Phasellus iaculis neque</li>
                            <li><i class="bx bx-folder-open"></i> Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li><i class="bx bx-folder-open"></i> Faucibus porta lacus fringilla vel</li>
                    <li><i class="bx bx-folder-open"></i> Aenean sit amet erat nunc</li>
                </ul>

            </div>
        </div>
        <!-- last example 11  -->

        <!-- example 12 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h5 class="card-title mt-3 ml-3">Inline List</h5>
                <p class="ml-3">Remove a list’s bullets and apply some light <code>margin</code> with a combination of
                    two classes,
                    <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
                <ul class="list-inline ml-3">
                    <li class="list-inline-item"><i class="bx bxl-google align-middle"></i><span
                            class="align-middle ml-25">Google</span></li>
                    <li class="list-inline-item"><i class="bx bxl-twitter align-middle"></i><span
                            class="align-middle ml-25">Twitter</span></li>
                    <li class="list-inline-item"><i class="bx bxl-facebook align-middle"></i><span
                            class="align-middle ml-25">Facebook</span></li>
                </ul>

                <ul class="list-inline ml-3">
                    <li class="list-inline-item"><i class="bx bx-home align-middle"></i><span
                            class="align-middle ml-25">Home</span></li>
                    <li class="list-inline-item"><i class="bx bx-message-alt align-middle"></i><span
                            class="align-middle ml-25">Message</span></li>
                    <li class="list-inline-item"><i class="bx bx-user align-middle"></i><span
                            class="align-middle ml-25">Profile</span></li>
                </ul>

                <ul class="list-inline ml-3">
                    <li class="list-inline-item">1. Chocolate</li>
                    <li class="list-inline-item">2. Cake</li>
                    <li class="list-inline-item">3. Ice-Cream</li>
                </ul>
            </div>
        </div>
        <!-- last exmaple 12 -->
    </div>
    <!-- last exapmle 14 -->

</div>
@endsection