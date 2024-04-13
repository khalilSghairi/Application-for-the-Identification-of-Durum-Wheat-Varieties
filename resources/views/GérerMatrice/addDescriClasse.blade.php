@extends('layouts.master')

@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">New Etat</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('AddDerscri')}}" method="post" >
                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                <div class="row">

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Nom Classe  <span class="text-red">*</span></label>

                                <select  class="form-control" name="classe_id">
                                    <option value="">___ Selectionner__Classe ___</option>
                                      @foreach($classes as $classe)
                                      <option value="{{$classe->id}}" >{{$classe->name}} </option>
                                      @endforeach
                                    </select>
                                    <div>@if ($errors->has('classe'))
                                        <strong style="color: red;">{{ $errors->first('classe') }}</strong>
                                        @endif
                                      </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Nom Caractere <span class="text-red">*</span></label>

                                <select  class="form-control" name="caractere_name">
                                    <option value="">___ Selectionner__Caractere ___</option>
                                      @foreach($caracteres as $caracteres)
                                      <option value="{{$caracteres->name}}" >{{$caracteres->name}} </option>
                                      @endforeach
                                    </select>
                                    <div>@if ($errors->has('caracteres'))
                                        <strong style="color: red;">{{ $errors->first('caracteres') }}</strong>
                                        @endif
                                      </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Nom Etat <span class="text-red">*</span></label>

                                <select  class="form-control" name="etat_name">
                                    <option value="">___ Selectionner__Etat ___</option>
                                      @foreach($etats as $etats)
                                      <option value="{{$etats->name}}" >{{$etats->name}} </option>
                                      @endforeach
                                    </select>
                                    <div>@if ($errors->has('etats'))
                                        <strong style="color: red;">{{ $errors->first('etats') }}</strong>
                                        @endif
                                      </div>

                        </div>
                    </div>











                    <div class="col-sm-12 col-md-12">

                            <button type="submit" class="btn btn-success pull-right">Ajouter_Descri</button>
                    </div>



                </div>
                </form>
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
    <script>
        let datatabletest = $('datatable-test').DataTable()
    </script>
@endsection
