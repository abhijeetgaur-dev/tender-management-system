<div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
    <p>Dear Imran (Accounts team),</p>

    <p>Please use the pre-filled forms attached below to prepare the following Bank Guarantee.</p>
    <p>The purpose of the Bank Guarantee is {{ $data['purpose'] }}.</p>

    <p>Please prepare the BG using the details below:</p>
    <ul>
        <li>BG in favor of: {{ $data['bg_in_favor_of'] }}</li>
        <li>BG address: {{ $data['bg_address'] }}</li>
        <li>BG Expiry Date: {{ $data['bg_expiry_date'] }}</li>
        <li>BG Claim Date: {{ $data['bg_claim_date'] }}</li>
        <li>Amount: Rs. {{ $data['amount'] }}</li>
        <li>BG Stamp paper value: Rs. {{ $data['bg_stamp'] }}</li>
        <li>Beneficiary Name: {{ $data['beneficiary_name'] }}</li>
        <li>Account No.: {{ $data['account_no'] }}</li>
        <li>IFSC code: {{ $data['ifsc_code'] }}</li>
    </ul>
    <p>Beneficiary Account Details:</p>
    <ul>
        <li>Beneficiary Name: {{ $data['beneficiary_name'] }}</li>
        <li>Account No.: {{ $data['account_no'] }}</li>
        <li>IFSC code: {{ $data['ifsc_code'] }}</li>
    </ul>
    <p>This BG is required within {{ $data['bg_needs'] }} Hrs.</p>

    <p>
        Please courier the BG to the address below keeping sufficient margin for the courier delivery time to ensure the
        BG reaches before the due date and time (in case of tender) and share the SOFT COPY of the BG and the Docket
        slip
        along with SFMS confirmation with us on time using the link below or your dashboard:
        <a href="{{ $data['link_to_acc_form'] }}">click here</a>
    </p>
    <p>Courier Address: {{ $data['courier_address'] }}</p>

    <p>Please attach the covering letter with the Bank Guarantee and courier the BG. (Attached below) (Pending)</p>

    <p>“Ensuring timely operations is the only source of growth”</p>

    <p>
        <b>Regards,</b><br>
        {{ $data['te'] }},<br>
        Approved by Team Leader
    </p>
</div>
