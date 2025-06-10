<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="website" property="og:type" />
    <meta content="" property="og:description" />
    <meta content="" property="og:title" />
    <meta content="" name="description" />
    <meta charset="utf-8" />
    <meta content="width=device-width" name="viewport" />

    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0 !important;
        }

        li {
            margin-left: 0 !important;
        }

        table {
            width: 100% !important;
            border: 0 !important;
        }

        .secondary-btn {
            display: inline-block;
            padding: 8px 25px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 20px;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            color: #1F1F1F;
            background-color: #FDB016;
            border-radius: 25px;
            border: 1px solid #FDB016;
            cursor: pointer;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .email-container .background-top {
            width: 100%;
            background-color: #000000;
        }

        .email-container .logo-wrapper {
            height: 30px;
            width: 100%;
            padding: 0 !important;
            overflow: hidden;
        }

        .email-container .logo-wrapper .logo {
            height: 100%;
            width: 100%;
            object-fit: contain;
            object-position: left !important;
        }

        .email-container .company-name {
            font-size: 16px;
            line-height: 20px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
        }

        .email-container .letter-content-card .letter-content tr td {
            text-align: center !important;
            color: #666666;
        }

        .email-container .letter-content-card .letter-content {
            max-width: calc(100% - 80px);
            margin-inline: auto;
        }

        .email-container .letter-content-card .letter-content tr td .title {
            color: #1F1F1F;
            font-size: 25px;
            line-height: 35px;
            font-weight: bold;
            margin-bottom: 18px !important;
        }

        .email-container .letter-content-card .letter-content tr td p {
            color: #666666;
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 18px !important;
        }

        .background-bottom {
            padding-top: 40px;
            padding-bottom: 10px;
            background-color: #F4F7FF;
        }

        .footer-table {
            max-width: calc(100% - 60px);
            margin-inline: auto;
        }

        .footer-table .socian-link {
            margin-left: 8px !important;
            margin-right: 8px !important;
            text-decoration: none;
            display: inline-block;
        }

        .footer-table .image-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background-color: #fff;
        }

        .footer-table .image-icon img {
            width: 16px !important;
            height: 16px !important;
            margin: 9px;
        }

        .divider {
            margin-block: 30px;
            width: 100%;
            height: 1px;
            border-width: 0;
            background-color: #C0C4CC;
        }

        .footer-table tr td p {
            color: #9CA0A8;
            font-size: 12px;
            line-height: 16px;
            margin-bottom: 18px !important;
        }

        .footer-table tr td p strong {
            color: #1F1F1F;
            cursor: pointer;
        }

        .footer-table tr td p a,
        .footer-table tr td p .link {
            text-decoration: none;
            color: #9CA0A8;
            font-size: 12px;
            line-height: 16px;
        }
    </style>
</head>

<body>

    <?php

    $instergram = '#';
    $tiktok = '#';
    $snapchat = '#';
    $twitter = '#';
    $facebook = 'https://www.facebook.com/XGuard0/';
    $linkedin = 'https://www.linkedin.com/company/xguard-security-investigations';
    $email = config('mail.from.address');

    ?>

    <div class="email-container">

        <div class="background-top" style="padding-top: 30px !important; padding-bottom: 30px !important;">

            <table style="max-width: calc(100% - 60px);" align="center">
                <tr>
                    <td style="text-align: left;">
                        <div class="logo-wrapper">
                            <img class="logo" src="{{ asset('/img/frontend/logo/white-logo.webp') }}" alt="X-Guard">
                        </div>
                    </td>
                    <td style="text-align: right;">
                        <p class="company-name">
                            {{ config('app.name') }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="letter-content-card"
                            style="width: 100%; height: 100%; position: relative !important; margin-top: 30px; padding-top: 40px !important; padding-bottom: 40px !important; border-radius: 20px; background-color: #fff;">
                            <!-- CONTENT -->
                            {!! $content !!}
                        </div>
                    </td>
                </tr>
            </table>

        </div>
        <div class="background-bottom">

            <table class="footer-table" align="center">
                <tr>
                    <td style="text-align: center;">

                        <a href="<?= $facebook ?>" class="socian-link">
                            <div class="image-icon">
                                <img src="{{ asset('img/frontend/email/facebook.png') }}" alt="">
                            </div>
                        </a>

                        <a href="<?= $linkedin ?>" class="socian-link">
                            <div class="image-icon">
                                <img src="{{ asset('img/frontend/email/linkedin.png') }}" alt="">
                            </div>
                        </a>

                    </td>
                </tr>
                <tr>
                    <td>
                        <hr class="divider" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>
                            If you have any questions, feel free message us at <a
                                href="mailto:<?= $email ?>"><strong><?= $email ?></strong></a> All
                            right reserved.
                            Update email preferences or unsubscribe.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>
                            No 66A Nalandararama Road, Nugegoda
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>
                            <a href="https://x-guard.lk" type="button" class="link">Home</a>
                            <span style="margin-inline: 5px;">|</span>
                            <a href="https://x-guard.lk/contact" type="button" class="link">Contact</a>
                        </p>
                    </td>
                </tr>
            </table>

        </div>

    </div>
</body>

</html>
