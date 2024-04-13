@extends('layouts.master')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Modifier Utilisateur </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('UpdateUser/' . $users->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="id" value="{{ $users->id }}">

                        <div class="row">

                            <div class="col-sm-6 col-md-6">

                                <div class="form-group">
                                    <label class="form-label">Nom <span class="text-red">*</span></label>
                                    <div>
                                        @if ($errors->has('firstname'))
                                            <strong style="color: red;">{{ $errors->first('firstname') }}</strong>
                                        @endif
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control" placeholder="Nom"
                                        name="firstname" value="{{ $users->firstname }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Prenom <span class="text-red">*</span></label>
                                    <div>
                                        @if ($errors->has('lastname'))
                                            <strong style="color: red;">{{ $errors->first('lastname') }}</strong>
                                        @endif
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control" placeholder="Prenom"
                                        name="lastname" value="{{ $users->lastname }}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Email adresse <span class="text-red">*</span></label>
                                    <div>
                                        @if ($errors->has('email'))
                                            <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                        @endif
                                    </div>
                                    <input autocomplete="off" type="email" class="form-control" placeholder="Email"
                                        name="email" value="{{ $users->email }}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Mot de passe <span class="text-red">*</span></label>
                                    <div>
                                        @if ($errors->has('password'))
                                            <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                        @endif
                                    </div>
                                    <input autocomplete="off" type="password" class="form-control"
                                        placeholder="Mot de passe" name="password" value="{{ $users->password }}" required>
                                </div>
                            </div>
                            <?php
                            $x = App\Models\Role::all();
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <label class="form-label">Role : <span class="text-red">*</span></label>
                                    <div>
                                        @if ($errors->has('role'))
                                            <strong style="color: red;">{{ $errors->first('role') }}</strong>
                                        @endif
                                    </div>

                                    <select class="form-control" name="role">
                                        @foreach ($x as $role)
                                            <option value="{{ $role->role_user }}"
                                                @if ($role->role_user == $users->role) selected @endif>{{ $role->role_user }}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>




                            <div class="col-sm-12 col-md-12">

                                <button type="submit" class="btn btn-warning pull-right">Update_user</button>

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
