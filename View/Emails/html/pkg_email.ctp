<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style>

    .template-body table {
    border-collapse: separate;
  }
  
  /* Grid */
  .email_table,
  .content_section,
  .column,
  .col_1,
  .col_12,
  .col_2,
  .col_3,
  .col_thumb,
  .col_description {
    width: 100%;
    min-width: 100%;
    min-width: 0 !important; }
  
  .email_body,
  .content_cell,
  .col_1,
  .col_12,
  .col_2,
  .col_3,
  .col_thumb,
  .col_description {
    font-size: 0 !important;
    line-height: 100%; }
  
  .col_1,
  .col_12,
  .col_2,
  .col_3,
  .col_thumb,
  .col_description {
    display: inline-block;
    vertical-align: top; }
  
  .content_section {
    max-width: 640px;
    Margin: 0 auto;
    text-align: center; }
  
  .email_body,
  .content_cell,
  .column_cell {
    padding-left: 8px;
    padding-right: 8px; }
  
  .email_start {
    padding-top: 32px; }
  
  .email_end {
    padding-bottom: 32px; }
  
  .column_cell {
    vertical-align: top; }
  
  .col_1 {
    max-width: 156px; }
  
  .col_12 {
    max-width: 192px; }
  
  .col_2 {
    max-width: 312px; }
  
  .col_3 {
    max-width: 468px; }
  
  .col_thumb {
    max-width: 80px; }
  
  .col_description {
    max-width: 372px; }
  
  .ebtn a,
  .ebtn span
  .column_cell h1,
  .column_cell h2,
  .column_cell h3,
  .column_cell h4 {
    font-weight: bold; }
  
  .column_cell,
  .column_cell p {
    font-size: 16px;
    color: #757575; }
  
  .column_cell p {
    line-height: 23px;
    mso-line-height-rule: exactly;
    Margin-top: 0;
    Margin-bottom: 24px; }
    .column_cell p.lead {
      font-size: 20px;
      line-height: 27px; }
  
  .column_cell h1,
  .column_cell h2,
  .column_cell h3,
  .column_cell h4 {
    padding: 0;
    Margin-left: 0;
    Margin-right: 0;
    Margin-top: 16px;
    Margin-bottom: 8px;
    color: #4d4d4d; }
    .column_cell h1 a,
    .column_cell h1 a span,
    .column_cell h2 a,
    .column_cell h2 a span,
    .column_cell h3 a,
    .column_cell h3 a span,
    .column_cell h4 a,
    .column_cell h4 a span {
      color: #4d4d4d; }
  
  .column_cell h1 {
    font-size: 26px;
    line-height: 34px; }
  
  .column_cell h2 {
    font-size: 20px;
    line-height: 26px; }
  
  .column_cell h3 {
    font-size: 18px;
    line-height: 23px; }
  
  .column_cell h4 {
    font-size: 14px;
    line-height: 18px; }
  
  .footer_b .column_cell,
  .footer_b .column_cell p,
  .footer_b .column_cell a,
  .footer_b .column_cell a span {
    color: #8f8f8f; }
  
  .email_body {
    background-color: #fff; }
  
  .column_cell a,
  .column_cell a span,
  .column_cell.tp,
  .column_cell .tp {
    color: #388cda; }
  
  .nav_menu {
    text-align: right;
    padding-top: 7px; }
    .nav_menu p {
      line-height: 100%; }
  
  .hero_image {
    background-repeat: no-repeat;
    background-position: 50% 0; }
  
  .hdr_menu {
    text-align: right;
    padding-top: 10px; }
    .hdr_menu p {
      line-height: 100%; }
  
  .hdr_menu a,
  .email_body a.blink,
  .email_body a.blink:visited {
    text-decoration: none; }
  
  .email_body .logo_c {
    line-height: 100%; }
  
  .logo_c img {
    width: auto;
    height: 32px; }
  
  .email_body .fsocial {
    line-height: 100%; }
  
  .fsocial img {
    width: 24px;
    height: 24px; }
  
  .hr_ep {
    font-size: 0;
    line-height: 1px;
    mso-line-height-rule: exactly;
    min-height: 1px;
    overflow: hidden;
    height: 2px;
    background-color: transparent !important; }
  
  .content_b {
    background-color: #ffffff; }
  
  .accent_b {
    background-color: #2ccf9c; }
  
  .default_b {
    background-color: #388cda; }
  
  .footer_b {
    background-color: #d4d7d9; }
  
  img {
    max-width: 200px; }
  
  .column_cell .imgr,
  .column_cell .imgr img {
    width: 100%;
    height: auto;
    clear: both;
    font-size: 0;
    line-height: 100%; }
  
  .column_cell .imgr a,
  .column_cell .imgr span {
    line-height: 1; }
  
  .ebtn,
  .ebtn_xs,
  .ic_h,
  .hr_rl {
    display: table;
    margin-left: auto;
    margin-right: auto; }
  
  .ebtn td {
    font-size: 18px;
    font-weight: bold;
    padding: 13px 24px;
    line-height: 22px;
    mso-line-height-rule: exactly;
    border-radius: 4px;
    text-align: center; }
    .ebtn td a {
      text-decoration: none; }
    .ebtn td a,
    .ebtn td a span {
      color: #ffffff; }
  
  .ic_h td {
    padding: 16px;
    text-align: center;
    vertical-align: middle;
    line-height: 100%;
    mso-line-height-rule: exactly;
    border-radius: 100px; }
  
  .ic_h img {
    line-height: 100%; }
  
  .email_summary {
    display: none;
    font-size: 1px;
    line-height: 1px;
    max-height: 0px;
    max-width: 0px;
    opacity: 0;
    overflow: hidden; }
  
  .brt {
    border-radius: 4px 4px 0 0; }
  
  .brb {
    border-radius: 0 0 4px 4px; }
  
  .bra {
    border-radius: 4px; }
  
  .braf {
    border-radius: 200px; }
  
  .column_cell.tm,
  .column_cell .tm,
  .column_cell .tm a,
  .column_cell .tm span {
    color: #b3b3b3; }
  
  .column_cell.sc,
  .column_cell .sc,
  .column_cell.sc p,
  .column_cell.sc a,
  .column_cell.sc a span {
    color: #ffffff; }
  
  .tdel {
    text-decoration: line-through; }
  
  .tc {
    text-align: center; }
  
  .tc .imgr img {
    margin-left: auto;
    margin-right: auto; }
  
  .tl {
    text-align: left; }
  
  table.tl {
    margin-left: 0;
    margin-right: auto; }
  
  .tr {
    text-align: right; }
  
  table.tr {
    margin-left: auto;
    margin-right: 0; }
  
  .py {
    padding-top: 16px;
    padding-bottom: 16px; }
  
  .px {
    padding-left: 16px;
    padding-right: 16px; }
  
  .pxs {
    padding-left: 8px;
    padding-right: 8px; }
  
  .pt {
    padding-top: 3px; }
  
  .pte {
    padding-top: 32px; }
  
  .pb {
    padding-bottom: 16px; }
  
  .pb_xs {
    padding-bottom: 8px; }
  
  .pbe {
    padding-bottom: 24px; }
  
  .pte_lg {
    padding-top: 64px; }
  
  .pl_0,
  .content_cell.pl_0 {
    padding-left: 0; }
  
  .pr_0,
  .content_cell.pr_0 {
    padding-right: 0; }
  
  .column_cell .mte {
    margin-top: 32px; }
  
  .column_cell .mt {
    margin-top: 16px; }
  
  .column_cell .mt_xs {
    margin-top: 8px; }
  
  .column_cell .mt_0 {
    margin-top: 0; }
  
  .column_cell .mb_0 {
    margin-bottom: 0; }
  
  .column_cell .mb_xs {
    margin-bottom: 8px; }
  
  .column_cell .mb {
    margin-bottom: 16px; }
  
  .column_cell .mbe {
    margin-bottom: 32px; }
  
  .bt {
    border-top: 1px solid; }
  
  .bb {
    border-bottom: 1px solid; }
  
  .bt,
  .bb {
    border-color: #e6e9eb; }
  
  .clear {
    content: ' ';
    display: block;
    clear: both;
    height: 1px;
    overflow: hidden;
    font-size: 0; }
    .column_cell,
    .column_cell p,
    .ebtn a,
    .ebtn span,
      .column_cell h1,
    .column_cell h2,
    .column_cell h3,
    .column_cell h4 {
      font-family: "Lato", sans-serif !important;
      font-weight: 400 !important; }
    .ebtn a,
    .ebtn span,
    .column_cell strong,
    .column_cell h1,
    .column_cell h2,
    .column_cell h3,
    .column_cell h4 {
      font-weight: 700 !important; }
    .column_cell a {
      display: inline-block; }
      .column_cell a img {
        vertical-align: middle; }
    .ebtn td {
      padding: 0 !important; }
    .ebtn a {
      display: block !important;
      padding: 11px 24px !important;
      line-height: 26px !important; }
      .ebtn a span {
        display: block !important;
        text-align: center !important;
        vertical-align: top !important;
        line-height: inherit !important; }
  
  @media (max-width: 657px) {
    .col_1,
    .col_12,
    .col_2,
    .col_3,
    .col_thumb,
    .col_description {
      max-width: none !important; }
    .nav_menu {
      padding-top: 18px !important; }
    .email_start {
      padding-top: 8px !important; }
    .email_end {
      padding-bottom: 8px !important; }
    .nav_menu,
    .logo_c {
      text-align: center !important; }
    .email_start .content_cell {
      position: relative; }
    .col_nav {
      width: auto !important;
      max-width: none !important;
      position: absolute;
      right: 8px;
      top: 2px; }
    .pte_lg,
    .py.pte_lg {
      padding-top: 32px !important; }
    .switch_xs {
      text-align: left !important; }
    .switch_tc {
      text-align: center !important; }
    .switch_tc table.tl {
      float: none !important;
      margin-left: auto !important;
      margin-right: auto !important; }
    .hide {
      max-height: 0 !important;
      display: none !important;
      mso-hide: all !important;
      overflow: hidden !important;
      font-size: 0 !important; } }
  /* Mobile view */
          .preview-mobile .col_1,
        .preview-mobile .col_12,
        .preview-mobile .col_2,
        .preview-mobile .col_3,
        .preview-mobile .col_thumb,
        .preview-mobile .col_description {
          max-width: none !important; }
        .preview-mobile .nav_menu {
          padding-top: 18px !important; }
        .preview-mobile .email_start {
          padding-top: 8px !important; }
        .preview-mobile .email_end {
          padding-bottom: 8px !important; }
        .preview-mobile .nav_menu,
        .preview-mobile .logo_c {
          text-align: center !important; }
        .preview-mobile .email_start .content_cell {
          position: relative; }
        .preview-mobile .col_nav {
          width: auto !important;
          max-width: none !important;
          position: absolute;
          right: 8px;
          top: 2px; }
        .preview-mobile .pte_lg,
        .preview-mobile .py.pte_lg {
          padding-top: 32px !important; }
        .preview-mobile .switch_xs {
          text-align: left !important; }
        .preview-mobile .switch_tc {
          text-align: center !important; }
        .preview-mobile .switch_tc table.tl {
          float: none !important;
          margin-left: auto !important;
          margin-right: auto !important; }
        .preview-mobile .hide {
          max-height: 0 !important;
          display: none !important;
          mso-hide: all !important;
          overflow: hidden !important;
          font-size: 0 !important; }
  
          /* Theme 2*/
          .theme-2 .column_cell,
          .theme-2 .column_cell p {
            color: #616161; }
          .theme-2 .column_cell h1,
          .theme-2 .column_cell h2,
          .theme-2 .column_cell h3,
          .theme-2 .column_cell h4,
        .theme-2 .column_cell h1 a,
        .theme-2 .column_cell h1 a span,
        .theme-2 .column_cell h2 a,
        .theme-2 .column_cell h2 a span,
        .theme-2 .column_cell h3 a,
        .theme-2 .column_cell h3 a span,
        .theme-2 .column_cell h4 a,
        .theme-2 .column_cell h4 a span {
          color: #212121; }
          .theme-2 .footer_b .column_cell,
          .theme-2 .footer_b .column_cell p,
          .theme-2 .footer_b .column_cell a,
          .theme-2 .footer_b .column_cell a span {
            color: #ffffff; }
          .theme-2 .email_body {
            background-color: #d9dcee; }
          .theme-2 .column_cell a,
          .theme-2 .column_cell a span,
          .theme-2 .column_cell.tp,
          .theme-2 .column_cell .tp {
            color: #3f51b5; }
          .theme-2 .content_b {
            background-color: #ffffff; }
          .theme-2 .accent_b {
            background-color: #ff4081; }
          .theme-2 .default_b {
            background-color: #3f51b5; }
          .theme-2 .footer_b {
            background-color: #8d8f9a; }
          .theme-2 .ebtn td {
            font-size: 15px;
            font-weight: bold;
            padding: 13px 24px;
            line-height: 22px;
            mso-line-height-rule: exactly;
            border-radius: 2px;
            text-align: center; }
            .theme-2 .ebtn td a {
              text-decoration: none; }
            .theme-2 .ebtn td a,
            .theme-2 .ebtn td a span {
              color: #ffffff; }
          .theme-2 .brt {
            border-radius: 3px 3px 0 0; }
  
          .theme-2 .brb {
            border-radius: 0 0 3px 3px; }
  
          .theme-2 .bra {
            border-radius: 3px; }
  
          .theme-2 .column_cell.tm,
          .theme-2 .column_cell .tm,
          .theme-2 .column_cell .tm a,
          .theme-2 .column_cell .tm span {
            color: #9E9E9E; }
          .theme-2 .column_cell.sc,
          .theme-2 .column_cell .sc,
          .theme-2 .column_cell.sc p,
          .theme-2 .column_cell.sc a,
          .theme-2 .column_cell.sc a span {
            color: #ffffff; }
          .theme-2 .bt,
          .theme-2 .bb {
            border-color: #E0E0E0; }
            .theme-2 .column_cell,
            .theme-2 .column_cell p,
            .theme-2 .ebtn a,
            .theme-2 .ebtn span,
              .theme-2 .column_cell h1,
            .theme-2 .column_cell h2,
            .theme-2 .column_cell h3,
            .theme-2 .column_cell h4 {
              font-family: "Roboto", sans-serif !important;
              font-weight: 400 !important; }
            .theme-2 .ebtn a,
            .theme-2 .ebtn span,
            .theme-2 .column_cell strong,
            .theme-2 .column_cell h1,
            .theme-2 .column_cell h2,
            .theme-2 .column_cell h3,
            .theme-2 .column_cell h4 {
              font-weight: 700 !important; }
            .theme-2 .ebtn td {
              padding: 0 !important; }
            .theme-2 .ebtn a {
              display: block !important;
              padding: 9px 18px !important;
              line-height: 22px !important; }
  
                  /* Theme 3*/
                  .theme-3 .email_body,
                  .theme-3 .content_b {
                      background-color: #ffffff; }
                  .theme-3 .column_cell a,
                  .theme-3 .column_cell a span,
                  .theme-3 .column_cell.tp,
                  .theme-3 .column_cell .tp {
                      color: #292b2c; }
                  .theme-3 .accent_b {
                      background-color: #5cb85c; }
                  .theme-3 .default_b {
                      background-color: #292b2c; }
                  .theme-3 .footer_b {
                      background-color: #f0f0f0; }
                  .theme-3 .ebtn td {
                      font-size: 17px;
                      font-weight: bold;
                      padding: 13px 24px;
                      line-height: 22px;
                      mso-line-height-rule: exactly;
                      border-radius: 4px;
                      text-align: center; }
                  .theme-3 .column_cell.tm,
                  .theme-3 .column_cell .tm,
                  .theme-3 .column_cell .tm a,
                  .theme-3 .column_cell .tm span {
                      color: #b3b3b3; }
                  .theme-3 .footer_b .column_cell,
                  .theme-3 .footer_b .column_cell p,
                  .theme-3 .footer_b .column_cell a,
                  .theme-3 .footer_b .column_cell a span {
                      color: #8f8f8f;
                  }
                  .theme-3 .column_cell.sc,
                  .theme-3 .column_cell .sc,
                  .theme-3 .column_cell.sc p,
                  .theme-3 .column_cell.sc a,
                  .theme-3 .column_cell.sc a span,
                  .theme-3 .ebtn a,
                  .theme-3 .ebtn a span {
                      color: #ffffff; }
                  .theme-3 .bt,
                  .theme-3 .bb {
                      border-color: #dfdfdf; }
                      .theme-3 .column_cell,
                      .theme-3 .column_cell p,
                      .theme-3 .ebtn a,
                      .theme-3 .ebtn span,
                      .theme-3 .column_cell h1,
                      .theme-3 .column_cell h2,
                      .theme-3 .column_cell h3,
                      .theme-3 .column_cell h4 {
                          font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important; }
                      .theme-3 .ebtn td {
                          padding: 0 !important; }
                      .theme-3 .ebtn a {
                          display: block !important;
                          padding: 8px 18px !important;
                          line-height: 26px !important; }
  
  </style>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="template-body theme-1">
                    <!-- header_social -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body email_start tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell content_b pb brt tc">
                                                    <div class="col_1">
                                                        <table role="presentation" class="column" width="100%"
                                                            border="0" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="column_cell logo_c pt">
                                                                        <a href="#"><img src="http://shinegenexcrm.com/frontend_new/images/logo.png"
                                                                                width="136" height="32"
                                                                                alt=""
                                                                                style="max-width:140px;"></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- hero_plain -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell default_b hero_image pt pbe tc"
                                                    background="http://shinegenexcrm.com/frontend_new/images/hero_background.png">
                                                    <table role="presentation" class="column" width="100%" border="0"
                                                        cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="column_cell sc pt tc">
                                                                    <h1 class="sc">Welcome to SJFX family!!</h1>
                                                                    <p class="mb">Experience a whole new ambience of trading.</p>
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
                    <!-- spacer -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell content_b" height="32">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- hero_alt_welcome -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell content_b py tc">
                                                    <table role="presentation" class="column" width="100%" border="0"
                                                        cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="column_cell pt tc">
                                                                    <table role="presentation" class="ic_h"
                                                                        align="center" width="80" border="0"
                                                                        cellspacing="0" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="default_b"><img role="img"
                                                                                        src="http://shinegenexcrm.com/frontend_new/images/user_white.png"
                                                                                        width="48" height="48"
                                                                                        alt=""
                                                                                        style="max-width:48px;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h1><?php echo $name; ?></h1>
                                                                    
                                                                    <p class="lead tm">Thank you so much for purchasing the package under your cabinet. A whole new trading world awaits to get explored by you.<br>
                                                                        Here are the details with regards to your purchased plan
                                                                    </p>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="color:#333;font-weight:500;font-size:15px">
                                                                    <div
                                                                        style="padding:15px;border:2px solid #e2e8e9">
                                                                        <p style="margin-top:2em;margin-bottom:2em"><span>
                                                                                Email :-
                                                                            </span><?php echo $email;?></p>
                                                                            <p style="margin-bottom:2em;"><span>
                                                                                    Customer Id :-
                                                                                </span><?php echo $customerid; ?></p>
                                                                                <p style="margin-bottom:2em;"><span>
                                                                                        Plan Type :-
                                                                                    </span><?php echo $package; ?></p>
                                                                                    <p style="margin-bottom:2em;"><span>
                                                                                        Package Amount :-
                                                                                    </span>? <?php echo $amount; ?>/-</p>
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
                    <!-- button -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell content_b tc">
                                                    <table role="presentation" class="column" width="100%" border="0"
                                                        cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="column_cell tc">
                                                                    <table role="presentation" class="ebtn tc"
                                                                        align="center" border="0" cellspacing="0"
                                                                        cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="default_b"><a
                                                                                        href="#"><span>
                                                                                            Lorem</span></a></td>
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
                        </tbody>
                    </table>
                   
                   
                    <!-- footer -->
                    <table role="presentation" class="email_table" width="100%" border="0" cellspacing="0"
                        cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="email_body email_end tc">
                                    <table role="presentation" class="content_section" width="100%" border="0"
                                        cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="content_cell footer_b pb brb tc" style="background-color: unset">
                                                    <div class="col_3">
                                                        <table role="presentation" class="column" width="100%"
                                                            border="0" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="column_cell pt  switch_tc">
                                                                        <p class="mb_xs" style="margin-top:2em">
                                                                            ©2019 SJFX
                                                                            
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>