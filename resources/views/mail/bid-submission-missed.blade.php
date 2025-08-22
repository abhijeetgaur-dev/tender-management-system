<div>
    <p>Dear {{ $data['tl_name'] }},</p>

    <p>
        The bid could not be submitted for {{ $data['tender_name'] }}.
        The tender due date and time was {{ $data['due_date_time'] }}.
    </p>

    <p>Reason for missing the tender:</p>
    <p>{{ $data['reason'] }}</p>

    <p>What would I do to ensure this is not repeated:</p>
    <p>{{ $data['prevention'] }}</p>

    <p>Any improvements needed in the TMS system, to help you avoid making the same mistake again:</p>
    <p>{{ $data['tms_improvements'] }}</p>

    <p>“We learn from our mistakes and move ahead”</p>

    <p>Best Regards,<br>{{ $data['te_name'] }}</p>
</div>
