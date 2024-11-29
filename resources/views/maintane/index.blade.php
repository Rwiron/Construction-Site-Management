@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">Maintenance Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Maintenance Management
                    </li>
                </ul>
            </div>

            <div class="card" id="maintenanceTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Maintenance Tasks (<b class="total-maintenance">{{ $maintenances->count() }}</b>)</h6>
                        <div class="shrink-0">
                            <a href="#!" data-modal-target="addMaintenanceModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                                <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Task</span>
                            </a>
                        </div>
                    </div>

                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Type</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Description</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Status</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Priority</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Begin on</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Finished on</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Assigned To</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maintenances as $maintenance)
                                <tr>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->maintenance_type }}</td>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->description }}</td>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->status }}</td>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->priority }}</td>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->start_date }}</td>
                                    <td class="px-3.5 py-2.5">{{ $maintenance->end_date }}</td>
                                    <td class="px-3.5 py-2.5">{{ optional($maintenance->assignedUser)->name ?? 'N/A' }}</td>
                                    <td class="px-3.5 py-2.5">
                                        <div class="flex gap-3">
                                            <a href="#!" data-id="{{ $maintenance->id }}" data-maintenance-type="{{ $maintenance->maintenance_type }}" data-description="{{ $maintenance->description }}" data-status="{{ $maintenance->status }}" data-priority="{{ $maintenance->priority }}" data-assigned-to="{{ $maintenance->assigned_to }}" data-start-date="{{ $maintenance->start_date }}" data-end-date="{{ $maintenance->end_date }}" data-modal-target="editMaintenanceModal" class="edit-maintenance-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>
                                            <a href="#!" data-id="{{ $maintenance->id }}" data-modal-target="deleteMaintenanceModal" class="delete-maintenance-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
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

    <!-- Add Maintenance Modal -->
    <div id="addMaintenanceModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Maintenance</h5>
                <button data-modal-close="addMaintenanceModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('maintane.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="maintenanceType" class="inline-block mb-2 text-base font-medium">Type</label>
                            <input type="text" id="maintenanceType" name="maintenance_type" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter maintenance type" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="description" class="inline-block mb-2 text-base font-medium">Description</label>
                            <textarea id="description" name="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter description"></textarea>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="status" class="inline-block mb-2 text-base font-medium">Status</label>
                            <select id="status" name="status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="priority" class="inline-block mb-2 text-base font-medium">Priority</label>
                            <select id="priority" name="priority" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                        </div>


                        <div class="xl:col-span-6">
                            <label for="StartDate" class="inline-block mb-2 text-base font-medium">Start Date</label>
                            <input type="date" id="StartDate" name="start_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-6">
                            <label for="EndDate" class="inline-block mb-2 text-base font-medium">End Date</label>
                            <input type="date" id="EndDate" name="end_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>

                        <div class="xl:col-span-12">
                            <label for="assignedTo" class="inline-block mb-2 text-base font-medium">Assigned To</label>
                            <select id="assignedTo" name="assigned_to" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="">Unassigned</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addMaintenanceModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Maintenance Modal -->
    <div id="editMaintenanceModal" modal-center="" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="editMaintenanceLabel">Edit Maintenance</h5>
                <button data-modal-close="editMaintenanceModal" id="closeEditMaintenanceModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form id="edit-maintenance-form" method="POST" action="{{ route('maintane.update', $maintenance->id) }}">

                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editMaintenanceId">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="editMaintenanceType" class="inline-block mb-2 text-base font-medium">Maintenance Type</label>
                            <input type="text" id="editMaintenanceType" name="maintenance_type" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Maintenance type">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editDescription" class="inline-block mb-2 text-base font-medium">Description</label>
                            <textarea id="editDescription" name="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Maintenance description"></textarea>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editStatus" class="inline-block mb-2 text-base font-medium">Status</label>
                            <select id="editStatus" name="status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editAssignedTo" class="inline-block mb-2 text-base font-medium">Assigned To</label>
                            <select id="editAssignedTo" name="assigned_to" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="xl:col-span-6">
                            <label for="editStartDate" class="inline-block mb-2 text-base font-medium">Start Date</label>
                            <input type="date" id="editStartDate" name="start_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-6">
                            <label for="editEndDate" class="inline-block mb-2 text-base font-medium">End Date</label>
                            <input type="date" id="editEndDate" name="end_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editPriority" class="inline-block mb-2 text-base font-medium">Priority</label>
                            <select id="editPriority" name="priority" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="editMaintenanceModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" id="saveEditMaintenance" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Maintenance Modal -->


    <!-- Delete Maintenance Modal -->
    <div id="deleteMaintenanceModal" modal-center="" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteMaintenanceModal" id="closeDeleteMaintenanceModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <img src="" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Do you want to delete this maintenance task?</p>
                    <form id="delete-maintenance-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteMaintenanceId" name="id">
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteMaintenanceModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100">
                                Cancel
                            </button>
                            <button type="submit" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600">
                                Yes, Delete It!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Maintenance Modal -->




    <!-- Similar to Delete Modal -->

</div>
<script>
    document.querySelectorAll('.edit-maintenance-btn').forEach(button => {
        button.addEventListener('click', function() {
            const maintenanceId = this.dataset.id;
            const maintenanceType = this.dataset.maintenanceType || '';
            const description = this.dataset.description || '';
            const status = this.dataset.status || 'Pending';
            const assignedTo = this.dataset.assignedTo || '';
            const startDate = this.dataset.startDate || '';
            const endDate = this.dataset.endDate || '';
            const priority = this.dataset.priority || 'Medium';

            // Debugging logs
            console.log('Maintenance ID:', maintenanceId);
            console.log('Type:', maintenanceType);
            console.log('Description:', description);
            console.log('Status:', status);
            console.log('Assigned To:', assignedTo);
            console.log('Start Date:', startDate);
            console.log('End Date:', endDate);
            console.log('Priority:', priority);

            // Populate the modal fields
            document.getElementById('editMaintenanceId').value = maintenanceId;
            document.getElementById('editMaintenanceType').value = maintenanceType;
            document.getElementById('editDescription').value = description;
            document.getElementById('editStatus').value = status;
            document.getElementById('editAssignedTo').value = assignedTo;
            document.getElementById('editStartDate').value = startDate;
            document.getElementById('editEndDate').value = endDate;
            document.getElementById('editPriority').value = priority;

            // Update the form action
            const form = document.getElementById('edit-maintenance-form');
            form.action = `/maintane/update/${maintenanceId}`;
            console.log('Form action set to:', form.action);

            // Show the modal
            document.getElementById('editMaintenanceModal').classList.remove('hidden');
        });
    });

    document.querySelectorAll('.delete-maintenance-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get the maintenance ID from the button's data attributes
            const maintenanceId = this.dataset.id;

            // Set the maintenance ID in the hidden input field
            document.getElementById('deleteMaintenanceId').value = maintenanceId;

            // Update the form action dynamically
            const form = document.getElementById('delete-maintenance-form');
            form.action = `/maintane/delete/${maintenanceId}`;

            // Show the delete modal
            document.getElementById('deleteMaintenanceModal').classList.remove('hidden');
        });
    });

</script>


@endsection
