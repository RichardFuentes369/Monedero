<form method="post" action="{{ url('home/Login') }}">
    {{ csrf_field() }}
    <table align="right">
        <tr>
            <td>
                <input class="form-control" name="email" placeholder="example@correo.com" type="text"/>
            </td>
            <td>
                <input class="form-control" name="password" placeholder="*********" type="password"/>
            </td>
            <td>
                <button class="btn btn-primary">
                    Ingresar
                </button>
            </td>
        </tr>
    </table>
</form>