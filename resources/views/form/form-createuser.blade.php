@include('flash::message')
<form method="post" action="{{ url('home/create') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        person
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control center" id="name" name="name" placeholder="First name" required="" type="text"/>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control center" id="lastname" name="lastname" placeholder="Last name" required="" type="text"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        email
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <input class="form-control center" id="email" name="email" placeholder="example@correo.com" required="" type="email"/>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        vpn_key
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <input class="form-control center" id="password" name="password" placeholder="*************" required="" type="password"/>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        phone
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <input class="form-control center" id="phone" name="phone" placeholder="Numbre phone" required="" type="text"/>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        calendar_today
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <input class="form-control center" id="birthdate" name="birthdate" required="" type="date"/>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-sm-1" id="icon-form-loguin">
                <span class="input-group-addon">
                    <i class="material-icons">
                        wc
                    </i>
                </span>
            </div>
            <div class="col-sm-11">
                <span class="form-control">
                    <div align="center" class="row">
                        <div class="col-sm-6">
                            <input id="man" name="gender" type="radio" value="M"/>
                            <span>
                                Masculino
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <input id="woman" name="gender" type="radio" value="F"/>
                            <span>
                                Femenino
                            </span>
                        </div>
                    </div>
                </span>
            </div>
        </div>
        <div align="right" class="col-sm-12">
            <hr>
                <button class="btn btn-success">
                    Crear Cuenta
                </button>
            </hr>
        </div>
    </div>
</form>