<div>
    <p>Dear {{ $data['tlName'] }},</p>

    <p>The TQ reply has been submitted for {{ $data['tender_name'] }} ({{ $data['tender_no'] }}). Please find attached the TQ reply documents and
        proof of TQ submission.</p>

    <p>The Tender due date and time was {{ $data['dueDate'] }}.</p>
    <p>The TQ reply date and time was {{ $data['tqSubmissionDate'] }}.</p>
    <p>We submitted the TQ {{ $data['timeBeforeDeadline'] }} before the bid submission deadline.</p>

    <p>“We leverage our team work to create results.”</p>

    <p>Best Regards,<br>{{ $data['teName'] }}</p>
</div>
