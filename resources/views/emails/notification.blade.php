<?php
    $websiteURL = 'http://sgazrttk01v.southeastasia.cloudapp.azure.com/';
    $notificationsURL = $websiteURL . 'account';
?>

    <!doctype html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tech Talk</title>
        <style>
            /* -------------------------------------
    GLOBAL
------------------------------------- */

            * {
                font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                font-size: 100%;
                line-height: 1.6em;
                margin: 0;
                padding: 0;
            }

            img {
                max-width: 600px;
                width: auto;
            }

            body {
                -webkit-font-smoothing: antialiased;
                height: 100%;
                -webkit-text-size-adjust: none;
                width: 100% !important;
            }
            /* -------------------------------------
    ELEMENTS
------------------------------------- */

            a {
                color: #348eda;
            }

            .btn-primary {
                Margin-bottom: 10px;
                width: auto !important;
            }

            .btn-primary td {
                background-color: #00ade6;
                border-radius: 3px;
                font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
                font-size: 14px;
                text-align: center;
                vertical-align: top;
            }

            .btn-primary td a {
                background-color: #00ade6;
                border: solid 1px #00ade6;
                border-radius: 3px;
                border-width: 5px 25px;
                display: inline-block;
                color: #ffffff;
                cursor: pointer;
                font-weight: bold;
                line-height: 2;
                text-decoration: none;
            }

            .last {
                margin-bottom: 0;
            }

            .first {
                margin-top: 0;
            }

            .padding {
                padding: 10px 0;
            }
            /* -------------------------------------
    BODY
------------------------------------- */

            table.body-wrap {
                padding: 20px;
                width: 100%;
            }

            table.body-wrap .container {
                border: 1px solid #f0f0f0;
            }
            /* -------------------------------------
    FOOTER
------------------------------------- */

            table.footer-wrap {
                clear: both !important;
                width: 100%;
            }

            .footer-wrap .container p {
                color: #666666;
                font-size: 12px;
            }

            table.footer-wrap a {
                color: #999999;
            }
            /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */

            h1,
            h2,
            h3 {
                color: #222222;
                font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                font-weight: 200;
                line-height: 1.2em;
                margin: 20px 0 10px;
            }

            h1 {
                font-size: 54px;
                text-align: center;
                font-family: "Courier New", Courier, monospace !important;
                color: #ffffff;
            }

            h1 font {
                font-weight: bold;
                font-family: "Courier New", Courier, monospace !important;
                color: #111111;
                margin: 2px;
            }

            h2 {
                font-size: 36px;
                text-align: center;
                font-family: "Courier New", Courier, monospace !important;
                margin: 20px 0 40px;
            }

            h3 {
                font-size: 28px;
                font-family: "Courier New", Courier, monospace !important;
            }

            p,
            ul,
            ol {
                font-size: 14px;
                font-weight: normal;
                margin-bottom: 10px;
            }

            ul li,
            ol li {
                margin-left: 5px;
                list-style-position: inside;
            }
            /* ---------------------------------------------------
    RESPONSIVENESS
------------------------------------------------------ */
            /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */

            .container {
                clear: both !important;
                display: block !important;
                Margin: 0 auto !important;
                max-width: 600px !important;
            }
            /* Set the padding on the td rather than the div for Outlook compatibility */

            .body-wrap .container {
                padding: 20px;
            }
            /* This should also be a block element, so that it will fill 100% of the .container */

            .content {
                display: block;
                margin: 0 auto;
                max-width: 600px;
            }
            /* Let's make sure tables in the content area are 100% wide */

            .content table {
                width: 100%;
            }
        </style>
    </head>

    <body bgcolor="#f6f6f6">

        <!-- body -->
        <table class="body-wrap" bgcolor="#f6f6f6">
            <tr>
                <td></td>
                <td class="container" bgcolor="#FFFFFF">

                    <!-- content -->
                    <div class="content">
                        <table>
                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td bgcolor="#00ade6" style="border:none;">
                                                <h1><font>&lt;</font>tech talk<font>&gt;</font></h1>
                                            </td>
                                        </tr>
                                    </table>

                                    <h2>New Activity</h2>
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td height="1" bgcolor="#ffffff" style="border:none; border-bottom: 1px solid #cccccc; font-size:1px; line-height:1px;">&nbsp;</td>
                                            <td height="1" bgcolor="#ffffff" style="border:none; border-bottom: 1px solid #cccccc; font-size:1px; line-height:1px;">&nbsp;</td>
                                        </tr>
                                    </table>
                                    @foreach($discussions as $discussion)
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%">
                                                <h3>{{ $discussion->type . ': ' . $discussion->name }}</h3>
                                                <p>{{ $discussion->newComments }} @if($discussion->newComments == 1) new comment. @else new comments. @endif</p>
                                            </td>
                                            <td>
                                                <table class="btn-primary" cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                        <td>
                                                            <a href="{{ $websiteURL . 'discussions/' . $discussion->id }}">View</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="1" bgcolor="#ffffff" style="border:none; border-bottom: 1px solid #cccccc; font-size:1px; line-height:1px;">&nbsp;</td>
                                            <td height="1" bgcolor="#ffffff" style="border:none; border-bottom: 1px solid #cccccc; font-size:1px; line-height:1px;">&nbsp;</td>
                                        </tr>
                                    </table>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /content -->

                </td>
                <td></td>
            </tr>
        </table>
        <!-- /body -->

        <!-- footer -->
        <table class="footer-wrap">
            <tr>
                <td></td>
                <td class="container">

                    <!-- content -->
                    <div class="content">
                        <table>
                            <tr>
                                <td align="center">
                                    <p>Don't like these emails?
                                        <a href="{{ $notificationsURL }}">
                                            <unsubscribe>Change your preferences</unsubscribe>
                                        </a>.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /content -->

                </td>
                <td></td>
            </tr>
        </table>
        <!-- /footer -->

    </body>

    </html>
