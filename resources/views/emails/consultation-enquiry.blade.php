<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chambers Consultation Intake</title>
</head>
<body style="margin: 0; padding: 0; background-color: #F7F2ED; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: #302A2C; line-height: 1.6;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #F7F2ED; padding: 40px 15px;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="max-width: 600px; width: 100%; background-color: #FFFFFF; border: 1px solid #E9DFD5; box-shadow: 0 10px 30px rgba(75, 25, 41, 0.08);">
          
          <!-- Header -->
          <tr>
            <td style="background-color: #4B1929; padding: 35px 40px; border-bottom: 3px solid #C5A15B; text-align: left;">
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <div style="font-size: 11px; font-weight: 700; color: #C5A15B; letter-spacing: 0.25em; text-transform: uppercase; margin-bottom: 6px;">
                      HIGH COURT OF GUJARAT · CONFIDENTIAL INTAKE
                    </div>
                    <div style="font-size: 24px; font-weight: 700; color: #FFFFFF; font-family: Georgia, serif; letter-spacing: 0.05em; text-transform: uppercase;">
                      THE CHAMBER OF V R TOMAR
                    </div>
                    <div style="font-size: 12px; color: #D8C08A; margin-top: 4px; letter-spacing: 0.1em;">
                      Advocate Vishalkumar R Tomar · Motera, Ahmedabad
                    </div>
                  </td>
                  <td align="right" style="vertical-align: middle;">
                    <div style="background-color: #702D43; color: #C5A15B; border: 1px solid #C5A15B; padding: 6px 12px; font-size: 11px; font-weight: 700; letter-spacing: 0.15em;">
                      {{ $enquiry->reference_id }}
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Sub-header Alert -->
          <tr>
            <td style="background-color: #F7F2ED; padding: 18px 40px; border-bottom: 1px solid #E9DFD5;">
              <div style="font-size: 13px; color: #702D43; font-weight: 600;">
                ★ New Legal Consultation Request Received Online
              </div>
              <div style="font-size: 12px; color: #686168; margin-top: 2px;">
                Timestamp: {{ $enquiry->created_at->format('d M Y, h:i A') }} IST
              </div>
            </td>
          </tr>

          <!-- Body Content -->
          <tr>
            <td style="padding: 35px 40px;">
              <h2 style="font-family: Georgia, serif; font-size: 20px; color: #4B1929; margin: 0 0 20px 0; font-weight: normal; border-bottom: 1px solid #F0E6DD; padding-bottom: 10px;">
                Client &amp; Dispute Particulars
              </h2>

              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="font-size: 14px; margin-bottom: 25px;">
                <tr>
                  <td style="padding: 10px 0; width: 160px; color: #686168; font-weight: 600; vertical-align: top;">
                    Client / Entity:
                  </td>
                  <td style="padding: 10px 0; color: #302A2C; font-weight: 700; font-size: 15px;">
                    {{ $enquiry->name }}
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0; color: #686168; font-weight: 600; border-top: 1px solid #F7F2ED;">
                    Email Address:
                  </td>
                  <td style="padding: 10px 0; border-top: 1px solid #F7F2ED;">
                    <a href="mailto:{{ $enquiry->email }}" style="color: #702D43; text-decoration: underline; font-weight: 600;">{{ $enquiry->email }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0; color: #686168; font-weight: 600; border-top: 1px solid #F7F2ED;">
                    Phone Number:
                  </td>
                  <td style="padding: 10px 0; border-top: 1px solid #F7F2ED;">
                    <a href="tel:{{ $enquiry->phone }}" style="color: #302A2C; text-decoration: none; font-weight: 600;">{{ $enquiry->phone }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0; color: #686168; font-weight: 600; border-top: 1px solid #F7F2ED;">
                    Primary Practice Area:
                  </td>
                  <td style="padding: 10px 0; border-top: 1px solid #F7F2ED;">
                    <span style="background-color: #F7F2ED; color: #702D43; padding: 4px 10px; font-weight: 600; border: 1px solid #E9DFD5; display: inline-block;">
                      {{ $enquiry->practice_area }}
                    </span>
                  </td>
                </tr>
                @if($enquiry->court_forum)
                <tr>
                  <td style="padding: 10px 0; color: #686168; font-weight: 600; border-top: 1px solid #F7F2ED;">
                    Court / Forum:
                  </td>
                  <td style="padding: 10px 0; color: #302A2C; border-top: 1px solid #F7F2ED;">
                    {{ $enquiry->court_forum }}
                  </td>
                </tr>
                @endif
              </table>

              <!-- Message Box -->
              <div style="background-color: #FAF7F4; border-left: 3px solid #C5A15B; padding: 18px 20px; margin-bottom: 25px;">
                <div style="font-size: 11px; font-weight: 700; color: #702D43; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 8px;">
                  Matter Overview / Client Note:
                </div>
                <div style="font-size: 14px; color: #302A2C; line-height: 1.7; white-space: pre-wrap;">{{ $enquiry->message }}</div>
              </div>

              <!-- Quick Action Button -->
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 25px;">
                <tr>
                  <td>
                    <a href="mailto:{{ $enquiry->email }}?subject=Re:%20Chamber%20Consultation%20[{{ $enquiry->reference_id }}]%20—%20Advocate%20Vishalkumar%20R%20Tomar"
                       style="background-color: #702D43; color: #FFFFFF; text-decoration: none; padding: 12px 25px; font-size: 13px; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; display: inline-block;">
                      Reply Directly to Client →
                    </a>
                    &nbsp;&nbsp;
                    <a href="tel:{{ $enquiry->phone }}"
                       style="background-color: #F7F2ED; color: #4B1929; text-decoration: none; padding: 12px 20px; font-size: 13px; font-weight: 600; letter-spacing: 0.05em; display: inline-block; border: 1px solid #E9DFD5;">
                      Call {{ $enquiry->phone }}
                    </a>
                  </td>
                </tr>
              </table>

              <!-- Meta Info -->
              <div style="margin-top: 30px; padding-top: 15px; border-top: 1px dashed #E9DFD5; font-size: 11px; color: #9C9499;">
                Client IP: {{ $enquiry->ip_address }} | Reference: #{{ $enquiry->reference_id }} | Source: thechamberofvrtomar.com
              </div>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #302A2C; padding: 25px 40px; text-align: center; color: #D8C08A; font-size: 11px; line-height: 1.6;">
              <strong style="color: #FFFFFF; font-size: 12px; display: block; margin-bottom: 4px;">THE CHAMBER OF V R TOMAR</strong>
              First Floor, 4D Square Mall, 13, Visat-Gandhinagar Highway, Motera, Ahmedabad, Gujarat 380005<br>
              Advocate Vishalkumar R Tomar · High Court of Gujarat<br>
              <span style="color: #9C9499; font-size: 10px; display: block; margin-top: 8px;">
                CONFIDENTIALITY NOTICE: This transmission is privileged and intended solely for the Chamber registry. Any unauthorized distribution or copying is strictly prohibited under Bar Council of India professional standards.
              </span>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>

