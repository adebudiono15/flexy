@extends('layouts.master')

@section('title','Flex')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Content</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Flex</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Enable Flex Behavior</h5>
                    <p class="card-text">Apply <code>display</code> flexbox container and transform direct children
                        elements into flex items. </p>
                    <div class="d-flex p-2 bd-highlight example-flex">I'm a flexbox container!</div>
                    <div class="d-inline-flex  p-2 bd-highlight example-flex mt-3">I'm an inline flexbox container!
                    </div>
                    <p class="card-text mt-3"><a href="https://getbootstrap.com/docs/4.5/utilities/flex/">See
                            More Detail Flex</a> </p>
                    <li><code>.d-flex</code></li>
                    <li><code>.d-inline-flex</code></li>
                    <li><code>.d-sm-flex</code></li>
                    <li><code>.d-sm-inline-flex</code></li>
                    <li><code>.d-md-flex</code></li>
                    <li><code>.d-md-inline-flex</code></li>
                    <li><code>.d-lg-flex</code></li>
                    <li><code>.d-lg-inline-flex</code></li>
                    <li><code>.d-xl-flex</code></li>
                    <li><code>.d-xl-inline-flex</code></li>
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
                    <h5 class="card-title">Direction</h5>
                    <p class="card-text">Add atributte <code>.flex-row</code> to set a horizontal direction (the browser
                        default), or <code> .flex-row-reverse</code> to start the horizontal direction from the opposite
                        side.
                    </p>
                    <div>
                        <div class="d-flex flex-row bd-highlight mb-3 row-flex-example">
                            <div class="p-2 bd-highlight example-flex">Flex item 1</div>
                            <div class="p-2 bd-highlight example-flex">Flex item 2</div>
                            <div class="p-2 bd-highlight example-flex">Flex item 3</div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight row-flex-example">
                            <div class="p-2 bd-highlight example-flex">Flex item 1</div>
                            <div class="p-2 bd-highlight example-flex">Flex item 2</div>
                            <div class="p-2 bd-highlight example-flex">Flex item 3</div>
                        </div>
                        <p class="card-text mt-3">Add atributte <code>.flex-column</code> to set a vertical direction,
                            or
                            <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.c
                        </p>
                        <div>
                            <div class="d-flex flex-column bd-highlight mb-3 row-flex-example">
                                <div class="p-2 bd-highlight example-flex">Flex item 1</div>
                                <div class="p-2 bd-highlight example-flex">Flex item 2</div>
                                <div class="p-2 bd-highlight example-flex">Flex item 3</div>
                            </div>
                            <div class="d-flex flex-column-reverse bd-highlight row-flex-example">
                                <div class="p-2 bd-highlight example-flex">Flex item 1</div>
                                <div class="p-2 bd-highlight example-flex">Flex item 2</div>
                                <div class="p-2 bd-highlight example-flex">Flex item 3</div>
                            </div>
                        </div>
                    </div>
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
                    <h5 class="card-title">Justify Content</h5>
                    <p class="card-text">Add atrributte <code>justify-content</code> utilities on flexbox containers to
                        change the alignment of flex items on the main axis (the x-axis to start, y-axis
                        <code>if flex-direction: column</code>). Choose from <code>> start (browser default), end, center, between,
                                    or around</code>.</p>

                    <div class="d-flex justify-content-start example-flex">Flex Item</div>
                    <div class="d-flex justify-content-end example-flex">Flex Item</div>
                    <div class="d-flex justify-content-center example-flex">Flex Item</div>
                    <div class="d-flex justify-content-between example-flex">Flex Item</div>
                    <div class="d-flex justify-content-around example-flex">Flex Item</div>
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
                    <h5 class="card-title">Align Items</h5>
                    <p class="card-text">Add atrributte <code>align-items</code> utilities on flexbox containers to
                        change the alignment of flex items on the main axis (the x-axis to start, y-axis
                        <code>if flex-direction: column</code>). Choose from <code>> start (browser default), end, center, baseline,
                                                or stretch</code>.</p>
                    <div class="container">
                        <div class="row example-flex-align">
                            <div class="d-flex align-items-start example-flex">Flex Item</div>
                            <div class="d-flex align-items-start example-flex">Flex Item</div>
                            <div class="d-flex align-items-start example-flex">Flex Item</div>
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
                    <h5 class="card-title">Fill</h5>
                    <p class="card-text">Add atributte the <code>.flex-fill</code> class on a series of sibling elements
                        to force them into widths equal to their content.</p>
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight example-flex">Flex item with a lot of content
                        </div>
                        <div class="p-2 flex-fill bd-highlight example-flex">Flex item</div>
                        <div class="p-2 flex-fill bd-highlight example-flex">Flex item</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 5 -->

    <!-- example 6 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title">Grow And Shrink</h5>
                    <p class="card-text">Add atributte <code>.flex-grow-*</code> flex item’s ability to grow to fill
                        available space. In the example below, the
                        <code>.flex-grow-1</code> elements uses all available space it can, while allowing the remaining
                        two flex items their necessary space.
                    </p>
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-grow-1 bd-highlight example-flex">Flex item</div>
                        <div class="p-2 bd-highlight example-flex">Flex item</div>
                        <div class="p-2 bd-highlight example-flex">Third flex item</div>
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
                    <h5 class="card-title">Wrap</h5>
                    <p class="card-text">Change how flex items wrap in a flex container. Choose from no wrapping at all
                        (the browser default) with <code>.flex-nowrap</code> , wrapping with
                        <code> .flex-wrap</code>, or reverse wrapping with
                        <code>.flex-wrap-reverse</code>.
                    </p>
                    <div class="d-flex flex-wrap row-flex-example">
                        <div class="p-2 example-flex">India</div>
                        <div class="p-2 example-flex">US</div>
                        <div class="p-2 example-flex">UK</div>
                        <div class="p-2 example-flex">Australia</div>
                        <div class="p-2 example-flex">Denmark</div>
                        <div class="p-2 example-flex">India</div>
                        <div class="p-2 example-flex">Poland</div>
                        <div class="p-2 example-flex">Netherlands</div>
                        <div class="p-2 example-flex">Ireland</div>
                        <div class="p-2 example-flex">Brazil</div>
                        <div class="p-2 example-flex">Russia</div>
                        <div class="p-2 example-flex">Morocco</div>
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
                    <h5 class="card-title">Order</h5>
                    <p class="card-text">Change the visual <code>order</code> of specific flex items.
                    </p>
                    <div class="d-flex flex-nowrap bd-highlight row-flex-example">
                        <div class="order-3 p-2 bd-highlight example-flex">First flex item</div>
                        <div class="order-2 p-2 bd-highlight example-flex">Second flex item</div>
                        <div class="order-1 p-2 bd-highlight example-flex">Third flex item</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 8 -->

</div>
@endsection