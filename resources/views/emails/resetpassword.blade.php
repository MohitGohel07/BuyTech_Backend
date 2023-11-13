<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-weight: 500;
            font-family: Arial, sans-serif;
        }
        .btn {margin: 10px 0px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff !important;
            height: 46px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            background: #000;
            /* background-image: linear-gradient(to right top, #000, #000, #000, #09369d, #093fb0) !important; */
        }
        .btn:hover {
            text-decoration: none;
            opacity: .5;
        }
    
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:600px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr style="border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;">
                        <td class="logo" align="center" style="background:#fff; ">
                             <img src="https://tcsgrading.com/public/images/logo_white_background.jpg" alt="" width="150px">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 0px 0;color:#153643;">
                                        <p style="font-weight:bold;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Hello {{ $mailData ? $mailData['name'] : '' }},</h1>
                                        <p
                                            style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            We've received a request to reset the password.
                                            </p>
                                        <p
                                            style="margin:10px 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            You can reset your password by clicking the button below:
                                        </p>

                                        <p style="text-align: center; margin:40px 0 ;">
                                            <a href="{{URL::to('login/set/'.$mailData['id'])}}" class="btn">Reset your password</a>
                                        </p>


                                        <p style="font-size:14px;font-family:Arial,sans-serif; ">
                                            Thanks & Regards, </p>
                                        <p style="margin:0 0 5px 0;font-size:14px;font-family:Arial,sans-serif; ">
                                            buytech </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>