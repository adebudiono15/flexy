@extends('layouts.master')

@section('title','Content Grid')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Content</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Content Grid</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Grid Options</h5>
                    <p class="card-text">Bootstrap’s grid system uses a series of containers, rows, and columns to
                        layout and align content. It’s built with flexbox and is fully responsive. Below is an example
                        and an in-depth look at how the grid comes together. </p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">
                                        Extra small<br>
                                        <small>&lt;576px</small>
                                    </th>
                                    <th class="text-center">
                                        Small<br>
                                        <small>≥576px</small>
                                    </th>
                                    <th class="text-center">
                                        Medium<br>
                                        <small>≥768px</small>
                                    </th>
                                    <th class="text-center">
                                        Large<br>
                                        <small>≥992px</small>
                                    </th>
                                    <th class="text-center">
                                        Extra large<br>
                                        <small>≥1200px</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-nowrap" scope="row">Max container width</th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td><code>.col-</code></td>
                                    <td><code>.col-sm-</code></td>
                                    <td><code>.col-md-</code></td>
                                    <td><code>.col-lg-</code></td>
                                    <td><code>.col-xl-</code></td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="5">12</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="5">30px (15px on each side of a column)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    <!-- example 2 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Auto-Layout Columns</h5>
                    <p class="card-text">Utilize breakpoint-specific column classes for easy column sizing without an
                        explicit numbered class like <code>.col-sm-6</code>.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->

    <!-- example 3 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Two Column Layout</h5>
                    <p class="card-text">The following example will show you how to create two column layouts for
                        medium, large and extra large devices like tables, laptops and desktops etc. However, on mobile
                        phones (screen width less than 768px), the columns will
                        automatically become horizontal.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-content">.col-md-6</div>
                        </div>
                        <div class="col-md-6">
                            <div class="demo-content bg-alt">.col-md-6</div>
                        </div>
                    </div>

                    <!--Row with two columns divided in 1:2 ratio-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="demo-content">.col-md-4</div>
                        </div>
                        <div class="col-md-8">
                            <div class="demo-content bg-alt">.col-md-8</div>
                        </div>
                    </div>

                    <!--Row with two columns divided in 1:3 ratio-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="demo-content">.col-md-3</div>
                        </div>
                        <div class="col-md-9">
                            <div class="demo-content bg-alt">.col-md-9</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                        <div class="bg-dark pd-20 pb-0">
                            <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
         &lt;div class=&quot;demo-content&quot;&gt;.col-md-6&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-6&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-md-4&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-8&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-8&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-md-3&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-9&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-9&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                    </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 3 -->

    <!-- example 4 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Three Column Layout</h5>
                    <p class="card-text">Similarly, you can create other layouts based on the above principle. For
                        instance, the following example will typically create three column layouts for laptops and
                        desktops screens. It also works in tablets in landscape mode
                        if screen resolution is more than or equal to 992 pixels (e.g. Apple iPad). However, in portrait
                        mode the grid columns will be horizontal as usual.</p>

                    <!--Row with three equal columns-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="demo-content">.col-lg-4</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="demo-content bg-alt">.col-lg-4</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="demo-content">.col-lg-4</div>
                        </div>
                    </div>

                    <!--Row with three columns divided in 1:4:1 ratio-->
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="demo-content">.col-lg-2</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="demo-content bg-alt">.col-lg-8</div>
                        </div>
                        <div class="col-lg-2">
                            <div class="demo-content">.col-lg-2</div>
                        </div>
                    </div>

                    <!--Row with three columns divided unevenly-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="demo-content">.col-lg-3</div>
                        </div>
                        <div class="col-lg-7">
                            <div class="demo-content bg-alt">.col-lg-7</div>
                        </div>
                        <div class="col-lg-2">
                            <div class="demo-content">.col-lg-2</div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                        <div class="bg-dark pd-20 pb-0">
                            <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-4&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-lg-4&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-2&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-2&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-8&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-lg-8&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-2&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-3&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-3&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-7&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-lg-7&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-2&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-lg-2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                        </pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- last example 4 -->

    <!-- example 5 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Wrapping Behavior</h5>
                    <p class="card-text">Now we are going to create more flexible layouts that changes the column
                        orientation based on the viewport size. The following example will create a three column layout
                        on large devices like laptops and desktops, as well as
                        on tablets (e.g. Apple iPad) in landscape mode, but on medium devices like tablets in portrait
                        mode (768px ≤ screen width
                        < 992px), it will change into a two column layout where the third column moves at the bottom of
                            the first two columns.</p> <div class="row">
                            <div class="col-md-4 col-lg-3">
                                <div class="demo-content">.col-md-4 .col-lg-3</div>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <div class="demo-content bg-alt">.col-md-8 .col-lg-6</div>
                            </div>
                            <div class="col-md-12 col-lg-3">
                                <div class="demo-content">.col-md-12 .col-lg-3</div>
                            </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 col-lg-3&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-md-4 .col-lg-3&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-md-8 col-lg-6&quot;&gt;
        &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-8 .col-lg-6&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-md-12 col-lg-3&quot;&gt;
        &lt;div class=&quot;demo-content&quot;&gt;.col-md-12 .col-lg-3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                        </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--last example 5 -->

<!-- example 6 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Wrapping Behavior</h5>
                <p class="card-text">You can use the <code>col-{breakpoint}-auto</code> classes to size columns based on
                    the natural width of their content</p>
                <div class="container">
                    <div class="row justify-content-md-center row-six">
                        <div class="col-md-3 example-grid">Column left</div>
                        <div class="col-md-auto example-grid">Variable width column</div>
                        <div class="col-md-3 example-grid">Column right</div>
                    </div>
                    <div class="row row-six">
                        <div class="col example-grid">Column left</div>
                        <div class="col-auto example-grid">Variable width column</div>
                        <div class="col example-grid">Column right</div>
                    </div>
                </div>


                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row justify-content-md-center row-six&quot;&gt;
            &lt;div class=&quot;col-md-3 example-grid&quot;&gt;Column left&lt;/div&gt;
            &lt;div class=&quot;col-md-auto example-grid&quot;&gt;Variable width column&lt;/div&gt;
            &lt;div class=&quot;col-md-3 example-grid&quot;&gt;Column right&lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row row-six&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column left&lt;/div&gt;
            &lt;div class=&quot;col-auto example-grid&quot;&gt;Variable width column&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column right&lt;/div&gt;
        &lt;/div&gt;      
    &lt;/div&gt;  
&lt;/div&gt;
                                            </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- last example 6 -->

<!-- example 7 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Vertical Alignment of Grid Column</h5>
                <p class="card-text">You can use the classes <code>.align-items-start, .align-items-center, and
                            .align-items-end</code> to align the grid columns vertically at the top, middle and bottom
                    of a container, respectively.
                </p>
                <div class="container">
                    <div class="row align-items-start row-seven">
                        <div class="col example-grid">Column one</div>
                        <div class="col example-grid">Column two</div>
                        <div class="col example-grid">Column three</div>
                    </div>
                    <div class="row align-items-center row-seven">
                        <div class="col example-grid">Column one</div>
                        <div class="col example-grid">Column two</div>
                        <div class="col example-grid">Column three</div>
                    </div>
                    <div class="row align-items-end row-seven">
                        <div class="col example-grid">Column one</div>
                        <div class="col example-grid">Column two</div>
                        <div class="col example-grid">Column three</div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row align-items-start row-seven&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column two&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column three&lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row align-items-center row-seven&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column two&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column three&lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row align-items-end row-seven&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column two&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Column three&lt;/div&gt;
        &lt;/div&gt;    
    &lt;/div&gt;
&lt;/div&gt;
                                                </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- last example 7 -->

<!-- example 8 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Horizontal Alignment of Grid Column</h5>
                <p class="card-text">You can use the classes <code>.justify-content-start, .justify-content-center,
                            and .justify-content-end</code> to align the grid columns horizontally at the left, center
                    and right of a container, respectively
                </p>
                <div class="container">
                    <div class="row justify-content-start row-example">
                        <div class="col-4 example-grid">Column one</div>
                        <div class="col-4 example-grid">Column two</div>
                    </div>
                    <div class="row justify-content-center row-example">
                        <div class="col-4 example-grid">Column one</div>
                        <div class="col-4 example-grid">Column two</div>
                    </div>
                    <div class="row justify-content-end row-example">
                        <div class="col-4 example-grid">Column one</div>
                        <div class="col-4 example-grid">Column two</div>
                    </div>
                </div>
                <p class="card-text mt-5">Alternatively, you can use the class
                    <code>.justify-content-around</code> to distribute grid columns evenly with half-size spaces on
                    either end, whereas you can use the class
                    <code>.justify-content-between</code> to distribute the grid columns evenly where the first column
                    placed at the start and the last column placed at the end.
                </p>
                <div class="container">
                    <div class="row justify-content-around row-example">
                        <div class="col-4 example-grid">Column one</div>
                        <div class="col-4 example-grid">Column two</div>
                    </div>
                    <div class="row justify-content-between row-example">
                        <div class="col-4 example-grid">Column one</div>
                        <div class="col-4 example-grid">Column two</div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row justify-content-start row-example&quot;&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column two&lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row justify-content-center row-example&quot;&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column two&lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;row justify-content-end row-example&quot;&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column two&lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;row justify-content-around row-example&quot;&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column two&lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;row justify-content-between row-example&quot;&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column one&lt;/div&gt;
            &lt;div class=&quot;col-4 example-grid&quot;&gt;Column two&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                    </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- last example 8 -->

<!-- example 9 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Reordering of Grid Column</h5>
                <p class="card-text">You can even change the visual order of your grid columns without changing their
                    order in actual markup. Use the class <code>.order-last</code> to order the column in last, whereas
                    use the class <code>.order-first</code> to
                    order the column at first place
                </p>
                <div class="container">
                    <div class="row row-example">
                        <div class="col example-grid order-last">First, but ordered at last</div>
                        <div class="col example-grid">Second, but unordered</div>
                        <div class="col example-grid order-first">Last, but ordered at first</div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row row-example&quot;&gt;
            &lt;div class=&quot;col example-grid order-last&quot;&gt;First, but ordered at last&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;Second, but unordered&lt;/div&gt;
            &lt;div class=&quot;col example-grid order-first&quot;&gt;Last, but ordered at first&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                        </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- last example 9 -->

<!-- example 10 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Offsetting the Grid Column</h5>
                <p class="card-text">You can also move grid columns to the right for alignment purpose using the column
                    offset classes like <code>.offset-sm-*, .offset-md-*, .offset-lg-*</code>, and so on. These classes
                    offset the columns by simply increasing
                    its left margin by specified number of columns. For example, the class
                    <code>.offset-md-4 on column .col-md-8</code> moves it to the right over four columns from its
                    original position.
                </p>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="demo-content">.col-md-4</div>
                        </div>
                        <div class="col-md-8">
                            <div class="demo-content bg-alt">.col-md-8</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-4">
                            <div class="demo-content bg-alt">.col-md-8 .offset-md-4</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="demo-content">.col-md-3</div>
                        </div>
                        <div class="col-md-9">
                            <div class="demo-content bg-alt">.col-md-9</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="demo-content bg-alt">.col-md-6 .offset-md-3</div>
                        </div>
                        <div class="col-md-3">
                            <div class="demo-content">.col-md-3</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="demo-content">.col-md-3</div>
                        </div>
                        <div class="col-md-3">
                            <div class="demo-content bg-alt">.col-md-3</div>
                        </div>
                        <div class="col-md-3">
                            <div class="demo-content">.col-md-3</div>
                        </div>
                        <div class="col-md-3">
                            <div class="demo-content bg-alt">.col-md-3</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3">
                            <div class="demo-content bg-alt">.col-md-3 .offset-md-3</div>
                        </div>
                        <div class="col-md-3 offset-md-3">
                            <div class="demo-content">.col-md-3 .offset-md-3</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container mt-3&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-4&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-8&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-8 offset-md-4&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-8 .offset-md-4&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-9&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-9&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-6 offset-md-3&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-6 .offset-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-3&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-3&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-md-3 .offset-md-3&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-md-3 .offset-md-3&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                            </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- last example 10 -->

<!-- example 11 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Compact Column</h5>
                <p class="card-text">You can remove the default gutters between columns to create compact layouts by
                    adding the class <code>.no-gutters</code> on <code>.row</code>. This class removes the negative
                    margins from row and the horizontal padding from
                    all immediate children columns.
                </p>
                <div class="container mt-3">
                    <h5 class="text-center">Columns with Gutters</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="demo-content">.col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="demo-content bg-alt">.col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="demo-content">.col-4</div>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-center">Columns without Gutters</h5>
                <div class="container mt-3">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <div class="demo-content">.col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="demo-content bg-alt">.col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="demo-content">.col-4</div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container mt-3&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;container mt-3&quot;&gt;
        &lt;div class=&quot;row no-gutters&quot;&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content bg-alt&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-4&quot;&gt;
                &lt;div class=&quot;demo-content&quot;&gt;.col-4&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                            </pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- last example 11 -->

<!-- example 12 -->
<div class="card mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title">Breaking Columns to a New Line</h5>
                <p class="card-text">You can also create equal-width columns that span multiple rows by inserting a
                    <code>div</code> with <code>.w-100</code> class where you want the columns to break to a new line.
                </p>
                <div class="container">
                    <h5 class="mt-3">Breaking columns on all devices</h5>
                    <div class="row row-example">
                        <div class="col example-grid">.col</div>
                        <div class="col example-grid">.col</div>
                        <div class="w-100"></div>
                        <div class="col example-grid">.col</div>
                        <div class="col example-grid">.col</div>
                    </div>
                    <h5 class="mt-3">Breaking columns on all devices except extra large devices</h5>
                    <div class="row row-example">
                        <div class="col example-grid">.col</div>
                        <div class="col example-grid">.col</div>
                        <div class="w-100 d-xl-none"></div>
                        <div class="col example-grid">.col</div>
                        <div class="col example-grid">.col</div>
                    </div>
                </div>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row row-example&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;w-100&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;row row-example&quot;&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;w-100 d-xl-none&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
            &lt;div class=&quot;col example-grid&quot;&gt;.col&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                            </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- last example 12 -->
</div>
@endsection