<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type="text/css" id="mce-u0" href="https://webmail.$url/cpsess8311943719/3rdparty/roundcube/program/js/tinymce/skins/ui/oxide/content.min.css?s=5080200">
  <link rel="stylesheet" type="text/css" id="mce-u1" href="https://webmail.$url/cpsess8311943719/3rdparty/roundcube/skins/elastic/styles/embed.min.css?s=5080200"> -->
    <style type="text/css">
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 10pt;
        }
    </style>
</head>

<body>
    <div id="v1wrapper" dir="ltr"
        style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none">
        <!-- t -->
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td align="center" valign="top">
                        <div id="v1template_header_image">
                            <!-- <img src="https://mailer.xtbtradingonline.space/email-logo.jpg" alt=""> -->
                        </div>
                        <table id="v1template_container"
                            style="background-color: #fff; border: 1px solid #dedede; box-shadow: 0 1px 4px rgba(0,0,0,.1); border-radius: 3px"
                            border="0" width="600" cellspacing="0" cellpadding="0" bgcolor="#fff">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top">
                                        <table id="v1template_header"
                                            style="background-color: #7f54b3; color: #fff; border-bottom: 0; font-weight: bold; line-height: 100%; vertical-align: middle; font-family: 'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif; border-radius: 3px 3px 0 0"
                                            border="0" width="100%" cellspacing="0" cellpadding="0"
                                            bgcolor="#FEC201">
                                            <tbody>
                                                <tr>
                                                    <td id="v1header_wrapper"
                                                        style="padding: 36px 48px; display: block">
                                                        <h1
                                                            style="font-family: 'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif; font-size: 21px; font-weight: 600; line-height: 150%; margin: 0; text-align: left; text-shadow: 0 1px 0 #9976c2; color: #000000; background-color: inherit">
                                                            @yield('title')</h1>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <table id="v1template_body" border="0" width="600" cellspacing="0"
                                            cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td id="v1body_content" style="background-color: #fff"
                                                        valign="top" bgcolor="#fff">
                                                        <table border="0" width="100%" cellspacing="0"
                                                            cellpadding="20">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="padding: 48px 48px 32px" valign="top">
                                                                        <div id="v1body_content_inner"
                                                                            style="color: #636363; font-family: 'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif; font-size: 14px; line-height: 150%; text-align: left"
                                                                            align="left">

                                                                            @yield('slot')
                                                                            <hr>
                                                                            {{-- <p style="margin: 0 0 16px"></p> --}}

                                                                            <h2
                                                                                style="color: #7f54b3; display: block; font-family: 'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif; font-size: 16px; font-weight: bold; line-height: 130%; margin: 0 0 18px; text-align: left">
                                                                                Our Company</h2>
                                                                            <p
                                                                                style="margin: 0 0 16px; font-size: 14px; color: #636363;">
                                                                                Arrive Logistics is a leading global
                                                                                logistics company dedicated to
                                                                                delivering unparalleled transportation
                                                                                solutions worldwide. With a robust
                                                                                presence in over 15 countries, our
                                                                                extensive network of offices
                                                                                strategically positioned across the
                                                                                globe allows us to provide seamless and
                                                                                efficient logistics services on a global
                                                                                scale.<br><br>At Arrive Logistics, we
                                                                                take pride in our international reach,
                                                                                connecting businesses and facilitating
                                                                                the movement of goods with precision and
                                                                                reliability. Our commitment to
                                                                                excellence is reflected in our strong
                                                                                network of partners and agents, ensuring
                                                                                that we have a local presence in key
                                                                                regions to meet the unique needs of our
                                                                                diverse clientele. <br><br>Visit <a
                                                                                    class="v1link"
                                                                                    style="font-weight: normal; text-decoration: underline; color: #7f54b3"
                                                                                    href="{{ env('APP_URL') }}"
                                                                                    target="_blank" rel="noreferrer">our
                                                                                    Website</a> to
                                                                                get started.</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <table id="v1template_footer" border="0" width="600" cellspacing="0" cellpadding="10">
                            <tbody>
                                <tr>
                                    <td style="padding: 0; border-radius: 6px" valign="top">
                                        <table border="0" width="100%" cellspacing="0" cellpadding="10">
                                            <tbody>
                                                <tr>
                                                    <td id="v1credit"
                                                        style="border-radius: 6px; border: 0; color: #8a8a8a; font-family: 'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif; font-size: 12px; line-height: 150%; text-align: center; padding: 24px 0"
                                                        colspan="2" align="center" valign="middle">
                                                        <p style="margin: 0 0 16px">Copyright © {{ date('Y') }} <a
                                                                style="color: #7f54b3; font-weight: normal; text-decoration: underline"
                                                                href="{{ env('APP_URL') }}" target="_blank"
                                                                rel="noreferrer">{{ env('APP_NAME') }}</a> All Rights
                                                            Reserved.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>


</html>
