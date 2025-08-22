<style>
    * {
        font-size: 12px;
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

<div class="content-section">
    <table style="width: 100%; margin-bottom: 20px;">
        <tr>
            <td style="width: 150px;"><strong>Cheque No.:</strong></td>
            <td>___________________</td>
        </tr>
        <tr>
            <td><strong>Due Date:</strong></td>
            <td>{{ date('d-m-Y', strtotime($data['cheque_date'])) }}</td>
        </tr>
        <tr>
            <td><strong>Amount:</strong></td>
            <td>{{ format_inr($data['cheque_amt']) }}</td>
        </tr>
        <tr>
            <td><strong>Party Name:</strong></td>
            <td>{{ $data['cheque_favour'] }}</td>
        </tr>
    </table>

    <div style="margin-top: 40px;">
        <p><strong>Handover over to:</strong> ___________________</p>
        <p><strong>Sign:</strong> _____________________________</p>
    </div>

    <div style="margin-top: 40px;">
        <p><strong>Handover over by:</strong> ___________________</p>
        <p><strong>Sign:</strong> _____________________________</p>
    </div>

    <div style="margin-top: 40px;">
        <p><strong>Handover date:</strong> ___________________</p>
    </div>
</div>
