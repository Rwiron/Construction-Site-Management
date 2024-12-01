@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <br>

            <div class="mx-auto mb-16 text-center xl:w-2/5">
                <h4 class="mb-2">Welcome to Our Platform</h4>
                <p class="text-slate-500 dark:text-zink-200">
                    Experience effortless building permit solution. Explore our features designed to simplify workflows, enhance accuracy, and ensure your data's security. Let's get started!
                </p>
            </div>



            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4">
                <div class="card">
                    <div class="!px-6 card-body flex flex-col h-full">
                        <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                            <i data-lucide="map-pin" class="text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                        </div>
                        <div class="mt-5 text-center">
                            <h6 class="mb-2 text-16">Our Main Office</h6>
                            <p class="mb-5 text-slate-500 dark:text-zink-200">501, Rwanda, Kigali, Kicukiro, Kimihurura - KN-111</p>

                        </div>
                        <div class="mt-auto text-center">
                            <a href="#!" class="transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400">Visit Website <i data-lucide="move-right" class="inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="!px-6 card-body flex flex-col h-full">
                        <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                            <i data-lucide="shopping-bag" class="text-purple-500 fill-purple-100 dark:fill-purple-500/20"></i>
                        </div>
                        <div class="mt-5 text-center">
                            <h6 class="mb-2 text-16">IT Team Support</h6>
                            <p class="mb-5 text-slate-500 dark:text-zink-200">itbms@info.com</p>

                        </div>
                        <div class="mt-auto text-center">
                            <a href="#!" class="transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400">Sales Support <i data-lucide="move-right" class="inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="!px-6 card-body flex flex-col h-full">
                        <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                            <i data-lucide="compass" class="text-orange-500 fill-orange-100 dark:fill-orange-500/20"></i>
                        </div>
                        <div class="mt-5 text-center">
                            <h6 class="mb-2 text-16">Help & Support</h6>
                            <p class="mb-1 text-slate-500 dark:text-zink-200">bms@support.com</p>
                            <p class="mb-5 text-slate-500 dark:text-zink-200">www.bms.com</p>

                        </div>
                        <div class="mt-auto text-center">
                            <a href="#!" class="transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400">Contact Support <i data-lucide="move-right" class="inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="!px-6 card-body flex flex-col h-full">
                        <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                            <i data-lucide="user-square" class="text-custom-500 fill-custom-100 dark:fill-custom-500/20"></i>
                        </div>
                        <div class="mt-5 text-center">
                            <h6 class="mb-2 text-16">Email & Phone</h6>
                            <p class="mb-1 text-slate-500 dark:text-zink-200">bms@info.com</p>
                            <p class="mb-5 text-slate-500 dark:text-zink-200">(0780) 586 2588</p>

                        </div>
                        <div class="mt-auto text-center">
                            <a href="#!" class="transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400">Visit Portfolio <i data-lucide="move-right" class="inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end grid-->

            <div class="mt-10">
                <!-- Guiding Steps Section -->
                <div class="mx-auto mb-16 text-center xl:w-2/5">
                    <h4 class="mb-4 text-2xl font-bold text-custom-500">How to Submit and Track Documents</h4>
                    <p class="text-slate-500 dark:text-zink-200">
                        Follow these simple steps to ensure your documents are submitted and tracked efficiently.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <!-- Step 1 -->
                    <div class="card">
                        <div class="card-body flex flex-col items-center text-center">
                            <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                                <i data-lucide="upload" class="text-blue-500 fill-blue-100 dark:fill-blue-500/20"></i>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 text-16 font-semibold">Step 1: Upload Your Documents</h6>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">
                                    Use the "Upload" section to securely submit your documents in PDF or Word format.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="card">
                        <div class="card-body flex flex-col items-center text-center">
                            <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                                <i data-lucide="eye" class="text-purple-500 fill-purple-100 dark:fill-purple-500/20"></i>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 text-16 font-semibold">Step 2: Review Your Submission</h6>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">
                                    Ensure all details are accurate before finalizing your document submission.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="card">
                        <div class="card-body flex flex-col items-center text-center">
                            <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                                <i data-lucide="check-circle" class="text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 text-16 font-semibold">Step 3: Track Your Status</h6>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">
                                    Monitor the progress of your document from "Submitted" to "Approved."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="card">
                        <div class="card-body flex flex-col items-center text-center">
                            <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                                <i data-lucide="bell" class="text-orange-500 fill-orange-100 dark:fill-orange-500/20"></i>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 text-16 font-semibold">Step 4: Notifications</h6>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">
                                    Receive instant updates on your document's progress via email or dashboard notifications.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="card">
                        <div class="card-body flex flex-col items-center text-center">
                            <div class="flex items-center justify-center mx-auto text-xl bg-white rounded-full shadow size-16 dark:bg-zink-600 -mt-14">
                                <i data-lucide="help-circle" class="text-red-500 fill-red-100 dark:fill-red-500/20"></i>
                            </div>
                            <div class="mt-5">
                                <h6 class="mb-2 text-16 font-semibold">Step 5: Contact Support</h6>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">
                                    If you encounter issues, our support team is available to assist you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End page-wrapper -->
</div>

@endsection
