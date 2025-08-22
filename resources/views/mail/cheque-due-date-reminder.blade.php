<div>
    <p>Dear Accounts team,</p>
    <p>The following cheque's due date is about to be reached. Please arrange funds to avoid bouncing the cheque.</p>
    <ul>
        <li>Cheque No.: {{ $data['chequeNo'] }}</li>
        <li>Party Name: {{ $data['partyName'] }}</li>
        <li>Amount: {{ format_inr($data['amount']) }}</li>
        <li>Due Date: {{ $data['dueDate'] }}</li>
    </ul>
    <p>If the cheque is not to be paid, either talk to the party and ask them to send a photo of the cancelled cheque or
        initiate a stoppage of the cheque from the bank.</p>

    <p>"Timely payments ensure credibility in the market"</p>
    <p>
        Please reply to this mail with a confirmation of the action taken.
    </p>

    <p>Regards,<br>Admin</p>
</div>
