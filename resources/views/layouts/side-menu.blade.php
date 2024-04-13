<!--aside open-->
				<div class="app-sidebar app-sidebar2">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Covido logo">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Covido logo">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img mobile-logo" alt="Covido logo">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img darkmobile-logo" alt="Covido logo">
						</a>
					</div>
				</div>
				<aside class="app-sidebar app-sidebar3">

					<ul class="side-menu">
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;" >
							<a href="{{ route('ListUser') }}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
							<span class="side-menu__label">Gérer Utilisateur</span></i></a>

						</li>
                        <br>
                        <br>


                        <li class="slide" style="margin-left:10%;">
							<a  href="{{ route('ListCarctere') }}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
							<span class="side-menu__label">Gérer Caractére</span></i></a>

						</li>
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;">
							<a  href="{{ route('ListEtat') }}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
							<span class="side-menu__label">Gérer Etat</span></i></a>

						</li>
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;">
						    <a  href="{{ route('ListTour') }}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
							<span class="side-menu__label">Affecter Tour</span></i></a>

						</li>
                        <br>
                        <br>
                        <li class="slide " style="margin-left:10%;">
							<a  href="{{ route('ListClasse') }}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
							<span class="side-menu__label">Gérer Matrice</span></a>

						</li>
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;">
							<a  href="{{ route('ListRapport') }}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
							<span class="side-menu__label">Recevoir rapport</span></i></a>

						</li>
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;">
							<a  href="{{ route('ListRapportIndice') }}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
							<span class="side-menu__label">Calculer l'indice</span></i></a>

						</li>
                        <br>
                        <br>

                        <li class="slide" style="margin-left:10%;">
							<a  href="{{ route('ListRapportClasser') }}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
							<span class="side-menu__label">Classer blé</span></i></a>

						</li>
                        <br>
					</ul>

				</aside>
<!--aside closed-->
