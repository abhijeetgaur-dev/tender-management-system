<div>
    <p>Dear {{ $data['assignee'] }},</p>
    <p>
        The status of the Tender no. {{ $data['tenderNo'] }}, project name {{ $data['projectName'] }}, is
        {{ $data['status'] }}. Please update the status of the EMD submitted against the tender using the form below or
        your dashboard.
    </p>

    <p>
        <a href="{{ $data['link'] }}" class="btn btn-primary">Update EMD Status</a>
    </p>

    <p>
        Regards,<br>
        {{ $data['cooName'] }}
    </p>
</div>
