@extends('layouts.master')

@section('content')
<br><br>
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="relative col-span-12 overflow-hidden card 2xl:col-span-8 bg-slate-900">
            <div class="absolute inset-0">
                <!-- SVG Background -->
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
                    </defs>
                    <symbol id="SvgjsSymbol1007">
                        <use xlink:href="#SvgjsPath1001" x="30" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                        <use xlink:href="#SvgjsPath1002" x="30" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                    </symbol>
                </svg>
            </div>
            <div class="relative card-body">
                <div class="grid items-center grid-cols-12">
                    <div class="col-span-12 lg:col-span-8 2xl:col-span-7">
                        <h5 class="mb-3 font-normal tracking-wide text-slate-200"> Welcome,
                            {{ Auth::check() ? Auth::user()->name : 'Guest' }} 🎉
                        </h5>
                        <p class="mb-5 text-slate-400">
                            Here, you can view, manage, and take action on building applications efficiently. The dashboard provides a detailed overview of the pending applications and lets you make informed decisions.
                        </p>
                    </div>
                    <div class="hidden col-span-12 2xl:col-span-3 lg:col-span-2 lg:col-start-11 2xl:col-start-10 lg:block">
                        <img src="{{ asset('assets/images/home.jpg') }}" alt="Dashboard" class="h-40 ltr:2xl:ml-auto rtl:2xl:mr-auto">

                    </div>
                </div>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4 mt-6">
            @forelse ($applications as $application)
            <div class="card">
                <div class="card-body">
                    <div class="relative flex items-center justify-center mx-auto text-lg rounded-full size-16 bg-slate-100 dark:bg-zink-600">
                        <span class="text-xl font-bold text-slate-700 dark:text-zink-100">
                            {{ strtoupper(substr($application->user->name ?? 'A', 0, 1)) }}
                        </span>
                        <span class="absolute bg-green-400 border-2 border-white rounded-full size-3 dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                    </div>
                    <div class="mt-4 text-center">
                        <h5 class="mb-1 text-16"><a href="javascript:void(0);">Status: {{ $application->status }}</a></h5>
                        <p class="mb-3 text-slate-500 dark:text-zink-200"> Name: {{ $application->user->name ?? 'N/A' }}</p>
                        <p class="mb-3 text-slate-500 dark:text-zink-200">Email: {{ $application->user->email ?? 'No Email' }}</p>
                        <p class="mb-3 text-slate-500 dark:text-zink-200">Phone: {{ $application->phone }}</p>
                        <p class="text-slate-500 dark:text-zink-200">Address: {{ $application->address }}</p>
                        <p class="text-slate-500 dark:text-zink-200">Applied: {{ $application->applied_at->format('M d, Y') }}</p>
                    </div>

                    <div class="flex flex-col gap-2 mt-5">

                        <!-- Document Download Buttons -->

                        @php
                        $documents = json_decode($application->documents, true);
                        @endphp
                        @if($documents)
                        @foreach ($documents as $document)

                        <a href="{{ route('admin.download', basename($document['path'])) }}" class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:ring-custom-400/20 grow">

                            <i data-lucide="download" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Download {{ $document['name'] ?? 'Document' }}</span>
                        </a>
                        @endforeach
                        @else
                        <p class="text-center text-slate-500 dark:text-zink-200">No documents available.</p>
                        @endif

                        <!-- Status Update Form -->
                        <form action="{{ route('admin.application.update-status', $application->id) }}" method="POST" class="flex gap-2">
                            @csrf
                            <select name="status" class="form-select w-full rounded border border-slate-300 dark:border-zink-500" onchange="this.form.submit()">
                                <option value="Submitted" {{ $application->status === 'Submitted' ? 'selected' : '' }}>Submitted</option>
                                <option value="Under Review" {{ $application->status === 'Under Review' ? 'selected' : '' }}>Under Review</option>
                                <option value="Approved" {{ $application->status === 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ $application->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center col-span-full text-slate-500 dark:text-zink-200">No applications found.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
