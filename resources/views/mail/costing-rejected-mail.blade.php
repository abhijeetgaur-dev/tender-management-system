<div>
    <p>Dear {{ $data['teName'] }},</p>
    <p>
        The costing of the Tender {{ $data['tenderName'] }}, has been checked and rejected for bidding. Please review
        the tender documents with a deep study of the technical documents, scope of work, and the quotations received
        from the vendor. Please submit the costing sheet immediately.
    </p>
    <p>Link: <a href="{{ $data['costingSheetLink'] }}">Costing sheet</a></p>
    <p>
        The tender due date and time is {{ $data['dueDate'] }} at {{ $data['dueTime'] }}. Please submit the tender at
        least 48 hours before the tender due date and time.
    </p>
    <p>Best Regards,<br>{{ $data['tlName'] }}</p>
</div>
