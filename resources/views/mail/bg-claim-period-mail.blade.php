<div>
    <p>Dear {{ $data['assignee'] }},</p>

    <p>The following BG no. has entered the claim period. Please update the status of the BG using the form link or your
        dashboard.</p>

    <ul>
        <li>BG no.: {{ $data['bg_no'] }}</li>
        <li>BG Validity: {{ $data['bg_validity'] }}</li>
        <li>BG Claim Period Expiry: {{ $data['bg_claim_period_expiry'] }}</li>
        <li>BG in favor of: {{ $data['favor'] }}</li>
        <li>Amount: Rs. {{ $data['amount'] }}</li>
        <li>Soft copy of the BG: attached below</li>
    </ul>

    <p><a href="{{ $data['form_link'] }}">BG Status Update</a></p>

    <div>
        <b>Regards,</b><br>
        Admin
    </div>
</div>
