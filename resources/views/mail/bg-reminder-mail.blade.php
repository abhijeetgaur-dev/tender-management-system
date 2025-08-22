<div>
    <p>Dear {{ $data['assignee'] }},</p>
    <p>The following BG's expiry date is about to be reached. Please make efforts to get the BG released on time.</p>

    <ul>
        <li>BG no.: {{ $data['bg_no'] }}</li>
        <li>BG Validity: {{ $data['bg_validity'] }}</li>
        <li>BG Claim Period Expiry: {{ $data['bg_claim_period_expiry'] }}</li>
        <li>BG in favor of: {{ $data['favor'] }}</li>
        <li>Amount: Rs. {{ $data['amount'] }}</li>
        <li>Soft copy of the BG: attached below</li>
    </ul>

    <p>Please talk to the party and ensure that no formality is left to be completed before the BG Expiry. In case, the
        BG is to be extended please arrange the request for an extension from the client and raise the request via <a
            href="{{ $data['form_link'] }}">BG Status Update</a>.</p>

    <p>"BGs bring security for our clients"</p>

    <div>
        <b>Regards,</b><br>
        Admin
    </div>
</div>
