<div>
    <style>
        * {
            font-family: 'Calibri Light', sans-serif;
        }

        .no-border {
            border: none;
        }

        .full-width {
            width: 100%;
        }

        .border-collapse {
            border-collapse: collapse;
        }

        .bordered {
            border: 1px solid;
        }

        .text-left {
            text-align: left;
        }

        .padding-8 {
            padding: 8px;
        }
    </style>
    <div style="border-top: 10px solid #333; border-bottom: 5px solid #f04e23;">
    </div>
    <div style="padding: 10px 0; font-family: sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0" style="width: 100%;">
            <tr>
                <!-- Left: Logo -->
                <td style="width: 50%; padding-left: 20px;">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/logo.png'))) }}"
                        alt="Volks Energie Logo" style="height: 60px;">
                </td>

                <!-- Right: Contact Info -->
                <td style="width: 50%; text-align: right; font-size: 10px; color: #333; padding-right: 20px;">
                    <div>
                        B-1/D8, 2nd floor,<br>
                        Mohan Cooperative Industrial Estate,<br>
                        New Delhi 110044
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/phone.png'))) }}"
                            alt="Phone" style="height: 12px; vertical-align: middle;">
                        +91 9650393636, +91 9654551781<br>
                        Accounts: +91 8882591733
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/email.png'))) }}"
                            alt="Email" style="height: 12px; vertical-align: middle;">
                        contact@volksenergie.in
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/web.png'))) }}"
                            alt="Website" style="height: 12px; vertical-align: middle;">
                        www.volksenergie.in
                    </div>
                </td>
            </tr>
        </table>
        <hr />
    </div>

    <table class="no-border full-width">
        <tbody class="no-border">
            <tr>
                <td class="no-border" style="text-align: left;">
                    To,<br>
                    {{ str_replace(',', ",\n", $data['bg_favour']) }}
                </td>
                <td class="no-border" style="text-align: right;">
                    Date: {{ date('d-m-Y') }}
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <p>
        Subject: Submission of Bank Guarantee No. ___________
    </p>
    <p>
        Dear Sir/Madam,<br>
        With reference to the captioned subject, we would like to submit the original copy of following bank guarantee
        against the below mentioned tender/WO/PO number.
    </p>
    <table class="bordered border-collapse full-width">
        <tbody>
            <tr>
                <th class="bordered text-left padding-8">BANK GUARANTEE NO:</th>
                <td class="bordered padding-8">{{ $data['bg_no'] }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">VENDOR NAME:</th>
                <td class="bordered padding-8">{{ 'VOLKSENERGIE PRIVATE LIMITED' }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">BANK GUARANTEE AMOUNT:</th>
                <td class="bordered padding-8">INR {{ format_inr($data['bg_amt']) }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">BANK GUARANTEE EXPIRY:</th>
                <td class="bordered padding-8">{{ date('d-m-Y', strtotime($data['bg_expiry'])) }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">BANK GUARANTEE CLAIM PERIOD:</th>
                <td class="bordered padding-8">INR {{ date('d-m-Y', strtotime($data['bg_claim'])) }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">TENDER/WO/PO NO:</th>
                <td class="bordered padding-8">{{ $data['tender_no'] }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">NATURE OF BANK GUARANTEE:</th>
                <td class="bordered padding-8">{{ 'PERFORMANCE BANK GUARANTEE' }}</td>
            </tr>
            <tr>
                <th class="bordered text-left padding-8">BG ISSUED BANK DETAILS</th>
                <td class="bordered padding-8">
                    <b>(A) Email ID:</b><br>
                    <ul>
                        <li>Dhiraj.kumar3@yesbank.in</li>
                        <li>Divya.khurana1@yesbank.in</li>
                        <li>dtcorpdesknehruplace@yesbank.in</li>
                        <li>yesbgconfirmation@yesbank.in</li>
                    </ul>
                    <b>(B) Address:</b><br>
                    {{ 'YES BANK LTD - NEHRU PLACE, NEW DELHI' }}<br>
                    <b>(C) Phone No:</b><br>
                    {{ '+91 9643467407' }}
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    Thanks & Regards,<br>
    Piyush Goyal (Director)<br>
    Volks Energie Pvt Ltd<br>
    B-1/D-8, 2nd floor, Mohan Cooperative<br>
    Industrial Estate, New Delhi -110044
</div>
