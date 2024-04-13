@extends('layouts.master')

@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nouvelle Tour</h3>
            </div>
            <div class="card-body">
                <form action="{{route('AddTour')}}" method="post" >
                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                <div class="row">

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Utilisateur <span class="text-red">*</span></label>

                                <select  class="form-control" name="user">
                                    <option value="">___ Selectionner__Utilisateur ___</option>
                                      @foreach($users as $user)
                                      <option value="{{$user->id}}" >{{$user->email}} </option>
                                      @endforeach
                                    </select>
                                    <div>@if ($errors->has('user'))
                                        <strong style="color: red;">{{ $errors->first('user') }}</strong>
                                        @endif
                                      </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Date Tour <span class="text-red">*</span></label>
                            <div>@if ($errors->has('date_tour'))
                                <strong style="color: red;">{{ $errors->first('date_tour') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="date" class="form-control"  name="date_tour" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Lobo<span class="text-red">*</span></label>
                            <div>@if ($errors->has('labo'))
                                <strong style="color: red;">{{ $errors->first('labo') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="text" class="form-control" placeholder="Labo"  name="labo" required>
                        </div>
                    </div>

                   







                    <div class="col-sm-12 col-md-12">

                            <button type="submit" class="btn btn-success pull-right">Ajouter Tour</button>
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
