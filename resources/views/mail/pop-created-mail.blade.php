<div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
    <p>Dear Shivani/Accounts team,</p>

    <p>
        Please make the following payment via the payment gateway on the {{ $data['portal'] }} Portal against
        {{ $data['purpose'] }}
        @if ($data['purpose'] !== 'Others')
            for tender no. {{ $data['tender_no'] }}, Project Name {{ $data['tender_name'] }}.
            The due date and time of this tender is {{ $data['dueDate'] }}.
        @endif
    </p>
    <p>Payment options on the portal are:</p>
    <ul>
        <li>Amount: {{ $data['amount'] }}</li>
        <li>NetBanking Available: {{ $data['netbanking'] }}</li>
        <li>Yesbank Debit Card allowed: {{ $data['debit'] }}</li>
    </ul>

    <p>
        Please make the payment before the due date and time and share the UTR with us on time using the link below
        or your dashboard:
        {{ $data['link'] }}
    </p>
    <p>“Ensuring timely operations is the only source of growth”</p>
    <br>
    <b>Regards,</b><br>
    {{ $data['assignee'] }},<br>
    Approved by {{ $data['tlName'] }}
</div>
