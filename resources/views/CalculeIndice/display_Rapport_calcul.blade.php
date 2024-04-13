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
                    <div class="card-title">Liste Rapport</div>
                    <div class="card-options">

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" style="text-align:center">#</th>
                                    <th class="wd-15p border-bottom-0" style="text-align:center"> Date Tour</th>
                                    <th class="wd-15p border-bottom-0" style="text-align:center"> coll_ORG</th>
                                    <th class="wd-15p border-bottom-0" style="text-align:center"> Nom Collectors</th>

                                    <th class="wd-15p border-bottom-0" style="text-align:center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rapports as $rapport)
                                    <tr>

                                        <td style="text-align:center">{{ $rapport->id }}</td>
                                        <td style="text-align:center">{{ $rapport->date_tour }}</td>
                                        <td style="text-align:center">{{ $rapport->coll_ORG }}</td>
                                        <td style="text-align:center">{{ $rapport->collectors }}</td>

                                        <td style="text-align:center">
                                            <a class="rapport_item" data-id="{{ $rapport->id }}"
                                                href="{{ route('calc.rapport', $rapport->id) }}"> <span
                                                    class="badge badge-primary badge-pill">Calcule</span></a>
                                        </td>
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
    <div class="modal" id="raport_modal" role="dialog" aria-labelledby="label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="raport_label"> l'indice de diversité H' (Shannon-Weaver)</h4>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div id="chart-raport" class="chartsh "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Data tables -->

    <script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{URL::asset('assets/js/apexchart-custom-dark.js')}}"></script>
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
    <script src="{{ URL::asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>
    <!-- Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@endsection
