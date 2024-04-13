@extends('layouts.master')

@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nouvel Etat</h3>
            </div>
            <div class="card-body">
                <form action="{{route('AddEtat')}}" method="post" >
                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                <div class="row">

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Nom Caractere <span class="text-red">*</span></label>

                                <select  class="form-control" name="caractere">
                                    <option value="">___ Selectionner__Nom ___</option>
                                      @foreach($caracteres as $caractere)
                                      <option value="{{$caractere->id}}" >{{$caractere->name}} </option>
                                      @endforeach
                                    </select>
                                    <div>@if ($errors->has('caractere'))
                                        <strong style="color: red;">{{ $errors->first('caractere') }}</strong>
                                        @endif
                                      </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Valeur <span class="text-red">*</span></label>
                            <div>@if ($errors->has('value'))
                                <strong style="color: red;">{{ $errors->first('value') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="number" class="form-control" placeholder="Valeur Etat" name="value" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nom Etat<span class="text-red">*</span></label>
                            <div>@if ($errors->has('name'))
                                <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="text" class="form-control" placeholder="Nom etat"  name="name" required>
                        </div>
                    </div>







                    <div class="col-sm-12 col-md-12">

                            <button type="submit" class="btn btn-success pull-right">ajouter etat</button>
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
