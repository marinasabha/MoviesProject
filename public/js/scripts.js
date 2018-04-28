 function activateLogin() {
                $('.modal-auth').addClass('modal-active active');
                $('.modal-login-content').addClass('active');
                $('.modal-register-content').removeClass('active');

                $('#modal-login').css({
                    'font-weight': 'bolder',
                    'color': '#6AC045',
                    'background': '#fff'
                });
                $('#modal-register').css({
                    'font-weight': 'normal',
                    'color': '#999',
                    'background': '#eaeaea'
                });
            }

            function activateRegister() {
                $('.modal-auth').addClass('modal-active active');
                $('.modal-register-content').addClass('active');
                $('.modal-login-content').removeClass('active');
                $('#modal-login').css({
                    'font-weight': 'normal',
                    'color': '#999',
                    'background': '#eaeaea'
                });
                $('#modal-register').css({
                    'font-weight': 'bolder',
                    'color': '#6AC045',
                    'background': '#fff'
                });
            }

            $('#modal-background').on('click', function() {
                $('.modal-auth').removeClass('modal-active');
                $('.modal-auth').removeClass('active');
            });

            $('#login-btn, #modal-login').on('click', function() {
                activateLogin();
            });

            $('#register-btn, #modal-register').on('click', function() {
                activateRegister();
            });