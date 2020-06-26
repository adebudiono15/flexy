@extends('layouts.master')

@section('title','Media objects')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Media Objects</div>
</div>
<div class="pd-20 pt-0">
    <div class="row mt-4 media">
        <!-- media Objects example 1 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Left Aligned Media Objects</h6>
                <P class="ml-3 mt-3">Wrap your <code>img</code> tag inside of <code>.media</code> class to align
                    your
                    image to left. you don't have to add any extra classes to to align your text to left.</P>
                <div class="media mt-4">
                    <img src="assets/img/avatar.jpeg" style="width: 4rem;" class=" ml-3" alt=" ... ">
                    <div class="media-body ml-3 mr-3">
                        <h5 class="media-body">Mud cake</h5>
                        <p>Mud cake is a light snack with the main ingredients as coconut milk, potatoes, flour
                            and eggs. As a deodorizer, vanilla is used and is often given an ornamental raisin
                            and sliced ​​young coconut on its surface. This cake
                            is classified as a wet cake so it can not stand a long time.</p>
                    </div>
                </div>

                <div class="media mt-3">
                    <img src="assets/img/avatar_2.jpeg" class="ml-3" style="width: 4rem;" class=" ml-3" alt=" ... ">
                    <div class=" media-body ml-3 mr-3">
                        <h5 class="media-body">Cucur Cake</h5>
                        <p>Kue Kucur or Kucur or kuuc cucur, and is called khanom fak bua or khanom jujun in
                            Thai, is a traditional snack in the Southeast Asian region, including Indonesia,
                            Malaysia and Southern Thailand.</p>
                    </div>
                </div>

                <div class="media mt-3">
                    <img src="assets/img/avatar_3.jpeg" class="ml-3" style="width: 4rem;" class=" ml-3" alt=" ... ">
                    <div class=" media-body ml-3 mr-3">
                        <h5 class="media-body">Dumplings</h5>
                        <p>Dumplings are food in the form of minced meat wrapped in flour sheets. After boiling
                            for a while, dumplings are generally served in soup. Besides boiling, dumplings are
                            also fried in a lot of cooking oil to crackers. Dumplings
                            are one of the dim sum types.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 1  -->
        <!-- media Objects example 2 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Right Aligned Media With Round Images</h6>
                <P class="ml-3 mt-3">Use class <code>.rounded-circle</code> with your <code>img</code> tag to
                    shape
                    image as a circle. use class <code>.text-right</code> with <code>.media-body</code> for
                    right aligned text.</P>
                <div class="media-list">
                    <div class="media mt-4">
                        <div class="media-body text-right">
                            <h5 class="media-heading mr-3">Mud cake</h5>
                            <p class="mr-3 ml-3">Mud cake is a light snack with the main ingredients as coconut
                                milk,
                                potatoes, flour and eggs. As a deodorizer, vanilla is used and is often given an
                                ornamental raisin and sliced ​​young coconut on its surface. This
                                cake is classified as a wet cake so it can not stand a long time.</p>
                        </div>
                        <a href="#">
                            <img class="media-object rounded-circle mr-3" src="assets/img/avatar.jpeg" alt="..."
                                height="64" width="64">
                        </a>
                    </div>
                    <div class="media mt-3">
                        <div class="media-body text-right">
                            <h5 class="media-heading mr-3">Cucur Cake</h5>
                            <p class="mr-3 ml-3">Kue Kucur or Kucur or kuuc cucur, and is called khanom fak bua
                                or
                                khanom jujun in Thai, is a traditional snack in the Southeast Asian region,
                                including Indonesia, Malaysia and Southern Thailand. </p>
                        </div>
                        <a href="#">
                            <img class="media-object rounded-circle  mr-3" src="assets/img/avatar_2.jpeg" alt=" ... "
                                height="64" width="64">
                        </a>
                    </div>
                    <div class=" media mt-3">
                        <div class=" media-body text-right">
                            <h5 class="media-heading mr-3">Dumplings</h5>
                            <p class="mr-3 ml-3">Dumplings are food in the form of minced meat wrapped in flour
                                sheets. After boiling for a while, dumplings are generally served in soup.
                                Besides boiling, dumplings are also fried in a lot of cooking oil to crackers.
                                Dumplings are one of the dim sum types.</p>
                        </div>
                        <a href="#">
                            <img class="media-object rounded-circle  mr-3" src=" assets/img/avatar_3.jpeg" alt="..."
                                height="64" width="64">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- last carousel exmaple 2 -->
    </div>

    <div class="row">
        <!-- media Objects example 3 -->
        <div class="col-md">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Nested Media</h6>
                <div class="media mt-3">
                    <img src="assets/img/avatar.jpeg" height="64" width="64" class="ml-3" alt=" ... ">
                    <div class=" media-body ">
                        <h5 class="mt-0 ml-3 mr-3">Media heading</h5>
                        <p class="ml-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                            scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                            congue felis in faucibus.</p>

                        <div class="media mt-4">
                            <a class="mr-4" href="#">
                                <img src="assets/img/avatar_3.jpeg" height="64" width="64" class="mr- " alt="...">
                            </a>
                            <div class="media-body">
                                <h5 class="mt-0 ">Media heading</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                    Donec lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 3  -->
    </div>

    <div class="row">
        <!-- media Objects example 4 -->
        <div class="col-md">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Media List</h6>
                <p class="ml-3">Because the media object has so few structural requirements, you can also use
                    these classes on list HTML elements.</p>
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="assets/img/avatar.jpeg" height="64" width="64" class="ml-3" alt="...">
                        <div class="media-body ml-3">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in
                                faucibus.</p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img src="assets/img/avatar_2.jpeg" height="64" width="64" class="ml-3" alt="...">
                        <div class="media-body ml-3">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in
                                faucibus.</p>
                        </div>
                    </li>
                    <li class="media">
                        <img src="assets/img/avatar_3.jpeg" height="64" width="64" class="ml-3" alt="...">
                        <div class="media-body ml-3">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in
                                faucibus.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- last example 4 -->
    </div>

</div>
@endsection