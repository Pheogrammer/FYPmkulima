<style>
    h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
    }

    .footer {
        text-align: center;
        font-size: 12px;
        margin-top: 20px;
    }

    @media print {
        .footer {
            page-break-inside: avoid;
        }
    }
</style>
<h3>Agroinfo</h3>
<h3>Crop Prices</h3>
<h3>{{ $region->region->name }} Region</h3>
<table>
    <thead class="thead-inverse">
        <tr>
            <th>SN</th>
            <th>Crop</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody class="text-dark">

        @php
            $x = 1;
        @endphp
        @foreach ($beimazao as $price)
            <tr>
                <td>{{ $x }}</td>
                <td>{{ $price->crop->name }}</td>
                <td>Tzs {{  number_format($price->maxprice) }}</td>
                @php
                    $x++;
                @endphp
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Footer -->
<div class="footer">
    Generated on {{ date('Y-m-d') }}
</div>
