<div style="padding: 0 50px;">
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
    <div>
        <style>
            th,
            td {
                text-align: left;
                font-weight: normal;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            .table-border th,
            .table-border td {
                border: 1px solid;
            }
        </style>

        <div style="text-align: center; font-weight: bold;">Indicative format of Request letter for issuance of BG</div>
        <br>

        <div>
            To,<br>
            Yes Bank Limited<br>
            Ground Floor, G1,G2,G3, Chiranjiv Tower-43,<br>
            Nehru Place, New Delhi-110019.
        </div>
        <br>

        <p>I/We hereby request you to issue on my/our behalf and for my/our account a bank guarantee as per the
            following
            conditions:</p>

        <table class="table-border">
            <thead>
                <tr>
                    <th>Bank Guarantee Currency</th>
                    <th>Bank Guarantee Amount</th>
                    <th>Expiry Date</th>
                    <th>Claim Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>INR</td>
                    <td>{{ format_inr($data['bg_amt']) }}</td>
                    <td>{{ date('d-m-Y', strtotime($data['bg_expiry'])) }}</td>
                    <td>{{ date('d-m-Y', strtotime($data['bg_claim'])) }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table-border">
            <tbody>
                <tr>
                    <th>Beneficiary Details</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Name of Beneficiary</th>
                    <td>{{ $data['bg_favour'] }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $data['bg_address'] }}</td>
                </tr>
                <tr>
                    <th>Beneficiary bank IFSC code <br>(required for SFMS to beneficiary's Bank)</th>
                    <td>{{ $data['bg_favour_ifsc'] }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table-border">
            <tbody>
                <tr>
                    <th style="text-align: left" colspan="6">PURPOSE OF BANK GUARANTEE</th>
                </tr>
                @php
                    $tick =
                        'data:image/png;base64,' . base64_encode(file_get_contents(public_path('pdfimages/tick.png')));
                    $cross =
                        'data:image/png;base64,' . base64_encode(file_get_contents(public_path('pdfimages/cross.png')));
                @endphp

                <tr>
                    <th>Advance Payment</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'advance' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                    <th>Security Bond/ Deposit</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'deposit' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                    <th>Bid Bond</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'bid' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                </tr>
                <tr>
                    <th>Performance</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'performance' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                    <th>Financial</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'financial' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                    <th>Counter Guarantee</th>
                    <td>
                        <img src="{{ $data['bg_purpose'] == 'counter' ? $tick : $cross }}" style="height: 12px;">
                    </td>
                </tr>

                <tr>
                    <th>Other (please specify)</th>
                    <td colspan="5"></td>
                </tr>
            </tbody>
        </table>

        <p>
            We authorize you to debit our A/c no.
            {{ $data['bg_bank'] == 1 ? '003063300010771' : ($data['bg_bank'] == 2 ? '50200072650598' : ($data['bg_bank'] == 3 ? '920020003522297' : ($data['bg_bank'] == 4 ? '000405552416' : '003063300010771'))) }}
            for Commission /charges and margin money (if any)<br>
            Vetted text acceptable: <span style="font-family: DejaVu Sans, sans-serif; font-size: 12pt;">☐ Yes
                &nbsp;&nbsp;☐
                No</span><br>
            For Margin: Account no.
            {{ $data['bg_bank'] == 1 ? '003063300010771' : ($data['bg_bank'] == 2 ? '50200072650598' : ($data['bg_bank'] == 3 ? '920020003522297' : ($data['bg_bank'] == 4 ? '000405552416' : '003063300010771'))) }}
            to be debited for new FD.<br>
            Existing FD no. _________________________ to be utilized.<br><br>
            Place of issuance of the BG: ________________________<br>
            Limit to be utilized: ________________________
        </p>

        <p>
            Bank guarantee format contains some onerous clauses which makes the guarantee open ended in terms of tenor
            and/or amount. I/We hereby agree, confirm, declare and undertake to indemnify YES Bank Limited as per the
            one
            time indemnity executed in favour of the YES Bank Limited.
        </p>
    </div>
</div>
