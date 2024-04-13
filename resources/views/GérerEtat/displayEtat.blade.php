@extends('layouts.master')
@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<!-- Slect2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
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
										<div class="card-title">Liste Etat</div>
                                        <div class="card-options">
											<div class="btn-group ml-5 mb-0">
												<a href="{{route('addEtat')}}"><i class="fe fe-plus"></i> nouvel  Etat </a>

											</div>
										</div>
									</div>

									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example1">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0" style="text-align:center">#</th>
                                                        <th class="wd-15p border-bottom-0" style="text-align:center">Nom Caractere</th>
                                                        <th class="wd-15p border-bottom-0" style="text-align:center">Nom Etat</th>
                                                        <th class="wd-15p border-bottom-0" style="text-align:center">Codes</th>
                                                        <th class="wd-15p border-bottom-0" style="text-align:center">Action</th>

													</tr>
												</thead>
                                                <tbody>
                                                    @foreach ($etats as $Etat)
                                                    <tr>

                                                        <td style="text-align:center">{{$Etat->id}}</td>
                                                        <td style="text-align:center"> <span>{{($Etat->caractere) ? $Etat->caractere->name : ''}}</span> </td>
                                                        <td style="text-align:center">{{$Etat->name}}</td>
                                                        <td style="text-align:center">{{$Etat->value}}</td>

                                                        <td style="text-align:center">

                                                           <a href="{{route('getUpdateEtat',['id'=>$Etat->id])}}"> <span class="badge badge-warning badge-pill">modifier</span></a>
                                                           <a href="{{url('DeleteEtat',$Etat->id)}}" onclick="return confirm('Êtes-vous sûr ?');"> <span class="badge badge-danger badge-pill">supprimer</span></a>


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
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/js/datatables.js')}}"></script>
<!-- Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection
