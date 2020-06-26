@extends('layouts.master')

@section('title','Select')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script src="/assets/js/select2.min.js"></script>
<script src="/assets/js/form-select2.min.js"></script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Select</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Bootstrap Select</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Basic Select</h6>
                            <p>Add atributte <code>.form-control</code> class for basic select control.</p>
                            <fieldset class="form-group">
                                <select class="form-control" id="basicSelect">
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <h6>Custom Select</h6>
                            <p>Add atributte <code>.custom-select</code> class for Custom Select control.</p>
                            <fieldset class="form-group">
                                <select class="custom-select" id="customSelect">
                                    <option selected="">Open this menu</option>
                                    <option value="IT">IT</option>
                                    <option value="Blade Runner">Blade Runner</option>
                                    <option value="Thor Ragnarok">Thor Ragnarok</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <h6>Multiple Select</h6>
                            <p>Add atributte <code>multiple</code> attribute for Multiple select control.</p>
                            <fieldset class="form-group">
                                <select class="form-control" id="countrySelect" multiple="multiple">
                                    <option selected="selected">Square</option>
                                    <option>Rectangle</option>
                                    <option selected="selected">Rombo</option>
                                    <option>Romboid</option>
                                    <option>Trapeze</option>
                                    <option>Triangle</option>
                                    <option selected="selected">Polygon</option>
                                    <option>Regular polygon</option>
                                    <option>Circumference</option>
                                    <option>Circle</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <h6>Disabled Select</h6>
                            <p>Add atributte <code>disabled</code> attribute for disabled select control.</p>
                            <fieldset class="form-group">
                                <select class="form-control" disabled="disabled" id="disabledSelect">
                                    <option>Green</option>
                                    <option>Red</option>
                                    <option>Blue</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    {{-- example 2 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Input Group Select</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Basic Select with Input Group</h6>
                            <fieldset class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    </div>
                                    <select class="form-control" id="inputGroupSelect01">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <h6>Custom Select with Input group</h6>
                            <fieldset class="form-group">
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 2 --}}

    {{-- example 3 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h6 class="card-title mb-4">Select2</h6>
                            <a href="https://select2.org/getting-started/installation" target="_blank">For more
                                information </a>
                        </div>
                        <div class="col-md-6">
                            <h6>Basic Select2</h6>
                            <p>Use <code>.select2</code> class for basic select2 control.</p>
                            <div class="form-group">
                                <select class="select2 form-control select2-hidden-accessible" data-select2-id="1"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="square" data-select2-id="3">Square</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="rombo">Rombo</option>
                                    <option value="romboid">Romboid</option>
                                    <option value="trapeze">Trapeze</option>
                                    <option value="traible">Triangle</option>
                                    <option value="polygon">Polygon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Single Select with Label</h6>
                            <p>Use <code>optgroup</code> attribute for basic select2 with Label control.</p>
                            <div class="form-group">
                                <select class="select2 form-control select2-hidden-accessible" data-select2-id="4"
                                    tabindex="-1" aria-hidden="true">
                                    <optgroup label="Figures">
                                        <option value="romboid" data-select2-id="6">Romboid</option>
                                        <option value="trapeze">Trapeze</option>
                                        <option value="triangle">Triangle</option>
                                        <option value="polygon">Polygon</option>
                                    </optgroup>
                                    <optgroup label="Colors">
                                        <option value="red">Red</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Select With Icon</h6>
                            <p>Use data attribute <code>data-icon</code> to add icon name for each options. And use
                                class
                                <code>.select2-icons</code> to set icon with option.</p>
                            <div class="form-group">
                                <select data-placeholder="Select a state..."
                                    class="select2-icons form-control select2-hidden-accessible" id="select2-icons"
                                    data-select2-id="select2-icons" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Services">
                                        <option value="wordpress2" data-icon="bx bxl-wordpress" selected=""
                                            data-select2-id="33">
                                            WordPress</option>
                                        <option value="codepen" data-icon="bx bxl-codepen">Codepen</option>
                                        <option value="drupal" data-icon="bx bxl-drupal">Drupal</option>
                                        <option value="pinterest2" data-icon="bx bxl-css3">CSS3</option>
                                        <option value="html5" data-icon="bx bxl-html5">HTML5</option>
                                    </optgroup>
                                    <optgroup label="Browsers">
                                        <option value="chrome" data-icon="bx bxl-chrome">Chrome</option>
                                        <option value="firefox" data-icon="bx bxl-firefox">Firefox</option>
                                        <option value="opera" data-icon="bx bxl-opera">Opera</option>
                                        <option value="IE" data-icon="bx bxl-internet-explorer">IE</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Template support</h6>
                            <p>Select2 supports custom themes using the theme option so you can style Select2 to match
                                the rest of
                                your application. These are using the <code>classic</code> theme, which matches the old
                                look of
                                Select2.</p>
                            <div class="form-group">
                                <select class="select2-theme form-control select2-hidden-accessible" id="select2-theme"
                                    data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Figures">
                                        <option value="romboid" data-select2-id="103">Romboid</option>
                                        <option value="trapeze">Trapeze</option>
                                        <option value="triangle">Triangle</option>
                                        <option value="polygon">Polygon</option>
                                    </optgroup>
                                    <optgroup label="Colors">
                                        <option value="red">Red</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 3 --}}

    {{-- example 4 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Multiple Select2</h6>
                    <div class="row" data-select2-id="117">
                        <div class="col-md-6" data-select2-id="116">
                            <h6>Basic Multiple Select2</h6>
                            <p>Use <code>.select2</code> class for basic select2 control. Use
                                <code>multiple="multiple"</code>
                                attribute for multiple select box.</p>
                            <div class="form-group">
                                <select class="select2 form-control select2-hidden-accessible" multiple=""
                                    data-select2-id="7" tabindex="-1" aria-hidden="true">
                                    <option value="square" data-select2-id="122">Square</option>
                                    <option value="rectangle" selected="" data-select2-id="9">Rectangle</option>
                                    <option value="rombo" data-select2-id="123">Rombo</option>
                                    <option value="romboid" data-select2-id="124">Romboid</option>
                                    <option value="trapeze" data-select2-id="125">Trapeze</option>
                                    <option value="traible" selected="" data-select2-id="10">Triangle</option>
                                    <option value="polygon" data-select2-id="126">Polygon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" data-select2-id="255">
                            <h6>Multiple Select with Label</h6>
                            <p>Use <code>optgroup</code> attribute for multiple select box with Label control.</p>
                            <div class="form-group">
                                <select class="select2 form-control select2-hidden-accessible" multiple=""
                                    data-select2-id="13" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Figures" data-select2-id="256">
                                        <option value="romboid" data-select2-id="257">Romboid</option>
                                        <option value="trapeze" selected="" data-select2-id="15">Trapeze</option>
                                        <option value="triangle" data-select2-id="258">Triangle</option>
                                        <option value="polygon" data-select2-id="259">Polygon</option>
                                    </optgroup>
                                    <optgroup label="Colors" data-select2-id="260">
                                        <option value="red" data-select2-id="261">Red</option>
                                        <option value="green" data-select2-id="262">Green</option>
                                        <option value="blue" selected="" data-select2-id="16">Blue</option>
                                        <option value="purple" data-select2-id="263">Purple</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Maximum Select with Label</h6>
                            <p>Select2 multi-value select boxes can set restrictions regarding the maximum number of
                                options
                                selected. The select below is declared with the <code>multiple</code> attribute with
                                <code>maximumSelectionLength</code> in the select2 options.</p>
                            <div class="form-group">
                                <select class="max-length form-control select2-hidden-accessible" multiple=""
                                    id="max_length" data-select2-id="max_length" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Figures">
                                        <option value="romboid">Romboid</option>
                                        <option value="trapeze" selected="" data-select2-id="38">Trapeze</option>
                                        <option value="triangle">Triangle</option>
                                        <option value="polygon">Polygon</option>
                                    </optgroup>
                                    <optgroup label="Colors">
                                        <option value="red">Red</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 4 --}}

    {{-- example 5 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body" data-select2-id="196">
                    <h6 class="card-title mb-4">Advance Options</h6>
                    <div class="row">
                        <div class="col-md-6" data-select2-id="195">
                            <h6>Loading Array Data</h6>
                            <p>Select2 provides a way to load the data from a local array. You can provide initial
                                selections with
                                array data by providing the option tag for the selected values, similar to how it would
                                be done for a
                                standard select.</p>
                            <div class="form-group" data-select2-id="194">
                                <select class="select2-data-array form-control select2-hidden-accessible"
                                    id="select2-array" data-select2-id="select2-array" tabindex="-1" aria-hidden="true">
                                    <option value="0" data-select2-id="95">enhancement</option>
                                    <option value="1" data-select2-id="96">bug</option>
                                    <option value="2" data-select2-id="97">duplicate</option>
                                    <option value="3" data-select2-id="98">invalid</option>
                                    <option value="4" data-select2-id="99">wontfix</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" data-select2-id="364">
                            <h6>Loading Remote Data</h6>
                            <p>Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example,
                                we can search
                                for repositories using GitHub's API.</p>
                            <div class="form-group" data-select2-id="363">
                                <select class="select2-data-ajax form-control select2-hidden-accessible"
                                    id="select2-ajax" data-select2-id="select2-ajax" tabindex="-1"
                                    aria-hidden="true"></select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h6>Programmatic access</h6>
                            <p>Select2 supports methods that allow programmatic control of the component.</p>
                            <div class="form-group" data-select2-id="290">
                                <select class="select2 js-example-programmatic form-control select2-hidden-accessible"
                                    id="programmatic-single" data-select2-id="programmatic-single" tabindex="-1"
                                    aria-hidden="true">
                                    <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="40">
                                        <option value="AK" data-select2-id="26">Alaska</option>
                                        <option value="HI" data-select2-id="41">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone" data-select2-id="42">
                                        <option value="CA" data-select2-id="43">California</option>
                                        <option value="NV" data-select2-id="44">Nevada</option>
                                        <option value="OR" data-select2-id="45">Oregon</option>
                                        <option value="WA" data-select2-id="46">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone" data-select2-id="47">
                                        <option value="AZ" data-select2-id="48">Arizona</option>
                                        <option value="CO" data-select2-id="49">Colorado</option>
                                        <option value="ID" data-select2-id="50">Idaho</option>
                                        <option value="MT" data-select2-id="51">Montana</option>
                                        <option value="NE" data-select2-id="52">Nebraska</option>
                                        <option value="NM" data-select2-id="53">New Mexico</option>
                                        <option value="ND" data-select2-id="54">North Dakota</option>
                                        <option value="UT" data-select2-id="55">Utah</option>
                                        <option value="WY" data-select2-id="56">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone" data-select2-id="57">
                                        <option value="AL" data-select2-id="58">Alabama</option>
                                        <option value="AR" data-select2-id="59">Arkansas</option>
                                        <option value="IL" data-select2-id="60">Illinois</option>
                                        <option value="IA" data-select2-id="61">Iowa</option>
                                        <option value="KS" data-select2-id="62">Kansas</option>
                                        <option value="KY" data-select2-id="63">Kentucky</option>
                                        <option value="LA" data-select2-id="64">Louisiana</option>
                                        <option value="MN" data-select2-id="65">Minnesota</option>
                                        <option value="MS" data-select2-id="66">Mississippi</option>
                                        <option value="MO" data-select2-id="67">Missouri</option>
                                        <option value="OK" data-select2-id="68">Oklahoma</option>
                                        <option value="SD" data-select2-id="69">South Dakota</option>
                                        <option value="TX" data-select2-id="70">Texas</option>
                                        <option value="TN" data-select2-id="71">Tennessee</option>
                                        <option value="WI" data-select2-id="72">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone" data-select2-id="73">
                                        <option value="CT" data-select2-id="74">Connecticut</option>
                                        <option value="DE" data-select2-id="75">Delaware</option>
                                        <option value="FL" data-select2-id="76">Florida</option>
                                        <option value="GA" data-select2-id="77">Georgia</option>
                                        <option value="IN" data-select2-id="78">Indiana</option>
                                        <option value="ME" data-select2-id="79">Maine</option>
                                        <option value="MD" data-select2-id="80">Maryland</option>
                                        <option value="MA" data-select2-id="81">Massachusetts</option>
                                        <option value="MI" data-select2-id="82">Michigan</option>
                                        <option value="NH" data-select2-id="83">New Hampshire</option>
                                        <option value="NJ" data-select2-id="84">New Jersey</option>
                                        <option value="NY" data-select2-id="85">New York</option>
                                        <option value="NC" data-select2-id="86">North Carolina</option>
                                        <option value="OH" data-select2-id="87">Ohio</option>
                                        <option value="PA" data-select2-id="88">Pennsylvania</option>
                                        <option value="RI" data-select2-id="89">Rhode Island</option>
                                        <option value="SC" data-select2-id="90">South Carolina</option>
                                        <option value="VT" data-select2-id="91">Vermont</option>
                                        <option value="VA" data-select2-id="92">Virginia</option>
                                        <option value="WV" data-select2-id="93">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Programmatic control">
                                <div class="btn-group-sm" aria-label="Set Select2 option">
                                    <button class="js-programmatic-set-val btn btn-outline-primary mr-1 mb-1">
                                        Set "California"
                                    </button>
                                </div>
                                <div class="btn-group-sm" role="group" aria-label="Open and close">
                                    <button class="js-programmatic-open btn btn-outline-primary mr-1 mb-1">
                                        Open
                                    </button>
                                    <button class="js-programmatic-close btn btn-outline-primary mr-1 mb-1">
                                        Close
                                    </button>
                                </div>
                                <div class="btn-group-sm" role="group" aria-label="Initialize and destroy">
                                    <button class="js-programmatic-init btn btn-outline-primary mr-1 mb-1">
                                        Init
                                    </button>
                                    <button class="js-programmatic-destroy btn btn-outline-primary mr-1 mb-1">
                                        Destroy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 5 --}}


</div>
@endsection