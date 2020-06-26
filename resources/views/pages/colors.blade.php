@extends('layouts.master')

@section('title', 'Colors')

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Colors</div>
</div>
<div class="pd-20 pt-0">

    <div class="card">
        <div class="card-body">
            <h6 class="card-title mb-4" >Text Colors</h6>

            <div class="mt-3">
                <p>We have a series of text colors that are used by default:</p>

                <p>If you want to use text colors, just add class to your html element:</p>

                <ul class="fs-reg">
                    <li class="text-main">text-main</li>
                    <li class="text-primary">text-primary</li>
                    <li class="text-secondary">text-secondary</li>
                    <li class="text-success">text-success</li>
                    <li class="text-warning">text-warning</li>
                    <li class="text-danger">text-danger</li>
                    <li class="text-info">text-info</li>
                    <li class="text-grey">text-grey</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4" >Flat Colors</h6>

            <div class="mt-3">
                <p>We have a series of background flat colors that are used by default.</p>
                <p>If you want to use background colors, just add class to your html element:</p>

                <div class="mt-3 d-flex flex-wrap">
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-main d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-main
                            </div>
                        </div>
                        <div class="text-center">#FF6C4C</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-primary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-primary
                            </div>
                        </div>
                        <div class="text-center">#3E64FF</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-secondary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-secondary
                            </div>
                        </div>
                        <div class="text-center">#04B2A2</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-success d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-success
                            </div>
                        </div>
                        <div class="text-center">#30D271</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-warning d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-warning
                            </div>
                        </div>
                        <div class="text-center">#FFA133</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-danger d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-danger
                            </div>
                        </div>
                        <div class="text-center">#EE3E3E</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-info d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-info
                            </div>
                        </div>
                        <div class="text-center">#4567E2</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-light d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-light
                            </div>
                        </div>
                        <div class="text-center">#F7F7F7</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-dark d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-dark
                            </div>
                        </div>
                        <div class="text-center">#1B1D4E</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-dark-light d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-dark-light
                            </div>
                        </div>
                        <div class="text-center">#32345D</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4" >Flat Clean Colors</h6>

            <div class="mt-3">
                <p>We have a series of background flat clean colors (RGB with opacity 0.2) that are used by default.</p>
                <p>If you want to use background colors, just add class to your html element:</p>

                <div class="mt-3 d-flex flex-wrap">
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-main d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-main
                            </div>
                        </div>
                        <div class="text-center">#FF6C4C</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-primary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-primary
                            </div>
                        </div>
                        <div class="text-center">#3E64FF</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-secondary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-secondary
                            </div>
                        </div>
                        <div class="text-center">#04B2A2</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-success d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-success
                            </div>
                        </div>
                        <div class="text-center">#30D271</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-warning d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-warning
                            </div>
                        </div>
                        <div class="text-center">#FFA133</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-danger d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-danger
                            </div>
                        </div>
                        <div class="text-center">#EE3E3E</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-info d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-info
                            </div>
                        </div>
                        <div class="text-center">#4567E2</div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-clean-dark d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-clean-dark
                            </div>
                        </div>
                        <div class="text-center">#1B1D4E</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4" >Gradient Colors</h6>

            <div class="mt-3">
                <p>We have created background gradient (315 deg) colors based on our default colors.</p>
                <p>If you want to use gradient background colors, just add class to your html element:</p>

                <div class="mt-4 d-flex flex-wrap">
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-main d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-main
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#FFA869</div>
                            <div>#FF6C4C</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-primary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-primary
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#3E64FF</div>
                            <div>#836AF4</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-secondary d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-secondary
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#04B2A2</div>
                            <div>#45F6E6</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-success d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-success
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#BEE24E</div>
                            <div>#30D271</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-warning d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-warning
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#FFC944</div>
                            <div>#FFA133</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-danger d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-danger
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#A82B70</div>
                            <div>#EE3E3E</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-info d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-info
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#BD80FF</div>
                            <div>#4567E2</div>
                        </div>
                    </div>
                    <div class="mr-4 mb-3">
                        <div class="box-rounded-7r pd-10 box-shadow mt-1 mb-1 bg-gradient-dark d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                bg-gradient-dark
                            </div>
                        </div>
                        <div class="text-center">
                            <div>#32345d</div>
                            <div>#1b1d4e</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection