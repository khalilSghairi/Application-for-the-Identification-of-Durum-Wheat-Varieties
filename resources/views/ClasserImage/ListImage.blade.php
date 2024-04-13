@extends('layouts.master')
@section('css')
    <!-- Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <!-- Slect2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!--Page header-->

    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <br>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Liste Image</div>
                    <div class="card-options">

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" style="text-align:center">#</th>
                                    <th class="wd-15p border-bottom-0" style="text-align:center"> Image</th>


                                    <th class="wd-15p border-bottom-0" style="text-align:center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Images as $image)
                                    <tr>

                                        <td style="text-align:center">{{ $image->id }}</td>

                                        <td style="text-align:center">

                                            <img src="/assets/image/{{ $image->image }}" 
                                                style="max-height:400px; max-width:400px;" alt="" srcset="">
                                        </td>


                                        <td style="text-align:center">

                                            <a class="image_item" href="{{ route('classify', $image->id) }}" data-id="{{ $image->id }}"> <span
                                                    class="badge badge-primary badge-pill">Classer</span></a>


                                        </td>



                                    </tr>

                                    </tr>
                                @endforeach
                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>


    <div class="modal" id="image_modal" role="dialog" aria-labelledby="label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4  class="modal-title" id="image_modal" style="width: 100%; text-align: center;"> Classe </h4>

                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" style="width: 100%; text-align: center;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/datatables.js') }}"></script>
    <!-- Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@endsection
