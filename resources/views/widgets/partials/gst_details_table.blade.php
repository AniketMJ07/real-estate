@if($gstData)
    <h6 class="text-muted my-2">Verify GST Details</h6>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>GSTIN</th>
                    <td>{{ $gstData->gstin }}</td>
                </tr>
                <tr>
                    <th>Legal Name</th>
                    <td>{{ $gstData->lgnm }}</td>
                </tr>
                <tr>
                    <th>Trade Name</th>
                    <td>{{ $gstData->tradeNam }}</td>
                </tr>
                <tr>
                    <th>Firm Type</th>
                    <td>{{ $gstData->ctb }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td class="text-wrap">{{ $gstData->pradr->adr }}</td>
                </tr>
                <tr>
                    <th>Registration Type</th>
                    <td>{{ $gstData->dty }}</td>
                </tr>
                <tr>
                    <th>GST Status</th>
                    <td>{{ $gstData->sts }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endif