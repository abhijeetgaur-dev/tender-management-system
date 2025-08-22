<div>
    <p>Dear {{ $data['tlName'] }},</p>
    <p>
        The costing of the Tender {{ $data['tender_name'] }}, has been done and submitted for your approval. I have
        prepared the tender documents with the best of my understanding of the technical documents, the scope of work
        and the quotations received from the vendor.
    </p>
    <p>Please review the cost and approve it.</p>
    <p>
        Link: <a href="{{ $data['costingSheetLink'] }}">Costing sheet</a>
    </p>
    <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Tender Value (GST Inclusive)</span>
            {{ $data['tenderValue'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Final Price (GST Inclusive)</span>
            {{ $data['finalPrice'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Receipt (Pre GST)</span>
            {{ $data['receipt'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Budget (Pre GST)</span>
            {{ $data['budget'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Gross Margin %age</span>
            {{ $data['grossMargin'] }}
        </li>
        <li style="border-bottom: 1px solid #ddd; padding: 5px 0;">
            <span style="width: 30%; display: inline-block;">Remarks</span>
            {{ $data['remarks'] }}
        </li>
    </ul>
    <p>The tender due date and time is {{ $data['dueDate'] }}, {{ $data['dueTime'] }}. Please approve at least 48 hours
        before the tender due date and time.</p>

    <p>Best Regards,</p>
    <p>{{ $data['teName'] }}</p>
</div>
