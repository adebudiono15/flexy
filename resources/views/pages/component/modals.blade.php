@extends('layouts.master')

@section('title','Modals')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    $(document).ready(function () {
        // show
        $("#showModal").on('show.bs.modal', function () {
            alert("onShow event fired.");
        });
        // shown
        $("#shownModal").on('shown.bs.modal', function () {
            alert("onShown event fired.");
        });
        // hide
        $("#hideModal").on('hide.bs.modal', function () {
            alert("Hide event fired.");
        });
        // hidden
        $("#hiddenModal").on('hidden.bs.modal', function () {
            alert("Hidden event fired.");
        });
    });
</script>
@endpush

@section('content')
<main class="main-content">
    <div class="breadcrumb d-flex align-items-center pd-20 pb-0">
        <div><a href="#"><i class="icon-home"></i> Home</a></div>
        <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
        <div><a href="#">Components</a></div>
        <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
        <div>Modals</div>
    </div>
    <div class="pd-20 pt-0">
        <div class="alert bg-clean-secondary">
            This modal component from bootstrap modal. <a href="https://getbootstrap.com/docs/4.4/components/modal/"
                target="_blank">Click Here</a> for detail.
        </div>

        <div class="row">
            <!-- example 1 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Modal</h5>
                        <p class="card-text">Click the button toggle below. It will slide down and fade in from the
                            top of the page.</p>

                        <button type="button" class="btn btn-outline-info" data-toggle="modal"
                            data-target="#exampleModal1">
                            Launch Modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Basic Modal
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Bonbon caramels muffin. Chocolate bar oat cake cookie pastry dragée pastry.
                                        Carrot cake chocolate tootsie roll chocolate bar candy canes biscuit.
                                        Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet
                                        roll. Toffee sugar plum sugar plum jelly-o jujubes bonbon dessert carrot
                                        cake. Cookie dessert tart muffin topping donut icing fruitcake. Sweet roll
                                        cotton candy dragée danish Candy canes chocolate bar cookie. Gingerbread
                                        apple pie oat cake. Carrot cake fruitcake bear claw. Pastry gummi bears
                                        marshmallow jelly-o.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-grey" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- example 2 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Scrolling Long Content</h5>
                        <p class="card-text">If your content is longer you the page will autmatically adopt a
                            scrollbar.</p>

                        <div class="bs-example">
                            <!-- Button HTML (to Trigger Modal) -->
                            <a href="#modalScrollableCenter" role="button" class="btn btn-outline-info"
                                data-toggle="modal">Launch demo modal</a>

                            <!-- Scrollable Modal HTML -->
                            <div id="modalScrollableCenter" class="modal fade" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal Alignment Demo</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                                                sem
                                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus
                                                nec
                                                turpis vel, semper malesuada ante. Vestibulum id metus ac nisl
                                                bibendum scelerisque non non purus. Suspendisse varius nibh non
                                                aliquet sagittis. In tincidunt orci sit amet elementum
                                                vestibulum.
                                                Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio
                                                in
                                                fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique
                                                eget
                                                risus. Integer aliquet quam ut elit suscipit, id interdum neque
                                                porttitor. Integer faucibus ligula.</p>
                                            <p>Quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                                                mi
                                                suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra
                                                sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet
                                                gravida nibh, facilisis gravida odio. Phasellus auctor velit at
                                                lacus blandit, commodo iaculis justo viverra. Etiam vitae est
                                                arcu.
                                                Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor,
                                                commodo ac dui quis, bibendum viverra erat. Maecenas mattis
                                                lectus
                                                enim, quis tincidunt dui molestie euismod. Curabitur et diam
                                                tristique, accumsan nunc eu, hendrerit tellus.</p>
                                            <p>Orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a
                                                iaculis lacus. Phasellus vitae convallis ligula, nec volutpat
                                                tellus. Vivamus scelerisque mollis nisl, nec vehicula elit
                                                egestas
                                                a. Sed luctus metus id mi gravida, faucibus convallis neque
                                                pretium.
                                                Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo.
                                                Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices
                                                nunc
                                                sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra
                                                tellus. Phasellus sodales libero nec dui convallis, sit amet
                                                fermentum sapien auctor. Vestibulum ante ipsum primis in
                                                faucibus
                                                orci luctus et ultrices posuere cubilia Curae; Sed eu elementum
                                                nibh, quis varius libero.</p>
                                            <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl
                                                risus, in viverra libero egestas sit amet. Etiam porttitor dolor
                                                non
                                                eros pulvinar malesuada. Vestibulum sit amet est mollis nulla
                                                tempus
                                                aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi
                                                consequat
                                                placerat magna, ac ornare odio sagittis sed. Donec vitae
                                                ullamcorper
                                                purus. Vivamus non metus ac justo porta volutpat.</p>
                                            <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                                                sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh
                                                vitae lorem porttitor blandit in nec ante. Pellentesque vitae
                                                metus
                                                ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in
                                                aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget
                                                blandit. Proin imperdiet mattis augue in porttitor. Quisque
                                                tempus
                                                enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor
                                                fringilla blandit. Ut sed sapien at purus lacinia porttitor.
                                                Nullam
                                                iaculis, felis a pretium ornare, dolor nisl semper tortor, vel
                                                sagittis lacus est consequat eros. Sed id pretium nisl.
                                                Curabitur
                                                dolor nisl, laoreet vitae aliquam id.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-grey"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline-info" data-dismiss="modal">OK,
                                                Got
                                                it!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- example 3 -->
        <div class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vertically Centered</h5>
                            <p class="card-text">Add attribute <code>.modal-dialog-centered</code> to
                                <code>.modal-dialog </code> to vertically center the modal.</p>

                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <a href="#modalCenter" role="button" class="btn btn-outline-info"
                                    data-toggle="modal">Vertically Centered Modal</a>

                                <!-- Modal HTML -->
                                <div id="modalCenter" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal Alignment Demo</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                                                    sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus
                                                    nec
                                                    turpis vel, semper malesuada ante. Vestibulum id metus ac nisl
                                                    bibendum scelerisque non non purus. Suspendisse varius nibh non
                                                    aliquet sagittis. In tincidunt orci sit amet.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">OK, Got
                                                    it!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- example 4 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Disabled Animation</h5>
                            <p class="card-text">For modals that simply appear rather than fade in to view, remove
                                the <code>.fade </code> class from your modal markup.</p>

                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <a href="#noanimatio" class="btn btn-outline-info" data-toggle="modal">Launch modal
                                    demo</a>

                                <!-- Modal HTML -->
                                <div id="noanimatio" class="modal hide" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal No Animation</h5>
                                                <button type="button" class="close" data-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                                                    sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus
                                                    nec
                                                    turpis vel, semper malesuada ante. Vestibulum id metus ac nisl
                                                    bibendum scelerisque non non purus. Suspendisse varius nibh non
                                                    aliquet sagittis. In tincidunt orci sit amet.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">OK, Got
                                                    it!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- example 5 -->
        <div class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="card-title">Modal with Login Form</h4>
                                <p> Created Simple Login Form.</p>
                                <!-- Button trigger for login form modal -->
                                <button type="button" class="btn btn-outline-info" data-toggle="modal"
                                    data-target="#inlineForm">
                                    Launch Modal
                                </button>

                                <!--login form Modal -->
                                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="bx bx-x"></i>
                                                </button>
                                            </div>
                                            <form action="#">
                                                <div class="modal-body">
                                                    <label>Email: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Email Address"
                                                            class="form-control">
                                                    </div>
                                                    <label>Password: </label>
                                                    <div class="form-group">
                                                        <input type="password" placeholder="Password"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-grey" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-info ml-1"
                                                        data-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">login</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- example 6 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modals Long Content</h5>
                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <a href="#modalScrollable" role="button" class="btn btn-outline-info"
                                    data-toggle="modal">Launch demo modal</a>

                                <!-- Scrollable Modal HTML -->
                                <div id="modalScrollable" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal Long Content</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                                                    sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus
                                                    nec
                                                    turpis vel, semper malesuada ante. Vestibulum id metus ac nisl
                                                    bibendum scelerisque non non purus. Suspendisse varius nibh non
                                                    aliquet sagittis. In tincidunt orci sit amet elementum
                                                    vestibulum.
                                                    Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio
                                                    in
                                                    fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique
                                                    eget
                                                    risus. Integer aliquet quam ut elit suscipit, id interdum neque
                                                    porttitor. Integer faucibus ligula.</p>
                                                <p>Quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                                                    mi
                                                    suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra
                                                    sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet
                                                    gravida nibh, facilisis gravida odio. Phasellus auctor velit at
                                                    lacus blandit, commodo iaculis justo viverra. Etiam vitae est
                                                    arcu.
                                                    Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor,
                                                    commodo ac dui quis, bibendum viverra erat. Maecenas mattis
                                                    lectus
                                                    enim, quis tincidunt dui molestie euismod. Curabitur et diam
                                                    tristique, accumsan nunc eu, hendrerit tellus.</p>
                                                <p>Orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a
                                                    iaculis lacus. Phasellus vitae convallis ligula, nec volutpat
                                                    tellus. Vivamus scelerisque mollis nisl, nec vehicula elit
                                                    egestas
                                                    a. Sed luctus metus id mi gravida, faucibus convallis neque
                                                    pretium.
                                                    Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo.
                                                    Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices
                                                    nunc
                                                    sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra
                                                    tellus. Phasellus sodales libero nec dui convallis, sit amet
                                                    fermentum sapien auctor. Vestibulum ante ipsum primis in
                                                    faucibus
                                                    orci luctus et ultrices posuere cubilia Curae; Sed eu elementum
                                                    nibh, quis varius libero.</p>
                                                <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl
                                                    risus, in viverra libero egestas sit amet. Etiam porttitor dolor
                                                    non
                                                    eros pulvinar malesuada. Vestibulum sit amet est mollis nulla
                                                    tempus
                                                    aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi
                                                    consequat
                                                    placerat magna, ac ornare odio sagittis sed. Donec vitae
                                                    ullamcorper
                                                    purus. Vivamus non metus ac justo porta volutpat.</p>
                                                <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                                                    sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh
                                                    vitae lorem porttitor blandit in nec ante. Pellentesque vitae
                                                    metus
                                                    ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in
                                                    aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget
                                                    blandit. Proin imperdiet mattis augue in porttitor. Quisque
                                                    tempus
                                                    enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor
                                                    fringilla blandit. Ut sed sapien at purus lacinia porttitor.
                                                    Nullam
                                                    iaculis, felis a pretium ornare, dolor nisl semper tortor, vel
                                                    sagittis lacus est consequat eros. Sed id pretium nisl.
                                                    Curabitur
                                                    dolor nisl, laoreet vitae aliquam id.</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">OK, Got
                                                    it!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- example 7 -->
        <div class="mt-4">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="card-title">Modal Themes</h4>
                                <p> Use class <code>.bg-*</code> with your <code>.modal-header</code> to change
                                    theme of modal</p>
                                <!-- Button HTML (to Trigger Modal) -->
                                <button href="#myModal1" class="btn btn-outline-primary ml-2"
                                    data-toggle="modal">Primary</button>
                                <button href="#myModal2" class="btn btn-outline-success ml-2"
                                    data-toggle="modal">Success</button>
                                <button href="#myModal3" class="btn btn-outline-danger ml-2"
                                    data-toggle="modal">Danger</button>
                                <button href="#myModal4" class="btn btn-outline-info ml-2"
                                    data-toggle="modal">Info</button>
                                <button href="#myModal5" class="btn btn-outline-warning ml-2"
                                    data-toggle="modal">Warning</button>
                                <button href="#myModal6" class="btn btn-outline-dark ml-2"
                                    data-toggle="modal">dark</button>

                                <!-- Modal HTML primary -->
                                <div id="myModal1" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML success -->
                                <div id="myModal2" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML danger -->
                                <div id="myModal3" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML success -->
                                <div id="myModal4" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML warning -->
                                <div id="myModal5" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-warning"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML success -->
                                <div id="myModal6" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h5 class="modal-title text-white">Confirmation</h5>
                                                <button type="button" class="close text-white"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to save changes to this document before closing?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-dark"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- example 8 -->
        <div class="mt-4">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="card-title">Modal Sizes</h4>
                                <p> Add attribute <code>.modal-{sm|lg|xl|full}</code> with
                                    <code>.modal-dialog</code> to create a modal with different size.</p>
                                <!-- Button HTML (to Trigger Modal) -->
                                <button href="#myModalExtraLarge" class="btn btn-outline-main ml-1"
                                    data-toggle="modal">Extra Large</button>
                                <button href="#myModalLarge" class="btn btn-outline-main ml-1"
                                    data-toggle="modal">Large</button>
                                <button href="#myModalSmall" class="btn btn-outline-main ml-1"
                                    data-toggle="modal">Small</button>
                                <!-- Modal HTML primary -->
                                <div id="myModalExtraLarge" class="modal fade">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Extra Large Modal</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                                                    sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh
                                                    vitae lorem porttitor blandit in nec ante. Pellentesque vitae
                                                    metus
                                                    ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in
                                                    aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget
                                                    blandit. Proin imperdiet mattis augue in porttitor. Quisque
                                                    tempus
                                                    enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor
                                                    fringilla blandit. Ut sed sapien at purus lacinia porttitor.
                                                    Nullam
                                                    iaculis, felis a pretium ornare, dolor nisl semper tortor, vel
                                                    sagittis lacus est consequat eros. Sed id pretium nisl.
                                                    Curabitur
                                                    dolor nisl, laoreet vitae aliquam id.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML success -->
                                <div id="myModalLarge" class="modal fade">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Large Modal</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                                                    sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh
                                                    vitae lorem porttitor blandit in nec ante. Pellentesque vitae
                                                    metus
                                                    ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in
                                                    aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget
                                                    blandit. Proin imperdiet mattis augue in porttitor. Quisque
                                                    tempus
                                                    enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor
                                                    fringilla blandit. Ut sed sapien at purus lacinia porttitor.
                                                    Nullam
                                                    iaculis, felis a pretium ornare, dolor nisl semper tortor, vel
                                                    sagittis lacus est consequat eros. Sed id pretium nisl.
                                                    Curabitur
                                                    dolor nisl, laoreet vitae aliquam id.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal HTML danger -->
                                <div id="myModalSmall" class="modal fade">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Small Modal</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                                                    sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh
                                                    vitae lorem porttitor blandit in nec ante. Pellentesque vitae
                                                    metus
                                                    ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in
                                                    aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget
                                                    blandit. Proin imperdiet mattis augue in porttitor. Quisque
                                                    tempus
                                                    enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor
                                                    fringilla blandit. Ut sed sapien at purus lacinia porttitor.
                                                    Nullam
                                                    iaculis, felis a pretium ornare, dolor nisl semper tortor, vel
                                                    sagittis lacus est consequat eros. Sed id pretium nisl.
                                                    Curabitur
                                                    dolor nisl, laoreet vitae aliquam id.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event -->
        <div class="mt-4">
            <div class="row">
                <!-- event 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">On Show Event</h4>
                            <p>This event fires immediately when the show instance method is called. If caused by a
                                click, the clicked element is available as the relatedTarget property of the event.
                            </p>
                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <button type="button" class="btn btn-outline-info" data-toggle="modal"
                                    data-target="#showModal">Launch Modal</button>

                                <!-- Modal HTML -->
                                <div id="showModal" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">On Show Event Modal
                                                </h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Donut chocolate halvah I love caramels. Dessert croissant I love
                                                    icing I love dragée candy canes chocolate bar. Oat cake lollipop
                                                    I love cake chocolate bar jelly sweet. I love cotton candy oat
                                                    cake jelly.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event 2 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">On Shown Event</h4>
                            <p>This event is fired when the modal has been made visible to the user (will wait for
                                CSS transitions to complete).
                            </p>
                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <button type="button" class="btn btn-outline-info" data-toggle="modal"
                                    data-target="#shownModal">Launch Modal</button>

                                <!-- Modal HTML -->
                                <div id="shownModal" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">On Show Event Modal
                                                </h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Donut chocolate halvah I love caramels. Dessert croissant I love
                                                    icing I love dragée candy canes chocolate bar. Oat cake lollipop
                                                    I love cake chocolate bar jelly sweet. I love cotton candy oat
                                                    cake jelly.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="row">
                <!-- event 3 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">On Hide Event</h4>
                            <p>This event is fired immediately when the hide instance method has been called.
                            </p>
                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <button type="button" class="btn btn-outline-info" data-toggle="modal"
                                    data-target="#hideModal">Launch Modal</button>

                                <!-- Modal HTML -->
                                <div id="hideModal" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">On Hide Event Modal
                                                </h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Donut chocolate halvah I love caramels. Dessert croissant I love
                                                    icing I love dragée candy canes chocolate bar. Oat cake lollipop
                                                    I love cake chocolate bar jelly sweet. I love cotton candy oat
                                                    cake jelly.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event 2 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">On Hidden Event</h4>
                            <p>This event is fired when the modal has finished being hidden from the user (will wait
                                for CSS transitions to complete).
                            </p>
                            <div class="bs-example">
                                <!-- Button HTML (to Trigger Modal) -->
                                <button type="button" class="btn btn-outline-info" data-toggle="modal"
                                    data-target="#hiddenModal">Launch Modal</button>

                                <!-- Modal HTML -->
                                <div id="hiddenModal" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">On Hidden Event Modal
                                                </h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Donut chocolate halvah I love caramels. Dessert croissant I love
                                                    icing I love dragée candy canes chocolate bar. Oat cake lollipop
                                                    I love cake chocolate bar jelly sweet. I love cotton candy oat
                                                    cake jelly.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-outline-info"
                                                    data-dismiss="modal">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection