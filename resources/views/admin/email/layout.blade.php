<!DOCTYPE html>
<html>
<head>

    <style type="text/css">
        body,p, h1, h2, h3,h4,h5,h6 {
            font-family: 'Circular Std',Helvetica Neue,Segoe UI, Helvetica, Arial, sans-serif;
        }
    </style>
</head>
<body>

<div style="padding: 20px; font-family: font-size: 14px;
line-height: 1.43;
background-color: #F6F7F7;
background-position: top center;
background-size: contain;
background-repeat: no-repeat;

">

    <div style="max-width: 600px; margin: 10px auto 20px; font-size: 12px; color: #A5A5A5; text-align: center;">

    </div>
    <div style="max-width: 600px; border: 1px solid rgba(9,9,19,0.1); margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);border-radius: 2rem;">
        <table style="width: 100%; ">
            <tr>
                <td>
                    <div class="auth-box-w">
                        <div class="logo-w" style="display:flex;align-items: center;justify-content: space-between;">
                            <a href="{{ url('/') }}"><img height="50px" alt="" style="margin: 30px"  src="{{config('constants.base_url').'email/email-icon.png'}}" /></a>
                        </div>
                    </div>
                </td>

            </tr>
        </table>

        <div style="padding: 60px 70px; border-top: 1px solid rgba(0,0,0,0.05);">


           @yield('content')

            <p style="font-size: 12px;">Need Help?
            </p>

            <div style="color: #A5A5A5; font-size: 12px;text-align:justify;text-justify: inter-word;">
                <p>If you have any questions you can simply reply to this email or find our contact information below. Also
                    contact us at
                    <a href="mailto:help@gtisma.org" style="text-decoration: underline; color: #4B72FA;">help@gtisma.com</a>
                </p>
            </div>
        </div>
        <div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
            <div style="margin-bottom: 20px;">
                <a href="#" style="display: inline-block; margin: 0px 10px;">
                    <img alt="" src="{{config('constants.base_url').'email/social-icons/twitter.png'}}" style="width:28px;">
                </a>
                <a href="#" style="display: inline-block; margin: 0px 10px;">
                    <img alt="" src="{{config('constants.base_url').'email/social-icons/facebook.png'}}" style="width: 28px;">
                </a>
                <a href="#" style="display: inline-block; margin: 0px 10px;">
                    <img alt="" src="{{config('constants.base_url').'email/social-icons/linkedin.png'}}" style="width: 28px;">
                </a>
                <a href="#" style="display: inline-block; margin: 0px 10px;">
                    <img alt="" src="{{config('constants.base_url').'email/social-icons/instagram.png'}}" style="width: 28px;">
                </a>

            </div>
            <div style="margin-bottom: 20px;">
                <a href="{{ url('/')}}"
                   style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">
                    Home
                </a>
                <a href="{{ url('/about')}}"
                   style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">
                    About
                </a>
                <a href="{{ url('/contact')}}"
                   style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">
                    Contact
                </a>
            </div>
            <div style="color: #A5A5A5; font-size: 12px; margin-bottom: 20px; padding: 0px 50px;">
                You are receiving this email because you signed up for GTISMA. We use GTISMA to send our emails
            </div>

            <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                <div style="color: #5D5D5D; font-size: 10px; margin-bottom: 5px;">
                    GTISMA, Akure. Nigeria.
                </div>
                <div style="color:#5D5D5D; font-size: 10px;">
                    Copyright &copy; GTISMA {{date('Y')}} . All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
