@extends('layout.main')
@section('title', 'Member Plans')
@section('style')
<style>
    .loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        z-index: 9999;
        text-align: center;
        padding-top: 20%;
        font-size: 20px;
    }
</style>
@endsection

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="loader" id="loader">
    Processing... Please wait ⏳
</div>

<h2>Upload Excel / CSV</h2>

@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
<ul style="color: red;">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('excel.upload') }}" method="POST" enctype="multipart/form-data" onsubmit="showLoader()">
    @csrf

    <input type="file" name="file" required>
    <br><br>

    <button type="submit">Upload</button>
</form>

<!-- Extends main layout form layout folder -->

@extends('layout.main')

<!-- Addind Dynamic layout -->

@section('title', 'Member Plans')

@section('style')

<style>
    input[type=number]::-webkit-inner-spin-button,

    input[type=number]::-webkit-outer-spin-button {

        -webkit-appearance: none;

        -moz-appearance: none;

        appearance: none;

        margin: 0 !important;

    }
</style>

@endsection

<!-- Main Content -->

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="content-wrapper">

    <section class="content-header">

        @if (Session::has('success'))

        <div class="alert alert-success">

            {{ Session::get('success') }}

        </div>

        @endif

    </section>

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            Excel Upload

        </h1>

    </section>



    <section class="content">

        <div class="row">

            <div class="col-xs-12">

                <div class="box p-3">

                    <!-- /.box-header -->

                    <div class="box-body table-responsive no-padding">

                        <form action="{{ route('excel.upload') }}" method="POST" enctype="multipart/form-data" style="padding:10px" onsubmit="showLoader()">
                            @csrf

                            <input type="file" name="file" required>
                            <br><br>

                            <button type="submit">Upload</button>
                        </form>


                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>

        </div>

    </section>

</div>

@endsection



@endsection