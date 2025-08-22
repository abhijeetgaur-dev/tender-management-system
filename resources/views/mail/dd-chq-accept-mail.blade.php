<div style="font-family: Arial, sans-serif;">
    <p>Dear Kailash (Accounts team),</p>

    <p>The following cheque has been handed over to you.</p>
    <ul>
        <li>Cheque no.: {{ $data['cheque_no'] }}</li>
        <li>Due date: {{ $data['due_date'] }}</li>
        <li>Amount: {{ format_inr($data['amount']) }}</li>
    </ul>
    <p>Soft copy of Cheque (both sides)*: Attached</p>
    <p>Receiving of the cheque handed over*: Attached</p>

    <p>Please print the prefilled Bank Format (attached below) to make the following Demand Draft.</p>
    <p>The DD is required in {{ $data['time_limit'] }} hours.</p>

    <p>Please submit the request to the Bank using the details below:</p>
    <ul>
        <li>Beneficiary Name: {{ $data['beneficiary_name'] }}</li>
        <li>Payable at: {{ $data['payable_at'] }}</li>
        <li>Amount: Rs. {{ format_inr($data['amount']) }}</li>
    </ul>

    <p>Please courier the DD to the address below keeping sufficient margin for the courier delivery time to ensure the DD reaches before the due date and time and share the SOFT COPY of the DD and the Docket slip with us on time using the link below or your dashboard:</p>
    <p><a href="{{ $data['link'] }}">Accounts Form (DD)</a></p>
    <p>Courier Address:</p>
    <pre>{{ $data['courier_address'] }}</pre>

    <p>Please attach the covering letter with the DD and courier it. (Attached below) (Pending)</p>

    <p>“Ensuring timely operations is the only source of growth”</p>

    <p>
        Regards,<br>
        Shivani, <br>
        Approved by Management<br>
    </p>
</div>
