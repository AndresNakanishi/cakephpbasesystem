<div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
    Recuperar Contraseña
</div>

<div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>
<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: 0 auto;" class="email-container">
    <tr>
        <td style="background-color: #ffffff;">
            <img src="https://via.placeholder.com/1200x600" width="600" height="" alt="alt_text" border="0" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto;" class="g-img">
        </td>
    </tr>

    <tr>
        <td style="background-color: #ffffff;">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                        <h1 style="margin: 0 0 10px; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">
							<?= utf8_encode('Estimado '.$name.', se realiz&oacute; el reseteo de su contrase&ntilde;a.') ?>
                        </h1>
                        <p style="margin: 0 0 10px;">Usuario: <strong><?= $username; ?></strong></p>
                        <p style="margin: 0 0 20px;">Su nueva contraseña es: <strong><?php echo $password; ?></strong>, cuando quiera la podrá cambiar desde su perfil.</p>
                        <p style="margin: 0 0 10px;">Atentamente</p>
                        <p style="margin: 0 0 10px;">La Gerencia</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px 20px;">
                        <!-- Button : BEGIN -->
                        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto;">
                            <tr>
                                <td class="button-td button-td-primary" style="border-radius: 4px; background: #222222;">
									<a class="button-a button-a-primary" href="https://google.com/" style="background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Botón Sorprendentemente Inútil</a>
								</td>
                            </tr>
                        </table>
                        <!-- Button : END -->
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>