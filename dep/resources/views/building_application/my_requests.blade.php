@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">My Applications</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ url('dashboard') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">My Applications</li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
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
                            <p class="mb-3 text-slate-500 dark:text-zink-200">Name: {{ $application->user->name ?? 'N/A' }}</p>
                            <p class="mb-3 text-slate-500 dark:text-zink-200">Email: {{ $application->user->email ?? 'No Email' }}</p>
                            <p class="mb-3 text-slate-500 dark:text-zink-200">Phone: {{ $application->phone }}</p>
                            <p class="text-slate-500 dark:text-zink-200">Address: {{ $application->address }}</p>
                            <p class="text-slate-500 dark:text-zink-200">Applied: {{ $application->applied_at->format('M d, Y') }}</p>
                            <p class="mb-3 text-slate-500 dark:text-zink-200">Role: {{ Auth::user()->role->name }}</p>
                        </div>

                        <div class="flex flex-col gap-2 mt-5">
                            @php
                            $documents = json_decode($application->documents, true);
                            @endphp
                            @if($documents)
                            @foreach ($documents as $document)

                            <a href="{{ route('building_application.download', basename($document['path'])) }}" class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:ring-custom-400/20 grow">
                                <i data-lucide="download" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Download {{ $document['name'] ?? 'Document' }}</span>
                            </a>
                            @endforeach
                            @else
                            <p class="text-center text-slate-500 dark:text-zink-200">No documents available.</p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center col-span-full text-slate-500 dark:text-zink-200">No applications found.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
