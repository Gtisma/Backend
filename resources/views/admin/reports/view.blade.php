@extends('admin.layouts.maindashboard')

@section('content')
    <section class="r-section r-section--padded">
        <div class="r-content-area">
            <div class="r-section-title">
                <h2 class="r-section-title_title">
                    Report List
                </h2>
            </div><table class="responsive-table striped"><thead>
                <tr><th>
                        DUE DATE
                    </th><th>
                        PRINCIPAL
                    </th><th>
                        INTEREST
                    </th><th>
                        TOTAL PAYABLE
                    </th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>
                        Aug 31, 2019
                    </td>
                    <td class="r-format-amount">
                        68278.78
                    </td>
                    <td class="r-format-amount">
                        20781.23
                    </td>
                    <td class="r-format-amount">
                        89060.01
                    </td>
                </tr><tr>
                    <td>
                        Sep 30, 2019
                    </td>
                    <td class="r-format-amount">
                        68278.78
                    </td>
                    <td class="r-format-amount">
                        14781.23
                    </td>
                    <td class="r-format-amount">
                        72060.01
                    </td>
                </tr><tr>
                    <td>
                        Oct 30, 2019
                    </td>
                    <td class="r-format-amount">
                        70278.78
                    </td>
                    <td class="r-format-amount">
                        12781.23
                    </td>
                    <td class="r-format-amount">
                        84060.01
                    </td>
                </tr><tr>
                    <td>
                        Nov 30, 2019
                    </td>
                    <td class="r-format-amount">
                        71278.78
                    </td>
                    <td class="r-format-amount">
                        10781.23
                    </td>
                    <td class="r-format-amount">
                        84060.01
                    </td>
                </tr></tbody>
            </table></div>
    </section>
@endsection
