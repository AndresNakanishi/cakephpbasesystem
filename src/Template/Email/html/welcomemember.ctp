<div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
    Bienvenido al Sistema
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
                            <?= utf8_encode('Bienvenido '.$user->name.'!!') ?>
                        </h1>
                        <p style="margin: 0 0 10px;">Usuario: <strong><?= $user->username; ?></strong></p>
                        <p style="margin: 0 0 20px;">Email asociado: <strong><?php echo $user->email; ?></strong></p>
                        <p style="margin: 0 0 20px;">Password generado: <strong><?php echo $password; ?></strong></p>
                        <p style="margin: 0 0 10px;">Atentamente</p>
                        <p style="margin: 0 0 10px;">La Gerencia</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>