<div>
    <p>Dear {{ $data['tl_name'] }},</p>

    <p>
        The TQ could not be submitted for {{ $data['tender_name'] }} ({{ $data['tender_no'] }}).
        The TQ due date and time was {{ $data['tq_due_date_time'] }}.
    </p>

    <p>
        Reason for missing the TQ: {{ $data['reason_missing'] }}
    </p>

    <p>
        What would I do to ensure this is not repeated: {{ $data['would_repeated'] }}
    </p>

    <p>
        Any improvements needed in the TMS system, to help you avoid making same mistake again:
        {{ $data['tms_system'] }}
    </p>

    <p>“We learn from our mistakes and move ahead”</p>

    <p>
        Best Regards,<br>
        {{ $data['te_name'] }}
    </p>
</div>
