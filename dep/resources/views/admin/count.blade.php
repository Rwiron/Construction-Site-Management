@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16 font-bold">Application Statistics</h5>
                    <p class="text-sm text-gray-500">Overview of all application statuses.</p>
                </div>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-12 gap-4">
                <!-- Total Applications Card -->
                <div class="col-span-12 md:col-span-6 lg:col-span-3 card">
                    <div class="card-body text-center transition-transform transform hover:scale-105 duration-200 hover:shadow-lg hover:bg-blue-100">
                        <h6 class="text-gray-500">Total Applications</h6>
                        <h2 class="text-4xl font-bold text-blue-500">{{ $totalApplications }}</h2>
                    </div>
                </div>

                <!-- Approved Card -->
                <div class="col-span-12 md:col-span-6 lg:col-span-3 card">
                    <div class="card-body text-center transition-transform transform hover:scale-105 duration-200 hover:shadow-lg hover:bg-green-100">
                        <h6 class="text-gray-500">Approved</h6>
                        <h2 class="text-4xl font-bold text-green-500">{{ $approved }}</h2>
                    </div>
                </div>

                <!-- Under Review Card -->
                <div class="col-span-12 md:col-span-6 lg:col-span-3 card">
                    <div class="card-body text-center transition-transform transform hover:scale-105 duration-200 hover:shadow-lg hover:bg-yellow-100">
                        <h6 class="text-gray-500">Under Review</h6>
                        <h2 class="text-4xl font-bold text-yellow-500">{{ $underReview }}</h2>
                    </div>
                </div>

                <!-- Rejected Card -->
                <div class="col-span-12 md:col-span-6 lg:col-span-3 card">
                    <div class="card-body text-center transition-transform transform hover:scale-105 duration-200 hover:shadow-lg hover:bg-red-100">
                        <h6 class="text-gray-500">Rejected</h6>
                        <h2 class="text-4xl font-bold text-red-500">{{ $rejected }}</h2>
                    </div>
                </div>

                <!-- Submitted Card -->
                <div class="col-span-12 md:col-span-6 lg:col-span-3 card">
                    <div class="card-body text-center transition-transform transform hover:scale-105 duration-200 hover:shadow-lg hover:bg-purple-100">
                        <h6 class="text-gray-500">Submitted</h6>
                        <h2 class="text-4xl font-bold text-purple-500">{{ $submitted }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
