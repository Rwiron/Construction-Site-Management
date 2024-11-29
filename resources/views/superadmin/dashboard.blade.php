@extends('layouts.master')

@section('content')
{{-- <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="relative col-span-12 overflow-hidden card 2xl:col-span-8 bg-slate-900">
            <div class="absolute inset-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-100" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="1440" height="560" preserveaspectratio="none" viewbox="0 0 1440 560">
                    <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
                        <use xlink:href="#SvgjsSymbol1007" x="0" y="0"></use>
                        <use xlink:href="#SvgjsSymbol1007" x="720" y="0"></use>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1000">
                            <rect width="1440" height="560" fill="#ffffff"></rect>
                        </mask>
                        <path d="M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z" id="SvgjsPath1003"></path>
                        <path d="M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z" id="SvgjsPath1004"></path>
                        <path d="M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z" id="SvgjsPath1001"></path>
                        <path d="M2 -2 L-2 2z" id="SvgjsPath1005"></path>
                        <path d="M6 -6 L-6 6z" id="SvgjsPath1002"></path>
                        <path d="M30 -30 L-30 30z" id="SvgjsPath1006"></path>
                    </defs>
                    <symbol id="SvgjsSymbol1007">
                        <use xlink:href="#SvgjsPath1001" x="30" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="30" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="30" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="30" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="30" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="30" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="30" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="30" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="30" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="30" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="90" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1004" x="90" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="90" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="90" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="90" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="150" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="150" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="150" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="150" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="150" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="150" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3">
                        </use>
                        <use xlink:href="#SvgjsPath1004" x="150" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="150" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="150" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="150" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="210" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="210" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="210" y="150" stroke="rgba(32, 43, 61, 1)" stroke-width="3">
                        </use>
                        <use xlink:href="#SvgjsPath1002" x="210" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="210" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="210" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="210" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="210" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="210" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1003" x="210" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="270" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="270" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="270" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="270" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="270" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="270" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="270" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1002" x="270" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="270" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="270" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="330" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="330" y="90" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1002" x="330" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="330" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="330" y="270" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1001" x="330" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="330" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="330" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="330" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="330" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1004" x="390" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="390" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="390" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="390" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="390" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="390" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="390" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="390" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="390" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="390" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1004" x="450" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="450" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="450" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="450" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="450" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="510" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="510" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="510" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="510" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="510" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1004" x="510" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="510" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1001" x="510" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="510" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="510" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="570" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="570" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="570" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="570" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="570" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="570" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="570" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1005" x="570" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="570" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="570" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="630" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="630" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="630" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="630" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="630" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="630" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1002" x="630" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="630" y="450" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1001" x="630" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="630" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="690" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="690" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="690" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="690" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1005" x="690" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1001" x="690" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="690" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1003" x="690" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1006" x="690" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                        <use xlink:href="#SvgjsPath1003" x="690" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                    </symbol>
                </svg>
            </div>
            <div class="relative card-body">
                <div class="grid items-center grid-cols-12">
                    <div class="col-span-12 lg:col-span-8 2xl:col-span-7">
                        <h5 class="mb-3 font-normal tracking-wide text-slate-200"> Welcome,
                            {{ Auth::check() ? Auth::user()->name : 'Guest' }} 🎉
</h5>
<p class="mb-5 text-slate-400">The Building Solution Management System offers a comprehensive dashboard to streamline property management, track maintenance requests, manage payments, and gain actionable insights through key metrics and visual analytics.</p>

<button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-500/20 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-500/20 dark:ring-custom-400/20">Explore
    Trends</button>
</div>
<div class="hidden col-span-12 2xl:col-span-3 lg:col-span-2 lg:col-start-11 2xl:col-start-10 lg:block">
    <img src="{{ asset('assets/images/dashboard.png') }}" alt="" class="h-40 ltr:2xl:ml-auto rtl:2xl:mr-auto">
</div>
</div>
</div>
</div>
<!--end col-->
</div>
</div> --}}

<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Hello</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboards</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        {{ Auth::user()->role->name }}
                    </li>
                </ul>
            </div>


            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <div class="col-span-12 md:order-1 xl:col-span-8 2xl:col-span-6">
                    <h5 class="mb-2">Welcome {{ Auth::check() ? Auth::user()->name : 'Guest' }} 🎉</h5>

                    <p class="mb-5 text-slate-500 dark:text-zink-200">Welcome to <a href="#!" class="underline text-slate-800 dark:text-zink-50"></a> The Building Solution Management System offers a comprehensive dashboard to streamline property management, track maintenance requests, manage payments, and gain actionable insights through key metrics and visual analytics. <a href="#!" class="text-red-500"></a></p>

                </div>
                <div class="col-span-12 md:order-2 xl:col-span-4 2xl:col-start-9 card">
                    <div class="p-4">
                        <div class="grid grid-cols-3">
                            <div class="px-4 text-center ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500 ltr:last:border-r-0 rtl:last:border-l-0">
                                <h6 class="mb-1 font-bold"><span class="counter-value" data-target="36"></span></h6>
                                <p class="text-slate-500 dark:text-zink-200">Absent</p>
                            </div>
                            <div class="px-4 text-center ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500 ltr:last:border-r-0 rtl:last:border-l-0">
                                <h6 class="mb-1 font-bold"><span class="counter-value" data-target="465"></span></h6>
                                <p class="text-slate-500 dark:text-zink-200">Attendance</p>
                            </div>
                            <div class="px-4 text-center ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500 ltr:last:border-r-0 rtl:last:border-l-0">
                                <h6 class="mb-1 font-bold"><span class="counter-value" data-target="50"></span></h6>
                                <p class="text-slate-500 dark:text-zink-200">Late</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-3 lg:col-span-6 2xl:col-span-3 card">
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-8 md:col-span-9">
                                <p class="text-slate-500 dark:text-slate-200">Total Employee</p>
                                <h5 class="mt-3 mb-4"><span class="counter-value" data-target="615">0</span></h5>
                            </div>
                            <div class="col-span-4 md:col-span-3">
                                <div id="totalEmployee" data-chart-colors='["bg-custom-500"]' dir="ltr" class="grow apex-charts"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-3">
                            <p class="text-slate-500 dark:text-slate-200 grow"><span class="font-medium text-green-500">15%</span> Increase</p>
                            <p class="text-slate-500 dark:text-slate-200">This Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-4 lg:col-span-6 2xl:col-span-3 card">
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-8 md:col-span-9">
                                <p class="text-slate-500 dark:text-slate-200">Total Application</p>
                                <h5 class="mt-3 mb-4"><span class="counter-value" data-target="174">0</span></h5>
                            </div>
                            <div class="col-span-4 md:col-span-3">
                                <div id="totalApplication" data-chart-colors='["bg-purple-500"]' dir="ltr" class="grow apex-charts"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-3">
                            <p class="text-slate-500 dark:text-slate-200 grow"><span class="font-medium text-green-500">26%</span> Increase</p>
                            <p class="text-slate-500 dark:text-slate-200">This Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-7 2xl:order-5 lg:col-span-12 2xl:col-span-6 2xl:row-span-2 card">
                    <div class="card-body">
                        <div class="flex items-center gap-2 MB-3">
                            <h6 class="mb-0 text-15 grow">Application Received</h6>
                            <div class="relative flex items-center gap-2 dropdown shrink-0">
                                <button type="button" class="flex items-center justify-center p-0 text-xs text-white size-8 btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">All</button>
                                <button type="button" class="flex items-center justify-center p-0 text-xs transition-all duration-200 ease-linear size-8 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:ring active:ring-sky-100 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:active:bg-sky-500 dark:active:text-white dark:ring-sky-400/20">1M</button>
                                <button type="button" class="flex items-center justify-center p-0 text-xs transition-all duration-200 ease-linear size-8 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:ring active:ring-sky-100 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:active:bg-sky-500 dark:active:text-white dark:ring-sky-400/20">6M</button>
                                <button type="button" class="flex items-center justify-center p-0 text-xs transition-all duration-200 ease-linear size-8 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:ring active:ring-sky-100 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:active:bg-sky-500 dark:active:text-white dark:ring-sky-400/20">1Y</button>
                            </div>
                        </div>
                        <div id="applicationReceivedChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]' dir="ltr"></div>
                    </div>
                </div>
                <div class="col-span-12 md:order-5 2xl:order-6 lg:col-span-6 2xl:col-span-3 card">
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-8 md:col-span-9">
                                <p class="text-slate-500 dark:text-slate-200">Hired Candidates</p>
                                <h5 class="mt-3 mb-4"><span class="counter-value" data-target="64">0</span></h5>
                            </div>
                            <div class="col-span-4 md:col-span-3">
                                <div id="hiredCandidates" data-chart-colors='["bg-green-500"]' dir="ltr" class="grow apex-charts"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-3">
                            <p class="text-slate-500 dark:text-slate-200 grow"><span class="font-medium text-red-500">05%</span> Increase</p>
                            <p class="text-slate-500 dark:text-slate-200">This Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-6 2xl:order-7 lg:col-span-6 2xl:col-span-3 card">
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-8 md:col-span-9">
                                <p class="text-slate-500 dark:text-slate-200">Rejected Candidates</p>
                                <h5 class="mt-3 mb-4"><span class="counter-value" data-target="110">0</span></h5>
                            </div>
                            <div class="col-span-4 md:col-span-3">
                                <div id="rejectedCandidates" data-chart-colors='["bg-red-500"]' dir="ltr" class="grow apex-charts"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-3">
                            <p class="text-slate-500 dark:text-slate-200 grow"><span class="font-medium text-red-500">16%</span> Increase</p>
                            <p class="text-slate-500 dark:text-slate-200">This Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-8 2xl:col-span-9 card">
                    <div class="card-body">
                        <div class="grid items-center grid-cols-1 gap-3 mb-5 xl:grid-cols-12">
                            <div class="xl:col-span-3">
                                <h6 class="text-15">Employee Performance</h6>
                            </div>
                            <!--end col-->
                            <div class="xl:col-span-4 xl:col-start-10">
                                <div class="flex gap-3">
                                    <div class="relative grow">
                                        <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                    <button type="button" class="bg-white border-dashed shrink-0 text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Export</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                        <div class="-mx-5 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                    <tr>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 w-10">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheckAll" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">ID</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Name</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Designation</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Performance</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Status</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheck1" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="#!">ST-1001</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <div class="bg-green-100 rounded-full size-10 dark:bg-green-500/20 shrink-0">
                                                    <img src="assets/images/avatar-10.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6>Kristen Redden</h6>
                                                    <p class="text-slate-500 dark:text-zink-200">kredden@starcode.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Designer</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 text-green-500">Good</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Active</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/20"><i data-lucide="pencil" class="size-4"></i></a>
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-red-500 dark:hover:text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheck2" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="#!">ST-1002</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <div class="rounded-full size-10 bg-sky-100 dark:bg-sky-500/20 shrink-0">
                                                    <img src="assets/images/avatar-2.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6>Howard George</h6>
                                                    <p class="text-slate-500 dark:text-zink-200">george@starcode.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">ASP.Net Developer</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 text-red-500">Low</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Active</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/20"><i data-lucide="pencil" class="size-4"></i></a>
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-red-500 dark:hover:text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheck3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="#!">ST-1003</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <div class="rounded-full size-10 bg-slate-100 dark:bg-zink-600 shrink-0">
                                                    <img src="assets/images/avatar-3.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6>Laura Carlson</h6>
                                                    <p class="text-slate-500 dark:text-zink-200">carlson15@starcode.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">React Developer</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 text-green-500">Good</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Active</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/20"><i data-lucide="pencil" class="size-4"></i></a>
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-red-500 dark:hover:text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheck4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="#!">ST-1004</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <div class="bg-yellow-100 rounded-full size-10 dark:bg-yellow-500/20 shrink-0">
                                                    <img src="assets/images/avatar-4.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6>Joseph Hawkins</h6>
                                                    <p class="text-slate-500 dark:text-zink-200">joseph@starcode.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Angular Developer</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 text-green-500">Good</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Disabled</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/20"><i data-lucide="pencil" class="size-4"></i></a>
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-red-500 dark:hover:text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheck5" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="#!">ST-1005</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <div class="bg-yellow-100 rounded-full size-10 dark:bg-yellow-500/20 shrink-0">
                                                    <img src="assets/images/avatar-5.png" alt="" class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6>Jeremy Clifford</h6>
                                                    <p class="text-slate-500 dark:text-zink-200">joseph@starcode.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">UI / UX Designer</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 text-red-500">Low</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Disabled</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/20"><i data-lucide="pencil" class="size-4"></i></a>
                                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 text-slate-500 hover:text-red-500 dark:hover:text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex flex-col items-center mt-5 md:flex-row">
                            <div class="mb-4 grow md:mb-0">
                                <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>19</b> Results</p>
                            </div>
                            <ul class="flex flex-wrap items-center gap-2 shrink-0">
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-9 lg:col-span-6 lg:row-span-2 xl:col-span-4 xl:row-span-2 2xl:row-span-2 2xl:col-span-3 card">
                    <div class="card-body">
                        <h6 class="mb-3 text-15 grow">Upcoming Scheduled</h6>
                        <div id="calendar" class="w-auto p-1"></div>
                        <div class="flex flex-col gap-4 mt-3">
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>28</h6> <span class="text-sm text-slate-500 dark:text-zink-200">July</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Meeting with Designer <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">09:57 AM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by Admin</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>08</h6> <span class="text-sm text-slate-500 dark:text-zink-200">June</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Developing Line Managers Conference <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">10:54 AM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by HR</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>17</h6> <span class="text-sm text-slate-500 dark:text-zink-200">July</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Airplane in Las Vegas <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">12:00 PM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by HR</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>11</h6> <span class="text-sm text-slate-500 dark:text-zink-200">Nov</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Hospitality Project Discuses</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by Admin</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>20</h6> <span class="text-sm text-slate-500 dark:text-zink-200">Nov</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Gartner Digital Workplace <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">03:49 PM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by HR</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>04</h6> <span class="text-sm text-slate-500 dark:text-zink-200">Dec</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">Nordic People Analytics <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">11:00 AM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by Admin</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>17</h6> <span class="text-sm text-slate-500 dark:text-zink-200">Jan</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">CIPD Festival of Work <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">01:29 PM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by HR</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex flex-col items-center justify-center border rounded-sm size-12 border-slate-200 dark:border-zink-500 shrink-0">
                                    <h6>03</h6> <span class="text-sm text-slate-500 dark:text-zink-200">Feb</span>
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1">HRO Today Forum <small class="inline-block px-2 font-medium border border-transparent rounded text-[11px] py-0.5 bg-slate-100 text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">02:15 PM</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Created by Admin</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 p-2 mt-3 rounded-md bg-custom-500">
                            <div class="shrink-0">
                                <img src="assets/images/support.png" alt="" class="h-24">
                            </div>
                            <div>
                                <h6 class="mb-1 text-15 text-custom-50">Need Help ?</h6>
                                <p class="text-custom-200">If you would like to learn more about transferring the license to a customer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-10 lg:col-span-6 xl:col-span-4 2xl:col-span-3 card">
                    <div class="card-body">
                        <div class="flex items-center gap-2 mb-3">
                            <h6 class="text-15 grow">Total Projects (247)</h6>
                            <div class="relative dropdown shrink-0">
                                <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="userDeviceDropdown" data-bs-toggle="dropdown">
                                    <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                </button>

                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="userDeviceDropdown">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Yearly</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="totalProjectChart" class="-ml-2 apex-charts" data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-green-400", "bg-red-400"]' dir="ltr"></div>
                    </div>
                </div>
                <div class="col-span-12 md:order-11 lg:col-span-6 xl:col-span-4 2xl:col-span-3 card">
                    <div class="!pb-0 card-body">
                        <h6 class="mb-3 text-15">Upcoming Interview</h6>
                    </div>
                    <div class="pb-5">
                        <div data-simplebar="" class="flex flex-col h-[350px] gap-4 px-5">
                            <div class="flex flex-col gap-3">
                                <div class="border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex flex-wrap items-center gap-3 p-2">
                                        <div class="rounded-full size-10 shrink-0">
                                            <img src="assets/images/user-1.jpg" alt="" class="h-10 rounded-full">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1"><a href="#!">James Krogman</a></h6>
                                            <p class="text-slate-500 dark:text-zink-200">james@starcode.com</p>
                                        </div>
                                        <div class="relative dropdown shrink-0">
                                            <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="interviewDropdown" data-bs-toggle="dropdown">
                                                <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                            </button>

                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="interviewDropdown">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 border-t border-slate-200 dark:border-zink-500">
                                        <div class="flex flex-col gap-3 md:items-center md:flex-row">
                                            <p class="text-slate-500 dark:text-zink-200 shrink-0"><i data-lucide="calendar" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">25 Nov</span></p>
                                            <p class="text-slate-500 dark:text-zink-200 grow"><i data-lucide="clock-4" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">02:41 PM</span></p>
                                            <span class="px-2.5 py-0.5 text-xs inline-block text-center font-medium shrink-0 rounded border bg-white border-green-400 text-green-500 dark:bg-zink-700 dark:border-green-700">Confirm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex flex-wrap items-center gap-3 p-2">
                                        <div class="rounded-full size-10 shrink-0">
                                            <img src="assets/images/user-2.jpg" alt="" class="h-10 rounded-full">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1"><a href="#!">Michael Scott</a></h6>
                                            <p class="text-slate-500 dark:text-zink-200">michaelScott@starcode.com</p>
                                        </div>
                                        <div class="relative dropdown shrink-0">
                                            <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="interviewDropdown2" data-bs-toggle="dropdown">
                                                <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                            </button>

                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="interviewDropdown2">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 border-t border-slate-200 dark:border-zink-500">
                                        <div class="flex flex-col gap-3 md:items-center md:flex-row">
                                            <p class="text-slate-500 dark:text-zink-200 shrink-0"><i data-lucide="calendar" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">05 Dec</span></p>
                                            <p class="text-slate-500 dark:text-zink-200 grow"><i data-lucide="clock-4" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">01:23 PM</span></p>
                                            <span class="px-2.5 py-0.5 text-xs text-center inline-block font-medium shrink-0 rounded border bg-white border-custom-400 text-custom-500 dark:bg-zink-700 dark:border-custom-700">Re-scheduled</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex flex-wrap items-center gap-3 p-2">
                                        <div class="rounded-full size-10 shrink-0">
                                            <img src="assets/images/user-3.jpg" alt="" class="h-10 rounded-full">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1"><a href="#!">Denise Ledford</a></h6>
                                            <p class="text-slate-500 dark:text-zink-200">ledford@starcode.com</p>
                                        </div>
                                        <div class="relative dropdown shrink-0">
                                            <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="interviewDropdown3" data-bs-toggle="dropdown">
                                                <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                            </button>

                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="interviewDropdown3">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 border-t border-slate-200 dark:border-zink-500">
                                        <div class="flex flex-col gap-3 md:items-center md:flex-row">
                                            <p class="text-slate-500 dark:text-zink-200 shrink-0"><i data-lucide="calendar" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">27 Nov</span></p>
                                            <p class="text-slate-500 dark:text-zink-200 grow"><i data-lucide="clock-4" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">11:59 PM</span></p>
                                            <span class="px-2.5 py-0.5 text-xs inline-block text-center font-medium shrink-0 rounded border bg-white border-sky-400 text-sky-500 dark:bg-zink-700 dark:border-sky-700">Scheduled</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex flex-wrap items-center gap-3 p-2">
                                        <div class="rounded-full size-10 shrink-0">
                                            <img src="assets/images/avatar-5.png" alt="" class="h-10 rounded-full">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1"><a href="#!">Gladys Smith</a></h6>
                                            <p class="text-slate-500 dark:text-zink-200">gap-4@starcode.com</p>
                                        </div>
                                        <div class="relative dropdown shrink-0">
                                            <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="interviewDropdown4" data-bs-toggle="dropdown">
                                                <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                            </button>

                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="interviewDropdown4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 border-t border-slate-200 dark:border-zink-500">
                                        <div class="flex flex-col gap-3 md:items-center md:flex-row">
                                            <p class="text-slate-500 dark:text-zink-200 shrink-0"><i data-lucide="calendar" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">07 Dec</span></p>
                                            <p class="text-slate-500 dark:text-zink-200 grow"><i data-lucide="clock-4" class="inline-block size-4 ltr:mr-1 rtl::ml-1"></i> <span class="align-middle">05:19 PM</span></p>
                                            <span class="px-2.5 py-0.5 text-xs inline-block text-center font-medium shrink-0 rounded border bg-white border-red-400 text-red-500 dark:bg-zink-700 dark:border-red-700">Cancelled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:order-12 lg:col-span-12 xl:col-span-8 2xl:col-span-3">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="relative col-span-12 card bg-gradient-to-r to-custom-100 dark:to-custom-500/20 from-transparent">
                            <div class="bg-[url('../images/hr-dashboard.png')] absolute inset-0 bg-cover opacity-30"></div>
                            <div class="relative card-body">
                                <div class="flex gap-3 mb-4">
                                    <div class="bg-purple-100 rounded-full size-10 dark:bg-purple-500/20 shrink-0">
                                        <img src="assets/images/avatar-6.png" alt="" class="h-10 rounded-full">
                                    </div>
                                    <div class="grow">
                                        <h6 class="mb-1">Nakisha Short</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Her Birthday Today</p>
                                    </div>
                                </div>
                                <button type="button" class="px-2 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Wish Her</button>
                            </div>
                            <img src="assets/images/birthday.png" alt="" class="absolute bottom-0 right-0">
                        </div>
                        <div class="col-span-12 card">
                            <div class="!pb-0 card-body">
                                <div class="flex items-center gap-2 mb-3">
                                    <h6 class="text-15 grow">Recent Payroll</h6>
                                    <div class="relative dropdown shrink-0">
                                        <button type="button" class="flex items-center justify-center w-[30px] h-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="userDeviceDropdown" data-bs-toggle="dropdown">
                                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                                        </button>

                                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="userDeviceDropdown">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Today</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Yesterday</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Thursday</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5">
                                <div data-simplebar="" class="flex flex-col h-[198px] gap-4 px-5">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-red-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-up-right" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Christopher Horn</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$145.32</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Richard Peters</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$4512.99</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">Pending</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">James Perez</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$879.99</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-red-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-up-right" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Myrtle Velez</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$978.14</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Cancelled</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Brad Castillo</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$412.59</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">Pending</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Robert Jump</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$666.99</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-red-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-up-right" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Myrtle Velez</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$978.14</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Cancelled</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-red-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-up-right" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Christopher Horn</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$145.32</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">Richard Peters</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$4512.99</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">Pending</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center justify-center text-green-500 rounded-full size-6 shrink-0">
                                                <i data-lucide="move-down-left" class="size-4"></i>
                                            </div>
                                            <div class="grow">
                                                <h6 class="mb-0">James Perez</h6>
                                            </div>
                                            <div class="shrink-0">
                                                <h6>$879.99</h6>
                                            </div>
                                            <div class="w-20 ltr:text-right rtl:text-left shrink-0">
                                                <span class="px-2.5 py-0.5 inline-block text-[11px] font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
