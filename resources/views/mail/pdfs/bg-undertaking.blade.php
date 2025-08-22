<div style="padding: 0 50px;">
    <div style="border-top: 10px solid #333; border-bottom: 5px solid #f04e23;">
    </div>
    <div style="padding: 10px 0; font-family: sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0" style="width: 100%;">
            <tr>
                <!-- Left: Logo -->
                <td style="width: 50%; padding-left: 20px;">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/logo.png'))) }}"
                        alt="Volks Energie Logo" style="height: 60px;">
                </td>

                <!-- Right: Contact Info -->
                <td style="width: 50%; text-align: right; font-size: 10px; color: #333; padding-right: 20px;">
                    <div>
                        B-1/D8, 2nd floor,<br>
                        Mohan Cooperative Industrial Estate,<br>
                        New Delhi 110044
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/phone.png'))) }}"
                            alt="Phone" style="height: 12px; vertical-align: middle;">
                        +91 9650393636, +91 9654551781<br>
                        Accounts: +91 8882591733
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/email.png'))) }}"
                            alt="Email" style="height: 12px; vertical-align: middle;">
                        contact@volksenergie.in
                    </div>
                    <div>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('pdfimages/web.png'))) }}"
                            alt="Website" style="height: 12px; vertical-align: middle;">
                        www.volksenergie.in
                    </div>
                </td>
            </tr>
        </table>
        <hr />
    </div>
    <div>
        <div style="text-align: center">
            <h3>Undertaking for Open Ended BGs</h3>
        </div>

        <div style="margin-top: 20px">
            To,<br>
            Yes Bank Limited<br>
            Ground Floor, G1,G2,G3, Chiranjiv Tower-43,<br>
            Nehru Place, New Delhi-110019.
        </div>

        <p style="margin-top: 20px">
            We, <b>M/s Volks Energie Private Limited</b>, a company incorporated under the Companies Act, 1956 and
            having
            Registered Office at B1/D8 2nd Floor, Mohan Cooperative Industrial Estate, New Delhi-110044 (hereinafter
            referred to as
            "Company") in consideration of your issuing/ having issued Bank Guarantee No. _________________________ for
            Rs
            {{ format_inr($data['bg_amt']) }} (Rupees Only) in favor of <b>{{ $data['bg_favour'] }}</b> ("said Deed")
            pursuant to Bank Guarantee Facilities sanctioned to us vide your facility ref. no
            BB/2307200147/10082023/002932
            dated 10/08/2023 ("Facility Letter").
        </p>

        <p>
            We confirm that we are fully aware of the risks associated with issuance of the bank guarantee/indemnity as
            per
            attached format attached and the request for its issuance had been made after fully appreciating and
            understanding the risks and the open-ended nature of the same. We also understand that the liability and the
            validity period of the Bank Guarantee/Indemnity issued in favor of <b>{{ $data['bg_favour'] }}</b> as per
            the
            format enclosed is not specific and hence, our liability is open ended.
        </p>

        <p>
            In view of the aforementioned, we hereby irrevocably and unconditionally agree and undertake as follows:
        </p>

        <ol style="margin-left: 20px">
            <li>To return the said Deed on <b>{{ date('d-m-Y', strtotime($data['bg_claim'])) }}</b> to the Bank for
                cancellation.</li>
            <li>In the event of our failing to return the said Deed on
                <b>{{ date('d-m-Y', strtotime($data['bg_claim'])) }}</b>, we hereby undertake to deposit with
                you cash equivalent to 100% of the amount mentioned in the said Deed.
            </li>
            <li>We hereby agree and confirm that it shall be your sole discretion whether to renew/ extend the said
                Deed.
            </li>
            <li>Request for renewal/ extension of said Deed shall be submitted at least 30 days prior to the expiry of
                the
                said Deed.</li>
            <li>We hereby further agree and undertake to pay you guarantee commission for the period for which the said
                Deed remain in force.</li>
            <li>To pay all amounts claimed by the beneficiary of the Bank Guarantee/Indemnity together with charges,
                costs,
                expenses etc if any claimed by the bank on invocation of the Bank guarantee/Indemnity.</li>
            <li>To honour all claims made under the Bank Guarantee/Indemnity even after validity period if any since we
                understand that claim under an indemnity can be made at any time unless the same is expressly revoked by
                the
                beneficiary.</li>
        </ol>

        <p>
            We hereby further agree and confirm that the provisions of this undertaking may be enforced against us by
            specific performance notwithstanding any other right or remedy available to you under any law.
        </p>

        <p>
            This Undertaking shall be governed by laws of India and courts of <b>Delhi</b> shall have the non-exclusive
            jurisdiction.
        </p>

        <p>
            In witness whereof the Company has affixed its common seal hereunto on
            <b>{{ \Carbon\Carbon::parse($data['date'])->format('jS \d\a\y \o\f M Y') }}</b>, at
            <b>{{ 'Nehru Place, New Delhi-110019' }}</b>.
        </p>

        <p style="font-weight: bold;">
            The Common Seal of <b>Volks Energie Private Limited</b> has pursuant to the Resolution of its Board of
            Directors
            passed in that behalf on the
            <b>{{ \Carbon\Carbon::parse($data['date'])->format('jS \d\a\y \o\f M Y') }}</b>
            hereunto been affixed in the presence of Mr. Piyush Goyal authorized officer who has signed these presents
            in
            token thereof.
        </p>
    </div>
</div>
