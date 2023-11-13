@extends('admin.layouts.masterWithoutHeader')

@section('content')
    <div class="admin">
        <div class="container-fluid">
            <div class="row justify-content-center">                
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">  
                    <div class="mb-0">
                        <img src="{{ URL::to('public/images/logo_transparent_background.png') }} " alt=""
                            class="mx-auto d-block w-75">
                    </div>                  
                    <div class="edit-profile mt-2">                        
                        <div class="card border-0">                           
                            <div class="card-body">
                                <div class="edit-profile__body">
                                    <form action="{{URL::to('admin/admin_login')}}" method="POST">
                                        @csrf
                                        <div class="form-group mb-25">
                                            <label for="username">Username or Email Address</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="username"
                                               name="email" placeholder="name@example.com">
                                               @error('email')
                                               <div class="alert alert-danger mt-1 p-2">{{ $message }}</div>
                                              @enderror
           
                                           @if (session()->has('email'))
                                               <div class="alert alert-warning">
                                                   {{ session()->get('email') }}
                                               </div>
                                           @endif

                                           @if (session()->has('emailnotfound'))
                                            <div class="alert alert-warning">
                                                {{ session()->get('emailnotfound') }}
                                            </div>
                                        @endif
                                        </div>
                                        <div class="form-group mb-15">
                                            <label for="password-field">password</label>
                                            <div class="position-relative">
                                                <input id="password-field" type="password" class="form-control  @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Password">
                                                    
                                                <div
                                                    class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                </div>
                                            </div>
                                            @error('password')
                                            <div class="alert alert-danger mt-1 p-2">{{ $message }}</div>
                                        @enderror
                                        @if (session()->has('password'))
                                            <div class="alert alert-warning">
                                                {{ session()->get('password') }}
                                            </div>
                                        @endif
                                        </div>
                                        <div class="admin-condition">
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-1">
                                                <label for="check-1">
                                                    <span class="checkbox-text">Keep me logged in</span>
                                                </label>
                                            </div>
                                            <a href="forget-password.html">forget password?</a>
                                        </div>
                                        <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                            <button type="submit" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End: .card-body -->
                            <div class="px-20">
                                <p class="social-connector social-connector__admin text-center">
                                    <span>Or</span>
                                </p>
                                <div class="button-group d-flex align-items-center justify-content-center">
                                    <ul class="admin-socialBtn">
                                        <li>
                                            <button class="btn text-dark google">
                                                <img class="svg"
                                                    src="{{ URL::to('public/backend/img/google-Icon.svg') }}"
                                                    alt="img" />
                                            </button>
                                        </li>
                                        <li>
                                            <button class=" radius-md wh-48 content-center facebook">
                                                <i class="uil uil-facebook-f"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="radius-md wh-48 content-center twitter">
                                                <i class="uil uil-twitter"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="radius-md wh-48 content-center github">
                                                <i class="uil uil-github"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-topbar">
                                {{-- <p class="mb-0">
                                    Don't have an account?
                                    <a href="sign-up.html" class="color-primary">
                                        Sign up
                                    </a>
                                </p> --}}
                            </div><!-- End: .admin-topbar  -->
                        </div><!-- End: .card -->
                    </div><!-- End: .edit-profile -->
                </div><!-- End: .col-xl-5 -->
            </div>
        </div>
    </div>

@stop
