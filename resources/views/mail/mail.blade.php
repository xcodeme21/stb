<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>STB</title>
  <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {font-family: Arial, sans-serif;}

    dl {
  width: 100%;
  overflow: hidden;
  padding: 0;
  margin: 0
}
dt {
  float: left;
  width: 50%;
  /* adjust the width; make sure the total of both is 100% */
  padding: 0;
  margin: 0
}
dd {
  float: left;
  width: 50%;
  padding: 0;
  margin: 0
}
  </style>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="center">
              <img src="https://stbvirtualtour.com/public/assets/img/register_background.jpg" alt="" width="100%" style="height:auto;display:block;" />
            </td>
          </tr>
          <tr>
            <td style="padding:36px 30px 42px 30px;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:0 0 36px 0;color:#153643;">
                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Thank you <span style="color: #f13643;">{!! @$full_name !!}</span> for registering!</h1>
                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">You've successfully registered for Singapore Tourism Board’s Immersive Virtual Experiences Webinar.
                        Please find your registration details as follows</p>
                        <br>

                        <dl>
                          <dt>Name</dt>
                          <dd>{!! @$full_name !!}</dd>
                          <dt>Virtual Tour</dt>
                          <dd>{!! @$vt !!}</dd>
                        </dl>


                        <br>
                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Don't forget to experience the virtual event on 5 August 2021 at 9:00-12:00. We will send you the updated link nearer to the date of the event. 
                            If you have any further questions please contact +62 878 7870 6079.</p>
                        <br>
                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Thank you,<br>Singapore Tourism Board</p>

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