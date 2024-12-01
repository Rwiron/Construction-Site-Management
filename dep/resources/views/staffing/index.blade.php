@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <!-- Page Header -->
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">Staff Salaries Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Staff Management
                    </li>
                </ul>
            </div>

            <!-- Table Card -->
            <div class="card" id="staffTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Staff Members (<b class="total-staff">{{ $staff->count() }}</b>)</h6>
                        <div class="shrink-0">
                            <a href="#!" data-modal-target="addStaffModal" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">
                                <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Staff</span>
                            </a>
                        </div>
                    </div>

                    <!-- Staff Table -->
                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">

                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Name</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Email</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Team</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Position</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Salary</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Status</th>

                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staff as $member)
                                <tr>
                                    <td class="px-3.5 py-2.5">{{ $member->user->name }}</td>
                                    <td class="px-3.5 py-2.5">{{ $member->user->email }}</td>
                                    <td class="px-3.5 py-2.5">{{ $member->team->name ?? 'N/A' }}</td>
                                    <td class="px-3.5 py-2.5">{{ $member->position->name ?? 'N/A' }}</td>
                                    <td class="px-3.5 py-2.5">{{ $member->salary }}</td>
                                    <td class="px-3.5 py-2.5">{{ $member->status }}</td>
                                    <td class="px-3.5 py-2.5">
                                        <div class="flex gap-3">
                                            <a href="#!" data-id="{{ $member->id }}" data-user-id="{{ $member->user_id }}" data-team-id="{{ $member->team_id }}" data-position-id="{{ $member->position_id }}" data-salary="{{ $member->salary }}" data-hire-date="{{ $member->hire_date }}" data-status="{{ $member->status }}" data-modal-target="editStaffModal" class="edit-staff-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:bg-custom-100 hover:text-custom-500">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>
                                            <a href="#!" data-id="{{ $member->id }}" data-modal-target="deleteStaffModal" class="delete-staff-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:bg-custom-100 hover:text-custom-500">
                                                <i data-lucide="trash-2" class="size-4"></i>
                                            </a>
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



    <!-- Add Staff Modal -->
    <div id="addStaffModal" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex justify-between p-4 border-b">
                <h5 class="text-16">Add Staff</h5>
                <button data-modal-close="addStaffModal" class="transition text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <form action="{{ route('staffing.store') }}" method="POST" id="create-staff-form">
                    @csrf
                    <div class="grid gap-4">
                        <div>
                            <label for="userId" class="block mb-2">Select User</label>
                            <select id="userId" name="user_id" class="form-input">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="teamId" class="block mb-2">Team</label>
                            <select id="teamId" name="team_id" class="form-input">
                                <option value="">None</option>
                                @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="positionId" class="block mb-2">Position</label>
                            <select id="positionId" name="position_id" class="form-input">
                                <option value="">None</option>
                                @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="salary" class="block mb-2">Salary</label>
                            <input type="number" id="salary" name="salary" class="form-input" placeholder="Salary">
                        </div>
                        <div>
                            <label for="hireDate" class="block mb-2">Hire Date</label>
                            <input type="date" id="hireDate" name="hire_date" class="form-input">
                        </div>
                        <div>
                            <label for="status" class="block mb-2">Status</label>
                            <select id="status" name="status" class="form-input">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" class="btn text-red-500 bg-white hover:bg-red-100">Cancel</button>
                        <button type="submit" class="btn bg-custom-500 text-white hover:bg-custom-600">Add Staff</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Staff Modal -->
    <div id="editStaffModal" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="editStaffLabel">Edit Staff</h5>
                <button data-modal-close="editStaffModal" id="closeEditStaffModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form id="edit-staff-form" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editStaffId">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="editStaffUser" class="inline-block mb-2 text-base font-medium">User</label>
                            <select id="editStaffUser" name="user_id" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="xl:col-span-12">
                            <label for="editStaffTeam" class="inline-block mb-2 text-base font-medium">Team</label>
                            <select id="editStaffTeam" name="team_id" class="form-input">
                                <option value="">None</option>
                                @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="xl:col-span-12">
                            <label for="editStaffPosition" class="inline-block mb-2 text-base font-medium">Position</label>
                            <select id="editStaffPosition" name="position_id" class="form-input">
                                <option value="">None</option>
                                @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="xl:col-span-12">
                            <label for="editStaffHireDate" class="inline-block mb-2 text-base font-medium">Hire Date</label>
                            <input type="date" id="editStaffHireDate" name="hire_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editStaffSalary" class="inline-block mb-2 text-base font-medium">Salary</label>
                            <input type="number" id="editStaffSalary" name="salary" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter salary">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editStaffStatus" class="inline-block mb-2 text-base font-medium">Status</label>
                            <select id="editStaffStatus" name="status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="editStaffModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" id="saveEditStaff" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Staff Modal -->

    <!-- Delete Staff Modal -->
    <div id="deleteStaffModal" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteStaffModal" id="closeDeleteStaffModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this staff member?</p>
                    <form id="delete-staff-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteStaffId" name="staff_id">
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteStaffModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                Cancel
                            </button>
                            <button type="submit" id="confirmDeleteStaff" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                Yes, Delete It!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    document.querySelectorAll('.edit-staff-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Extract data from data attributes
            const staffId = this.dataset.id;
            const userId = this.dataset.userId;
            const teamId = this.dataset.teamId;
            const positionId = this.dataset.positionId;
            const hireDate = this.dataset.hireDate;
            const salary = this.dataset.salary;
            const status = this.dataset.status;

            // Populate modal fields
            document.getElementById('editStaffId').value = staffId;
            document.getElementById('editStaffUser').value = userId;
            document.getElementById('editStaffTeam').value = teamId || '';
            document.getElementById('editStaffPosition').value = positionId || '';
            document.getElementById('editStaffHireDate').value = hireDate;
            document.getElementById('editStaffSalary').value = salary;
            document.getElementById('editStaffStatus').value = status;

            // Update form action dynamically
            const form = document.getElementById('edit-staff-form');
            form.action = `/staffing/update/${staffId}`;

            // Show modal
            document.getElementById('editStaffModal').classList.remove('hidden');
        });
    });

    document.querySelectorAll('.delete-staff-btn').forEach(button => {
        button.addEventListener('click', function() {
            const staffId = this.dataset.id;

            // Set staff ID in the form's hidden input
            document.getElementById('deleteStaffId').value = staffId;

            // Update the form action dynamically
            const form = document.getElementById('delete-staff-form');
            form.action = `/staffing/delete/${staffId}`;

            // Show the delete modal
            document.getElementById('deleteStaffModal').classList.remove('hidden');
        });
    });

</script>


@endsection
