<?php ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Montserrat:400,500&display=swap" rel="stylesheet" />
  <style type="text/css">
      /* latin-ext */
    @font-face {
      font-family: 'Karla';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Karla'), local('Karla-Regular'), url(https://fonts.gstatic.com/s/karla/v7/qkBbXvYC6trAT7RbLtyU5rZPoAU.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Karla';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Karla'), local('Karla-Regular'), url(https://fonts.gstatic.com/s/karla/v7/qkBbXvYC6trAT7RVLtyU5rZP.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Karla';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local('Karla Bold'), local('Karla-Bold'), url(https://fonts.gstatic.com/s/karla/v7/qkBWXvYC6trAT7zuC8m3xLtlmgzDCNg.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Karla';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local('Karla Bold'), local('Karla-Bold'), url(https://fonts.gstatic.com/s/karla/v7/qkBWXvYC6trAT7zuC8m5xLtlmgzD.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v13/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v13/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v13/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v13/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v13/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v13/JTURjIg1_i6t8kCHKm45_ZpC3gTD_vx3rCubqg.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v13/JTURjIg1_i6t8kCHKm45_ZpC3g3D_vx3rCubqg.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v13/JTURjIg1_i6t8kCHKm45_ZpC3gbD_vx3rCubqg.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v13/JTURjIg1_i6t8kCHKm45_ZpC3gfD_vx3rCubqg.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v13/JTURjIg1_i6t8kCHKm45_ZpC3gnD_vx3rCs.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }


    /* Outlines the grids, remove when sending
    table td { border: 1px solid cyan; } */

    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;font-family: 'Karla', sans-serif; font-size: 15px; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }

    /* RESET STYLES */
    img { border: 0; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { margin: 0 !important; padding: 0 !important; width: 100% !important; }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }

    /* MEDIA QUERIES */
    @media all and (max-width:641px){ 
      body, table, td, a {font-size: 13px;}
      .wrapper{ width:98%!important; padding: 0 !important; }
      .container{ width:100%!important;  padding: 0 !important; }
      .mobile{ width:100%!important; display:block!important; padding: 0 !important; }
      .img{ width:100% !important; height:auto !important; }
      *[class="mobileOff"] { width: 0px !important; display: none !important; }
      *[class*="mobileOn"] { display: block !important; max-height:none !important; }
    }

  </style>    
</head>
<body style="margin:0; padding:0; background-color:#F2F2F2;font-family: 'Karla', sans-serif;">
  
  <span style="display: block; width: 625px !important; max-width: 625px; height: 1px" class="mobileOff"></span>
  
  <center>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
      <tr>
        <td align="center" valign="top">
            
          <table width="625" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="20" style="font-size:10px; line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <img src="http://shinegenexcrm.com/frontend_new/images/logo.png" alt="logo" width="50" height="50" style="margin:0; padding:0; border:none; display:block;" border="0" />
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="20" style="font-size:10px; line-height:20px;">&nbsp;</td>
            </tr>
          </table>

          <table width="625" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFAFA"  style="    background-color: aliceblue; background-repeat: no-repeat; background-position: bottom center;">
            <tr>
              <td align="center" valign="top">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:625px">
                  <v:fill type="frame" src="http://shinegenexcrm.com/frontend_new/images/mailer.jpg" color="#ffffff" />
                  <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                  <div style="font-size:1px;line-height:1px">
                  <table width="625" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody>
                  <tr>
                  <td height="255" align="center">
                  <![endif]-->
                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td height="30" style="font-size:10px; line-height:30px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="top">
                      <img src="http://shinegenexcrm.com/frontend_new/images/user.png" width="80" height="80" lat="ixon" style="margin:0; padding:0; border:none; display:block;    border: 2px solid #388cda;
                      border-radius: 50%;" border="0" />
                    </td>
                  </tr>
                  <tr>
                    <td height="30" style="font-size:10px; line-height:30px;">&nbsp;</td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="top" style="font-size: 1.5em; color:#388cda; font-weight:600;">
                        <?php echo $name; ?>
                    </td>
                  </tr>
                  <tr>
                    <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
                  </tr>
                  <tr>
                      <td align="center" valign="top" style="font-size: 1.5em; color:#388cda; font-weight:600;">
                          Welcome to SJFX family !!!
                      </td>
                    </tr>
                </table>

              </td>
            </tr>

            <tr>
              <td align="center" valign="top">

                <table width="500" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="top" style="color: #7C7C7C; padding:0 10px; font-size:1.2em; line-height:1.8em;">
                       Thank You for contacting us. We will get back to you soon
                    </td>
                  </tr>
                  
                  
                   <tr>
                    <td align="center" valign="top" style="color: #7C7C7C; padding:0 10px; font-size:1.2em; line-height:1.8em;">
                      You can also reach us at cabinetandcrm@shinejoinmarkets.com
                    </td>
                  </tr>
                  
                   <tr style="border-collapse:collapse;"> 
                         <td align="left" style="padding:0;Margin:0;padding-bottom:20px;"> <h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:20px;font-style:normal;font-weight:normal;"><br></h3><h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:15px;font-style:normal;font-weight:normal;color:#cac1c1;">SJFX Team.<br></br>Email: cabinetandcrm@shinejoinmarkets.com. <br></h3></td> 
                     </tr> 
                  
                  <tr>
                      <td height="50" style="font-size:10px; line-height:50px;">&nbsp;</td>
                  </tr>
                 
                 
                </table>

              </td>
            </tr>

            <tr>
              <td height="50" style="font-size:10px; line-height:50px;">&nbsp;</td>
            </tr>
          </table>          
          
          
          <table width="625" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#388cda">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>  
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top" style="color:#ffffff; font-size: .9em;">
                      2019 SJFX. All rights reserved.
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>  
          </table>

        </td>
      </tr>
    </table>
  </center>
</body>
</html>
