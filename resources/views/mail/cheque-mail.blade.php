<div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
    <p>Dear Tushar/Accounts team,</p>

    <p>Please prepare the following cheque.</p>
    <p>The purpose of the cheque is {{ $data['purpose'] }},</p>

    <p>Please prepare the cheque using the details below:</p>
    <ul>
        <li>Party Name: {{ $data['partyName'] ?? '' }}</li>
        <li>Cheque Date: {{ $data['chequeDate'] ?? '' }}</li>
        <li>Amount: Rs. {{ $data['amount'] ?? '' }}</li>
    </ul>
    <p>This cheque is required within {{ $data['cheque_needs'] }} Hrs.</p>

    <p>
        Please make the cheque within the shared time limit and share the Soft copy of the cheque and the Positive pay
        confirmation, if applicable, with us on time using the link below:
        {{ $data['link'] }}.
    </p>

    <p>“Ensuring timely operations is the only source of growth”</p>
    <br>
    <b>Regards,</b><br>
    {{ $data['assignee'] }},<br>
    Approved by {{ $data['tlName'] }}
</div>
