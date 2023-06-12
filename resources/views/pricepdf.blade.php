<table border='1'>
                    <thead class="thead-inverse">
                        <tr>
                            <th>Date</th>
                            <th>Crop</th>
                            <th>Min Price</th>
                            <th>Max Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($beimazao as $startingAt => $prices)
                            <tr>
                                <td colspan="4">{{ \Carbon\Carbon::parse($startingAt)->format('d/m/Y') }}
                                </td>
                            </tr>
                            @foreach ($prices as $price)
                                <tr>
                                    <td scope="row"></td>
                                    <td>{{ $price->crop->name }}</td>
                                    <td>{{ $price->minprice }}</td>
                                    <td>{{ $price->maxprice }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>