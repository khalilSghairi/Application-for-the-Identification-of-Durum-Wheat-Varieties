@extends('layouts.master')

@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nouvelle Utilisateur</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('adduser') }}" method="post" >
                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                <div class="row">

                    <div class="col-sm-6 col-md-6">

                        <div class="form-group">
                            <label class="form-label">Nom <span class="text-red">*</span></label>
                            <div>@if ($errors->has('firstname'))
                                <strong style="color: red;">{{ $errors->first('firstname') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="text" class="form-control" placeholder="Nom" name="firstname" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Prénom <span class="text-red">*</span></label>
                            <div>@if ($errors->has('lastname'))
                                <strong style="color: red;">{{ $errors->first('lastname') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="text" class="form-control" placeholder="Prenom" name="lastname" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Email adresse <span class="text-red">*</span></label>
                            <div>@if ($errors->has('email'))
                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="email" class="form-control" placeholder="Email"  name="email" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Mot de passe <span class="text-red">*</span></label>
                            <div>@if ($errors->has('password'))
                                <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                @endif</div>
                            <input autocomplete="off" type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Role : <span class="text-red">*</span></label>
                            <div>@if ($errors->has('role'))
                                <strong style="color: red;">{{ $errors->first('role') }}</strong>
                                @endif</div>
                            <select class="form-control custom-select select2" name="role" required>
                                <option >--Sélectionner--</option>
                                <option value="admin">Admin</option>
                                <option value="ingenieur">Ingenieur</option>

                            </select>
                        </div>
                    </div>




                    <div class="col-sm-12 col-md-12">

                            <button type="submit" class="btn btn-success pull-right">Ajouter Utilisateur</button>
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
