import React from 'react';
// import 'resources/css'
import { Link, Head } from '@inertiajs/inertia-react';

export default function Login(props) {
    return (
        <>       
        <Head title='Login'></Head>
        <Link rel="stylesheet" href="/css/main.css"></Link>
        <div className="full-box login-container cover">
		<form action="{{ route('home') }}" method="POST" className="logInForm">
            @csrf
			<p className="text-center text-muted"><i className="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
			<p className="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
			<div className="form-group label-floating">
			  <label className="control-label">Usuario</label>
			  <input className="form-control" id="UserName" type="text" name="UserName"/>
			  <p className="help-block">Escribe tú nombre de usuario</p>
			</div>
			<div className="form-group label-floating">
			  <label className="control-label">Contraseña</label>
			  <input className="form-control" id="UserPass" type="text" name="UserPass"/>
			  <p className="help-block">Escribe tú contraseña</p>
			</div>
			<div className="form-group text-center">
				<input type="submit" value="Iniciar sesión" className="btn btn-info"/>
			</div>
		</form>
	</div>

	<script src="/js/jquery-3.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/material.min.js"></script>
	<script src="/js/ripples.min.js"></script>
	<script src="/js/sweetalert2.min.js"></script>
	<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/js/main.js"></script>
	<script>
		$.material.init();
	</script>
        </>
    );
}
