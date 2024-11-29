@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <!-- Header -->
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">Settings: Teams & Positions</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Settings
                    </li>
                </ul>
            </div>

            <!-- Teams & Positions -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5">
                <!-- Teams Section -->
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center gap-3 mb-4">
                            <h6 class="text-15 grow">Teams</h6>
                            <div class="shrink-0">
                                <a href="#!" data-modal-target="addTeamModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                                    <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Team</span>
                                </a>
                            </div>
                        </div>
                        <div class="-mx-5 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right">
                                    <tr class="bg-slate-100 dark:bg-zink-600">
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Name</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Description</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td class="px-3.5 py-2.5">{{ $team->name }}</td>
                                        <td class="px-3.5 py-2.5">{{ $team->description }}</td>
                                        <td class="px-3.5 py-2.5">
                                            <div class="flex gap-3">
                                                {{-- <a href="#!" data-id="{{ $team->id }}" data-name="{{ $team->name }}" data-description="{{ $team->description }}" data-modal-target="editTeamModal" class="edit-team-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                    <i data-lucide="pencil" class="size-4"></i>
                                                </a> --}}
                                                <form action="{{ route('settings.team.destroy', $team) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-team-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                        <i data-lucide="trash-2" class="size-4"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Positions Section -->
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center gap-3 mb-4">
                            <h6 class="text-15 grow">Positions</h6>
                            <div class="shrink-0">
                                <a href="#!" data-modal-target="addPositionModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                                    <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Position</span>
                                </a>
                            </div>
                        </div>
                        <div class="-mx-5 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right">
                                    <tr class="bg-slate-100 dark:bg-zink-600">
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Name</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Description</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($positions as $position)
                                    <tr>
                                        <td class="px-3.5 py-2.5">{{ $position->name }}</td>
                                        <td class="px-3.5 py-2.5">{{ $position->description }}</td>
                                        <td class="px-3.5 py-2.5">
                                            <div class="flex gap-3">
                                                {{-- <a href="#!" data-id="{{ $position->id }}" data-name="{{ $position->name }}" data-description="{{ $position->description }}" data-modal-target="editPositionModal" class="edit-position-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                    <i data-lucide="pencil" class="size-4"></i>
                                                </a> --}}
                                                <form action="{{ route('settings.position.destroy', $position) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-position-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                        <i data-lucide="trash-2" class="size-4"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Team Modal -->
    <div id="addTeamModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Create Team</h5>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('settings.team.store') }}" method="POST" class="modal-content">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="TeamName" class="inline-block mb-2 text-base font-medium">Team Name</label>
                            <input type="text" name="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Team Name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="Description" class="inline-block mb-2 text-base font-medium">Description</label>
                            <textarea name="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Position Modal -->
    <div id="addPositionModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Create Position</h5>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('settings.position.store') }}" method="POST" class="modal-content">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="TeamName" class="inline-block mb-2 text-base font-medium">Team Name</label>
                            <input type="text" name="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Position Name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="description" class="inline-block mb-2 text-base font-medium">Description</label>
                            <textarea name="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        {{-- <button type="submit">Add</button> --}}
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
