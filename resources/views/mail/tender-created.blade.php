<div>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #000;
        }
    </style>
    <p>Dear {{ $data['assignee'] }},</p>

    <p>Congratulations! A new tender has been assigned to you.</p>
    <ul>
        <li>Project Name : {{ $data['tenderName'] }}</li>
        <li>Tender is to be bid on: {{ $data['website'] }}</li>
        <li>Tender ID.: {{ $data['tenderNo'] }}</li>
        <li>Due Date & Time: {{ $data['due_date'] }}, {{ $data['due_time'] }}</li>
        <br>
        <li>Tender Value: {{ $data['tenderValue'] }}</li>
        <li>Tender Fees: {{ $data['tenderFees'] }}</li>
        <li>EMD: {{ $data['emd'] }}</li>
        <li>Remarks: {{ $data['remarks'] }}</li>
    </ul>

    <p>
        The tender documents are attached to the mail. Please submit the
        <a href="{{ $data['tenderInfoSheet'] }}">Tender Info Sheet</a>
        for your team leader's approval of the tender.
    </p>

    <p>If approved, please ensure that we bid the tender 48 hours before the due date and time.</p>
    <p>“Each new tender is an opportunity for growth”</p>

    <p>
        <b>Regards,</b><br>
        {{ $data['coordinator'] }}<br>
        Volks Energie Pvt. Ltd.
    </p>
</div>