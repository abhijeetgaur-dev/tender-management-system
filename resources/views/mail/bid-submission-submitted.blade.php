<div>
    <p>Dear {{ $data['tlName'] }},</p>

    <p>The bid has been submitted for {{ $data['tenderName'] }}. Please find attached the file bidding price and proof
        of Tender submission.</p>
    <p>The tender due date and time was {{ $data['dueDate'] }}</p>
    <p>The bidding date and time was {{ $data['bidSubmissionDate'] }}.</p>
    <p>We submitted the bid {{ $data['timeBeforeDeadline'] }} before the bid submission deadline.</p>

    <p>“We leverage our team work to create results.”</p>

    <p>Best Regards,<br>
        {{ $data['teName'] }}</p>

</div>
