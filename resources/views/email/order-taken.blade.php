<?php
$status = [
    0 => "Ждёт выполнения",
    1 => "В процессе",
    2 => "Выполнен",
    3 => "Просрочен"
];
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style>
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }
    </style>
</head>
<body
    style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
<span class="preheader"
      style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"
       style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;"
       width="100%" bgcolor="#f6f6f6">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container"
            style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;"
            width="580" valign="top">
            <div class="content"
                 style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main"
                       style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;"
                       width="100%">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper"
                            style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"
                            valign="top">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                   style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                   width="100%">
                                <tr>
                                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"
                                        valign="top">
                                        <p style="font-family: sans-serif; font-size: 18px; font-weight: bold; margin: 0; margin-bottom: 15px;">
                                            ORDER/SATISFY</p>
                                        <p style="font-family: sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 15px;">
                                            Вам пришла повестка</p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
                                          {{$user->name}}, вам повестка)</p>
                                    </td>
                                    <img width="100" height="100" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fnovayagazeta.ru%2Fnews%2F2019%2F08%2F09%2F154125-zaderzhannaya-na-mitinge-zhurnalistka-reuters-poluchila-povestku-v-voenkomat&psig=AOvVaw0EhvkGKUJBAPyaDcjci-Jk&ust=1653944507469000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCJCauMnNhfgCFQAAAAAdAAAAABAp" alt="">
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                           style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                           width="100%">
                        <tr>
                            <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;"
                                valign="top" align="center">
                                <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">© Copyright Order/Satisfy. Все права защищены.</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
    </tr>
</table>
</body>
</html>
