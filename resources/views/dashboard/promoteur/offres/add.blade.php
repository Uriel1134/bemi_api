@extends('dashboard.promoteur.includes.model')

@section('title', "Dashboard - Offre : Ajout")


@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Offre &gt; Ajout</h3><a
            class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i
                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
    </div>
</div>
<div class="container">
    <form>
        <!-- Start: Registration Form -->
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="form-row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Ajout d'une offre</h4>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control"></textarea><input class="form-control" type="text">
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="First Name"
                                            name="first_name"></div>
                                    <div class="col-sm-6"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="Last Name"
                                            name="last_name"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="First Name"
                                            name="first_name"></div>
                                    <div class="col-sm-6"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="Last Name"
                                            name="last_name"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="First Name"
                                            name="first_name"></div>
                                    <div class="col-sm-6"><input
                                            class="form-control form-control-user" type="text"
                                            id="exampleFirstName" placeholder="Last Name"
                                            name="last_name"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user" type="password"
                                            id="examplePasswordInput" placeholder="Password"
                                            name="password"></div>
                                    <div class="col-sm-6"><input
                                            class="form-control form-control-user" type="password"
                                            id="exampleRepeatPasswordInput"
                                            placeholder="Repeat Password" name="password_repeat">
                                    </div>
                                </div><button class="btn btn-primary btn-block text-white btn-user"
                                    type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Registration Form -->
    </form>
</div>

@endsection
