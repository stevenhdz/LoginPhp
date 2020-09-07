$('#formlogin').submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password == "")
    {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y/o contraseña'
        });
        return false;
    } else
    {
        $.ajax({
            url: "bd/login.php",
            type: "POST",
            datatype: "json",
            data: {usuario: usuario, password: password},
            success: function (data) {
                if (data == "null")
                {
                    Swal.fire({
                        type: 'error',
                        title: 'usuario y/o password incorrectos'
                    });
                } else
                {
                    Swal.fire({
                        type: 'success',
                        title: 'Conexion exitosa',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "vistas/pag_inicio.php";
                        }
                    });
                }
            }
        });
    }
});
