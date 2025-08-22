<div>
    <p>Dear {{ $data['te_name'] }},</p>
    <p>
        The costing of the Tender {{ $data['tender_name'] }}, has been edited and approved for bidding. I have prepared
        the tender documents with the best of my understanding of the technical documents, the scope of work, and the
        quotations received from the vendor. Please submit the Tender using the costing sheet.
    </p>
    <p>Link: <a href="{{ $data['costing_sheet_link'] }}">Costing sheet</a></p>
    <ul style="list-style: none; margin: 0; padding: 0;">
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <strong>Tender Value (GST Inclusive):</strong> {{ $data['tender_value'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <strong>Approved Final Price (GST Inclusive):</strong> {{ $data['approved_final_price'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <strong>Remarks:</strong> {{ $data['remarks'] }}
        </li>
    </ul>
    <p>
        The tender due date and time is {{ $data['due_date_time'] }}. Please submit the tender at least 24 hours before
        the tender due date and time.
    </p>

    <p>Best Regards,<br>{{ $data['tl_name'] }}</p>
</div>
