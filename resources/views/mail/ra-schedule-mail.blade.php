<div>
    <p>Dear {{ $data['tl_name'] }},</p>
    <p>
        The RA for Tender No. {{ $data['tender_no'] }}, Tender Name {{ $data['tender_name'] }}, is scheduled. The
        timelines are mentioned below. Please talk to the OEM to get the best pricing and review the costing sheet
        before the RA starts.
    </p>
    <p>RA Start Time: {{ $data['ra_start_time'] }}</p>
    <p>RA End Time: {{ $data['ra_end_time'] }}</p>
    <p>
        RA starts in {{ $data['time_until_start'] }}. Please prepare yourself to participate in the RA.
    </p>
    <p>Regards,<br>Coordinator<br>Volks Energie Pvt. Ltd.</p>
</div>
