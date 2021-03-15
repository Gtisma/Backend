<nav class="r-aside_inner r-gutter r-edges--left">
    <h2 class="sr">Main Navigation</h2>
    <ul class="r-none r-list"><li class="r-no-border r-mb-h">
            <a class="{{ (request()->is('admin')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin')}}"><svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="homeAlt2IconTitle" stroke="#52154e" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="miter" fill="none" color="#52154e" class="icon icon-home">
                    <title id="homeAlt2IconTitle">Home</title>
                    <path d="M2 12L5 9.3M22 12L19 9.3M19 9.3L12 3L5 9.3M19 9.3V21H5V9.3" />
                </svg><span class="r-suffix--wider r-list-item_text">Home</span>
            </a>
        </li>

        @if(Auth::user()->getRoleNames()[0] === 'superadmin')

            <li class="r-no-border r-mb-h">
                <a  class=" {{ (request()->is('admin/user/admin')) ? 'is-active' : '' }} r-list-item is-vertical-nav"  href="{{url('/admin/user/admin')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    <span class="r-suffix--wider r-list-item_text">View Admins</span>
                </a>
            </li>
            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/user/superadmin')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/user/superadmin')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    <span class="r-suffix--wider r-list-item_text">View Super Admins</span>
                </a>
            </li>
            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/user/addadmin')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/user/addadmin')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                    <span class="r-suffix--wider r-list-item_text"> New SuperAdmin</span>
                </a>
            </li>
            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/security')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/security')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    <span class="r-suffix--wider r-list-item_text">View Security Outfit</span>
                </a>
            </li>
            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/security/add')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/security/add')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    <span class="r-suffix--wider r-list-item_text">Add Security Outfit</span>
                </a>
            </li>

            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/crimetype')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/crimetype')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    <span class="r-suffix--wider r-list-item_text"> View Crime Types</span>
                </a>
            </li>
            <li class="r-no-border r-mb-h">
                <a class=" {{ (request()->is('admin/crimetype/add')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/crimetype/add')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    <span class="r-suffix--wider r-list-item_text"> Add Crime Type</span>
                </a>
            </li>

            <li class="r-no-border r-mb-h">
                <a class="{{ (request()->is('admin/rank/add')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/rank/add')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    <span class="r-suffix--wider r-list-item_text">Add ranks</span>
                </a>
            </li>
        @endif


        <li class="r-no-border r-mb-h">
            <a class="{{ (request()->is('admin/report/add')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/report/add')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                <span class="r-suffix--wider r-list-item_text">New Report</span>
            </a>
        </li>
        <li class="r-no-border r-mb-h">
            <a class="{{ (request()->is('admin/user/eyewitness')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/user/eyewitness')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#52154E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                <span class="r-suffix--wider r-list-item_text">View Eyewitness</span>
            </a>
        </li>

        <li class="r-no-border r-mb-h">
            <a class="{{ (request()->is('admin/report')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/report')}}"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" aria-labelledby="creditCardIconTitle" stroke="#52154e" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="miter" fill="none" color="#52154e" class="icon icon-payments">
                    <title id="creditCardIconTitle">View Reports</title>
                    <rect width="20" height="14" x="2" y="5" rx="2" />
                    <path d="M2,14 L22,14" />
                </svg><span class="r-suffix--wider r-list-item_text">View Reports</span>
            </a>
        </li>
       <li class="r-no-border r-mb-h">
            <a class=" {{ (request()->is('admin/report/pending')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/report/pending')}}"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" aria-labelledby="creditCardIconTitle" stroke="#52154e" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="miter" fill="none" color="#52154e" class="icon icon-payments">
                    <title id="creditCardIconTitle">Pending Report</title>
                    <rect width="20" height="14" x="2" y="5" rx="2" />
                    <path d="M2,14 L22,14" />
                </svg><span class="r-suffix--wider r-list-item_text"> Pending Reports</span>
            </a>
        </li>
        <li class="r-no-border r-mb-h">
            <a class=" {{ (request()->is('admin/report/approved')) ? 'is-active' : '' }} r-list-item is-vertical-nav" href="{{url('/admin/report/approved')}}"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" aria-labelledby="creditCardIconTitle" stroke="#52154e" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="miter" fill="none" color="#52154e" class="icon icon-payments">
                    <title id="creditCardIconTitle">Approved Reports</title>
                    <rect width="20" height="14" x="2" y="5" rx="2" />
                    <path d="M2,14 L22,14" />
                </svg><span class="r-suffix--wider r-list-item_text"> Approved Reports</span>
            </a>
        </li>
        </ul>
</nav>
