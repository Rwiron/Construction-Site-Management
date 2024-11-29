@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Tenant Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Tenant Management
                    </li>
                </ul>
            </div>

            <div class="card" id="tenantTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Tenants (<b class="total-tenants">{{ $tenants->count() }}</b>)</h6>
                        <div class="shrink-0">
                            <a href="#!" data-modal-target="addTenantModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                                <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Tenant</span>
                            </a>
                        </div>
                    </div>

                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Name</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Email</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Phone</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Unit</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Lease Dates</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Rent</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                <tr>
                                    <td class="px-3.5 py-2.5">{{ $tenant->name }}</td>
                                    <td class="px-3.5 py-2.5">{{ $tenant->email }}</td>
                                    <td class="px-3.5 py-2.5">{{ $tenant->phone }}</td>
                                    <td class="px-3.5 py-2.5">{{ $tenant->unit->name }}</td>
                                    <td class="px-3.5 py-2.5">{{ $tenant->lease_start_date }} - {{ $tenant->lease_end_date }}</td>
                                    <td class="px-3.5 py-2.5">{{ $tenant->rent_amount }}</td>
                                    <td class="px-3.5 py-2.5">
                                        <div class="flex gap-3">
                                            {{-- <a href="#!" data-id="{{ $tenant->id }}" data-modal-target="editTenantModal" class="edit-tenant-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                            <i data-lucide="pencil" class="size-4"></i>
                                            </a> --}}

                                            <a href="#!" data-id="{{ $tenant->id }}" data-name="{{ $tenant->name }}" data-email="{{ $tenant->email }}" data-phone="{{ $tenant->phone }}" data-unit="{{ $tenant->unit_id }}" data-lease-start="{{ $tenant->lease_start_date }}" data-lease-end="{{ $tenant->lease_end_date }}" data-rent="{{ $tenant->rent_amount }}" data-modal-target="editTenantModal" class="edit-tenant-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>


                                            <a href="#!" data-id="{{ $tenant->id }}" data-modal-target="deleteModal" class="delete-tenant-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
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

    <!-- Add Tenant Modal -->
    {{-- <div id="addTenantModal" modal-center="" class="fixed hidden transition-all duration-300">
        <!-- Modal content goes here -->
    </div> --}}

    <!-- Add Tenant Modal -->
    <div id="addTenantModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="addTenantLabel">Add Tenant</h5>
                <button data-modal-close="addTenantModal" id="closeAddTenantModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('tenant.store') }}" method="POST" id="create-tenant-form">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="tenantName" class="inline-block mb-2 text-base font-medium">Name</label>
                            <input type="text" id="tenantName" name="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter tenant name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="tenantEmail" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="email" id="tenantEmail" name="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter tenant email" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="tenantPhone" class="inline-block mb-2 text-base font-medium">Phone</label>
                            <input type="text" id="tenantPhone" name="phone" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter tenant phone" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="tenantUnit" class="inline-block mb-2 text-base font-medium">Unit</label>
                            <select id="tenantUnit" name="unit_id" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="leaseStartDate" class="inline-block mb-2 text-base font-medium">Lease Start Date</label>
                            <input type="date" id="leaseStartDate" name="lease_start_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="leaseEndDate" class="inline-block mb-2 text-base font-medium">Lease End Date</label>
                            <input type="date" id="leaseEndDate" name="lease_end_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="rentAmount" class="inline-block mb-2 text-base font-medium">Rent Amount</label>
                            <input type="number" id="rentAmount" name="rent_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter rent amount" required>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addTenantModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add Tenant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Add Tenant Modal -->


    <!-- Edit Tenant Modal -->
    <div id="editTenantModal" modal-center="" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="editTenantLabel">Edit Tenant</h5>
                <button data-modal-close="editTenantModal" id="closeEditModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form id="edit-tenant-form" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editTenantId">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="editName" class="inline-block mb-2 text-base font-medium">Name</label>
                            <input type="text" id="editName" name="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Tenant name">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editEmail" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="email" id="editEmail" name="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Tenant email">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editPhone" class="inline-block mb-2 text-base font-medium">Phone</label>
                            <input type="text" id="editPhone" name="phone" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Phone number">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editUnit" class="inline-block mb-2 text-base font-medium">Unit</label>
                            <select id="editUnit" name="unit_id" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="xl:col-span-6">
                            <label for="editLeaseStartDate" class="inline-block mb-2 text-base font-medium">Lease Start Date</label>
                            <input type="date" id="editLeaseStartDate" name="lease_start_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-6">
                            <label for="editLeaseEndDate" class="inline-block mb-2 text-base font-medium">Lease End Date</label>
                            <input type="date" id="editLeaseEndDate" name="lease_end_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="editRentAmount" class="inline-block mb-2 text-base font-medium">Rent Amount</label>
                            <input type="number" id="editRentAmount" name="rent_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Rent amount">
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="editTenantModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" id="saveEdit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Tenant Modal -->


    <!-- Delete Tenant Modal -->
    <div id="deleteModal" modal-center="" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal" id="deleteRecordClose" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUg..." alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <form id="delete-tenant-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteTenantId" name="tenant_id">
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                Cancel
                            </button>
                            <button type="submit" id="confirmDelete" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
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
    document.querySelectorAll('.edit-tenant-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get data from data-attributes
            const tenantId = this.dataset.id;
            const tenantName = this.dataset.name;
            const tenantEmail = this.dataset.email;
            const tenantPhone = this.dataset.phone;
            const tenantUnit = this.dataset.unit;
            const leaseStartDate = this.dataset['leaseStart'];
            const leaseEndDate = this.dataset['leaseEnd'];
            const rentAmount = this.dataset.rent;

            // Populate the modal form fields
            document.getElementById('editTenantId').value = tenantId;
            document.getElementById('editName').value = tenantName;
            document.getElementById('editEmail').value = tenantEmail;
            document.getElementById('editPhone').value = tenantPhone;
            document.getElementById('editUnit').value = tenantUnit;
            document.getElementById('editLeaseStartDate').value = leaseStartDate;
            document.getElementById('editLeaseEndDate').value = leaseEndDate;
            document.getElementById('editRentAmount').value = rentAmount;

            // Update the form action dynamically
            const form = document.getElementById('edit-tenant-form');
            form.action = `/tenant/update/${tenantId}`;

            // Show the modal
            document.getElementById('editTenantModal').classList.remove('hidden');
        });
    });

    document.querySelectorAll('.delete-tenant-btn').forEach(button => {
        button.addEventListener('click', function() {
            const tenantId = this.dataset.id;

            // Set tenant ID in the form's hidden input
            document.getElementById('deleteTenantId').value = tenantId;

            // Update the form action dynamically
            const form = document.getElementById('delete-tenant-form');
            form.action = `/tenant/delete/${tenantId}`;

            // Show the delete modal
            document.getElementById('deleteModal').classList.remove('hidden');
        });
    });

</script>



@endsection
