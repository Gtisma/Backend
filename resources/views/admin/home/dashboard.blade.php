@extends('admin.layouts.maindashboard')

@section('content')
                    <section class="r-section r-section--padded r-pt-0@xl">
                        <h2 class="sr">Welcome</h2>
                        <div class="r-grid r-grid--1-7-5@md r-grid--gap">
                            <div class="r-media-object">
                                <figure class="r-media-object_figure--adjust@md">
                                    <img src="{{$user->picture_url}}" alt="User image" class="r-avatar r-avatar--large-to-xlarge@md r-avatar--border--linen">
                                </figure>
                                <div class="r-media-object_body">
                                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">Welcome back,</span>
                                    <h3 class="r-m-0 r-headline--small r-gutter--bottom-quarter">{{$user->first_name}}!</h3>
                                    <p class="r-mb-0 r-fs-micro r-co-black r-opacity-08 r-maxwidth-xxs">
                                        Here's an overview of your GTISMA account. You're doing great!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="r-section r-section--padded r-pt-0">
                        <h2 class="sr">Loans & Investments Highlights</h2>
                        <div class="r-gutter r-edges--as-gutter r-gradient r-gradient--primary r-br--all"><div class="r-grid r-grid--gap r-grid--1-6@md r-al-i-c r-card-height--minimum">
                                <div class="r-w-100% r-tx-c@md r-gutter--half r-gutter--bottom-23rd@md-down r-border-right--as-divider@md r-border--light">
                                    <h3 class="r-m-0 r-co-white r-caps r-caps--nano r-opacity-07 r-fw-bold">Total Loan Balance</h3>
                                    <p class="r-mb-0 r-co-white r-format-amount r-money-format">
                                        897570.99
                                    </p>
                                    <p class="r-mb-0 r-co-white r-opacity-07 r-fw-medium r-fs-nano">
                                        Total from all loans taken.
                                    </p>
                                </div>
                                <div class="r-w-100% r-tx-c@md r-gutter--half">
                                    <h3 class="r-m-0 r-co-white r-caps r-caps--nano r-opacity-07 r-fw-bold">Total Current Returns</h3>
                                    <p class="r-mb-0 r-co-white r-format-amount r-money-format">
                                        963410.94
                                    </p>
                                    <p class="r-mb-0 r-co-white r-opacity-07 r-fw-medium r-d-flex r-al-i-c r-j-c-c@md r-fs-nano">
                                        From all investments up to date.
                                    </p>
                                </div>
                            </div></div>
                    </section>
                    <section class="r-section r-section--padded">
                        <h2 class="sr">Current Loans & Investments</h2>
                        <div class="r-grid r-grid--1-6@md r-grid--gap">
                            <div>
                                <div class="r-section-title">
                                    <h3 class="r-section-title_title">
                                        Current Loans
                                    </h3>
                                    <a href="/loans/" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                        <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg></a>
                                </div><ul class="r-none r-grid r-grid--gap r-grid--autosize"><li class="r-grid_item r-w-100% r-d-flex r-co-white">
                                        <a href="/loans/personal" class="r-none r-w-100% r-card r-card--literal r-gradient r-gradient--green">
                                            <div class="r-d-flex r-al-i-c r-j-c-sb r-mt-adjust--line-height">
                                                <p class="r-mb-0 r-co-white">
                                                    <span class="r-caps r-caps--nano r-fw-bold r-opacity-09">Personal</span>
                                                    <span class="r-d-block r-fs-nano r-tt-l r-opacity-07">
                            12 Mo.
                        </span>
                                                </p>
                                                <p class="r-mb-0 r-co-white r-progress-meter r-d-flex r-flex-dir-col r-al-i-c" role="progressbar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" data-value="10">
                                                        <path class="r-progress-meter_bg" d="M41 149.5a77 77 0 1 1 117.93 0"  fill="none"/>
                                                        <path class="r-progress-meter_meter" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350"/>
                                                    </svg>
                                                    <span class="r-d-flex r-al-i-bs r-progress-meter_explainer r-mt--h">
                            10 <sub>%</sub>
                            <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">
                                Paid
                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-big-number r-big-number--minimal r-card--literal_middle r-d-flex r-al-i-c r-j-c-c ">
                                                <p class="r-co-white r-big-number_number r-mb-0 r-d-flex r-al-i-c">
                        <span class="r-js-number">
                            200457.83
                        </span>
                                                </p>
                                            </div>
                                            <p class="r-card--literal_footer r-mb-0 r-co-white">
                    <span class="r-d-flex r-al-i-bs">
                        25 <sub>%</sub>
                        <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">
                            Interest per mo.
                        </span>
                    </span>
                                            </p>
                                        </a>
                                    </li><li class="r-grid_item r-w-100% r-d-flex r-co-white">
                                        <a href="/loans/business" class="r-none r-w-100% r-card r-card--literal r-gradient r-gradient--blue">
                                            <div class="r-d-flex r-al-i-c r-j-c-sb r-mt-adjust--line-height">
                                                <p class="r-mb-0 r-co-white">
                                                    <span class="r-caps r-caps--nano r-fw-bold r-opacity-09">Business</span>
                                                    <span class="r-d-block r-fs-nano r-tt-l r-opacity-07">
                            24 Mo.
                        </span>
                                                </p>
                                                <p class="r-mb-0 r-co-white r-progress-meter r-d-flex r-flex-dir-col r-al-i-c" role="progressbar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" data-value="45">
                                                        <path class="r-progress-meter_bg" d="M41 149.5a77 77 0 1 1 117.93 0"  fill="none"/>
                                                        <path class="r-progress-meter_meter" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350"/>
                                                    </svg>
                                                    <span class="r-d-flex r-al-i-bs r-progress-meter_explainer r-mt--h">
                            45 <sub>%</sub>
                            <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">
                                Paid
                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-big-number r-big-number--minimal r-card--literal_middle r-d-flex r-al-i-c r-j-c-c ">
                                                <p class="r-co-white r-big-number_number r-mb-0 r-d-flex r-al-i-c">
                        <span class="r-js-number">
                            13587996.83
                        </span>
                                                </p>
                                            </div>
                                            <p class="r-card--literal_footer r-mb-0 r-co-white">
                    <span class="r-d-flex r-al-i-bs">
                        15 <sub>%</sub>
                        <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">
                            Interest per mo.
                        </span>
                    </span>
                                            </p>
                                        </a>
                                    </li></ul></div>
                            <div>
                                <div class="r-section-title">
                                    <h3 class="r-section-title_title">
                                        Current Investments
                                    </h3>
                                    <a href="/investments/" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                        <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg></a>
                                </div><ul class="r-none r-grid r-grid--gap r-grid--autosize"><li class="r-grid_item r-w-100% r-d-flex">
                                        <a href="/investments/ian/" class="r-none r-w-100% r-card r-card--no-shadow r-card--border r-card--border--secondary r-card--literal r-d-flex r-flex-dir-col r-pb-0">
                                            <div class="r-grid r-grid--8-4 r-grid--gap">
                                                <h3 class="r-m-0 r-fs-micro">Investment Appreciation Note (IAN)</h3>
                                                <p class="r-mb-0 r-tx-c">
                                                    <span class="r-fs-small r-fw-bold r-co-green">12.56%</span>
                                                    <span class="r-caps r-caps--pico r-d-block r-tt-l r-opacity-07 r-fw-bold">
                            Per Annum
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-flex_main r-d-flex r-flex-dir-col r-al-i-c r-j-c-c">
                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">
                        Current Returns
                    </span>
                                                <p class="r-mb-0 r-co-black r-format-amount r-money-format">
                                                    24358875.78
                                                </p>
                                                <p class="r-mb-0 r-fw-medium r-fs-nano r-d-flex r-al-i-c">
                        <span class="r-co-green r-lh-0 r-icon--nano r-prefix--smaller"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 123.959 123.959" fill="currentColor" class="icon icon-triangle-up">
        <g>
            <path d="M66.18,29.742c-2.301-2.3-6.101-2.3-8.401,0l-56,56c-3.8,3.801-1.1,10.2,4.2,10.2h112c5.3,0,8-6.399,4.2-10.2L66.18,29.742   z" />
        </g>
    </svg></span>
                                                    <span class="r-opacity-07">
                            <span>
                                0.34% <span class="r-js-today"></span>
                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-caps r-caps--nano r-fw-bold r-gutter--half r-border-top r-tx-c r-co-secondary">
                                                View More
                                            </div>
                                        </a>
                                    </li><li class="r-grid_item r-w-100% r-d-flex">
                                        <a href="/investments/lin/" class="r-none r-w-100% r-card r-card--no-shadow r-card--border r-card--border--secondary r-card--literal r-d-flex r-flex-dir-col r-pb-0">
                                            <div class="r-grid r-grid--8-4 r-grid--gap">
                                                <h3 class="r-m-0 r-fs-micro">Lease Investment Note (LIN)</h3>
                                                <p class="r-mb-0 r-tx-c">
                                                    <span class="r-fs-small r-fw-bold r-co-green">6.56%</span>
                                                    <span class="r-caps r-caps--pico r-d-block r-tt-l r-opacity-07 r-fw-bold">
                            Per Annum
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-flex_main r-d-flex r-flex-dir-col r-al-i-c r-j-c-c">
                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">
                        Current Returns
                    </span>
                                                <p class="r-mb-0 r-co-black r-format-amount r-money-format">
                                                    4358875.78
                                                </p>
                                                <p class="r-mb-0 r-fw-medium r-fs-nano r-d-flex r-al-i-c">
                        <span class="r-co-danger r-lh-0 r-icon--nano r-prefix--smaller"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 123.959 123.958" fill="currentColor" class="icon icon-triangle-down">
        <g>
            <path d="M117.979,28.017h-112c-5.3,0-8,6.4-4.2,10.2l56,56c2.3,2.3,6.1,2.3,8.401,0l56-56   C125.979,34.417,123.279,28.017,117.979,28.017z" />
        </g>
    </svg></span>
                                                    <span class="r-opacity-07">
                            <span>
                                1.32% <span class="r-js-today"></span>
                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-caps r-caps--nano r-fw-bold r-gutter--half r-border-top r-tx-c r-co-secondary">
                                                View More
                                            </div>
                                        </a>
                                    </li></ul></div>
                        </div>
                    </section><section class="r-section r-section--padded">
                        <div class="r-content-area">
                            <div class="r-section-title">
                                <h2 class="r-section-title_title">
                                    Recent Transactions
                                </h2>
                                <a href="/transactions/" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                    <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <polyline points="12 5 19 12 12 19" />
                                    </svg></a>
                            </div>
                            <table class="responsive-table striped"><thead>
                                <tr><th>
                                        DATE
                                    </th><th>
                                        FROM
                                    </th><th>
                                        TO
                                    </th><th>
                                        PAYMENT TYPE
                                    </th><th>
                                        AMOUNT
                                    </th></tr>
                                </thead>
                                <tbody><tr class="r-status--issued">
                                    <td>
                                        Mar 01
                                    </td>
                                    <td>
                                        ADX Credit
                                    </td>
                                    <td>
                                        Kabolobari B. **6758

                                    </td>
                                    <td>
                                        Disbursement Push
                                    </td>
                                    <td class="r-format-amount">
                                        92635567.89
                                    </td>
                                </tr><tr class="r-status--failed">
                                    <td>
                                        Mar 30
                                    </td>
                                    <td>
                                        Kabolobari B. **6758
                                    </td>
                                    <td>
                                        ADX Credit

                                        <sup class="r-caps r-co-danger r-fw-bold">Failed</sup>

                                    </td>
                                    <td>
                                        Repayment Pull
                                    </td>
                                    <td class="r-format-amount">
                                        135567.89
                                    </td>
                                </tr><tr class="">
                                    <td>
                                        Apr 30
                                    </td>
                                    <td>
                                        Kabolobari B. **6758
                                    </td>
                                    <td>
                                        ADX Credit

                                    </td>
                                    <td>
                                        Repayment Pull
                                    </td>
                                    <td class="r-format-amount">
                                        135567.89
                                    </td>
                                </tr><tr class="r-status--failed">
                                    <td>
                                        May 30
                                    </td>
                                    <td>
                                        Kabolobari B. **6758
                                    </td>
                                    <td>
                                        ADX Credit

                                        <sup class="r-caps r-co-danger r-fw-bold">Failed</sup>

                                    </td>
                                    <td>
                                        Repayment Pull
                                    </td>
                                    <td class="r-format-amount">
                                        135567.89
                                    </td>
                                </tr><tr class="">
                                    <td>
                                        Jun 30
                                    </td>
                                    <td>
                                        Kabolobari B. **6758
                                    </td>
                                    <td>
                                        ADX Credit

                                    </td>
                                    <td>
                                        Repayment Pull
                                    </td>
                                    <td class="r-format-amount">
                                        760135567.89
                                    </td>
                                </tr></tbody>
                            </table>
                        </div>
                    </section>
@endsection
