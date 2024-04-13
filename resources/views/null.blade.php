@extends('layouts.master2')
@section('css')
@endsection
@section('content')
		<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<img src="{{URL::asset('assets/images/svgs/notfund.svg')}}" alt="img" class="w-90">
						</div>
						<div class="col-md-7 mt-6">
							<div class="display-2 text-primary  mb-2 font-weight-bold"> 404</div>
							<h1 class="h3  mb-3 font-weight-bold">Sorry</h1>
							<p class="h5 font-weight-normal mb-7 leading-normal">You do not have the right to access this space.</p>


                            <a href="{{ route('logout') }}"   class="btn btn-primary"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Back to Login</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
@endsection
