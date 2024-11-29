@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">Utility Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Utility Management
                    </li>
                </ul>
            </div>

            <div class="card" id="utilityTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Utilities (<b class="total-utilities">{{ $utilities->count() }}</b>)</h6>
                        <div class="shrink-0">
                            <a href="#!" data-modal-target="addUtilityModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                                <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Utility</span>
                            </a>
                        </div>
                    </div>

                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Name</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Description</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Status</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Cost</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Billing Date</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($utilities as $utility)
                                <tr>
                                    <td class="px-3.5 py-2.5">{{ $utility->utility_name }}</td>
                                    <td class="px-3.5 py-2.5">{{ $utility->description }}</td>
                                    <td class="px-3.5 py-2.5">{{ $utility->status }}</td>
                                    <td class="px-3.5 py-2.5">{{ $utility->cost }}</td>
                                    <td class="px-3.5 py-2.5">{{ $utility->billing_date }}</td>
                                    <td class="px-3.5 py-2.5">
                                        <div class="flex gap-3">
                                            <a href="#!" data-id="{{ $utility->id }}" data-name="{{ $utility->utility_name }}" data-description="{{ $utility->description }}" data-status="{{ $utility->status }}" data-cost="{{ $utility->cost }}" data-billing-date="{{ $utility->billing_date }}" data-modal-target="editUtilityModal" class="edit-utility-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>
                                            <a href="#!" data-id="{{ $utility->id }}" data-modal-target="deleteUtilityModal" class="delete-utility-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
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

    <!-- Add Utility Modal -->
    <div id="addUtilityModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">

        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b">
                <h5>Add Utility</h5>
                <button data-modal-close="addUtilityModal" class="text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <form action="{{ route('utilities.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="utilityName">Name</label>
                    <input type="text" id="utilityName" name="utility_name" class="form-input" required>
                </div>
                <div class="mb-4">
                    <label for="utilityDescription">Description</label>
                    <textarea id="utilityDescription" name="description" class="form-input"></textarea>
                </div>
                <div class="mb-4">
                    <label for="utilityStatus">Status</label>
                    <select id="utilityStatus" name="status" class="form-input">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="utilityCost">Cost</label>
                    <input type="number" id="utilityCost" name="cost" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="utilityBillingDate">Billing Date</label>
                    <input type="date" id="utilityBillingDate" name="billing_date" class="form-input">
                </div>
                <div class="flex justify-end">
                    <button type="reset" data-modal-close="addUtilityModal" class="btn bg-white text-red-500">Cancel</button>
                    <button type="submit" class="btn bg-custom-500 text-white">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Utility Modal -->
    <div id="editUtilityModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">

        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b">
                <h5>Edit Utility</h5>
                <button data-modal-close="editUtilityModal" class="text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <form id="editUtilityForm" method="POST" class="p-4">
                @csrf
                @method('POST')
                <input type="hidden" name="id" id="editUtilityId">
                <div class="mb-4">
                    <label for="editUtilityName">Name</label>
                    <input type="text" id="editUtilityName" name="utility_name" class="form-input" required>
                </div>
                <div class="mb-4">
                    <label for="editUtilityDescription">Description</label>
                    <textarea id="editUtilityDescription" name="description" class="form-input"></textarea>
                </div>
                <div class="mb-4">
                    <label for="editUtilityStatus">Status</label>
                    <select id="editUtilityStatus" name="status" class="form-input">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="editUtilityCost">Cost</label>
                    <input type="number" id="editUtilityCost" name="cost" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="editUtilityBillingDate">Billing Date</label>
                    <input type="date" id="editUtilityBillingDate" name="billing_date" class="form-input">
                </div>
                <div class="flex justify-end">
                    <button type="reset" data-modal-close="editUtilityModal" class="btn bg-white text-red-500">Cancel</button>
                    <button type="submit" class="btn bg-custom-500 text-white">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Utility Modal -->
    <div id="deleteUtilityModal" modal-center="" class="fixed hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteUtilityModal" id="closeDeleteUtilityModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAC8VBMVEUAAAD/6u7/cZD/3uL/5+r/T4T9O4T/..." alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this utility?</p>
                    <form id="delete-utility-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteUtilityId" name="utility_id">
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteUtilityModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                Cancel
                            </button>
                            <button type="submit" id="confirmDeleteUtility" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                Yes, Delete It!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Utility Modal -->


</div>

<script>
    document.querySelectorAll('.edit-utility-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const description = this.dataset.description;
            const status = this.dataset.status;
            const cost = this.dataset.cost;
            const billingDate = this.dataset.billingDate;

            document.getElementById('editUtilityId').value = id;
            document.getElementById('editUtilityName').value = name;
            document.getElementById('editUtilityDescription').value = description;
            document.getElementById('editUtilityStatus').value = status;
            document.getElementById('editUtilityCost').value = cost;
            document.getElementById('editUtilityBillingDate').value = billingDate;

            const form = document.getElementById('editUtilityForm');
            form.action = `/utilities/update/${id}`;

            document.getElementById('editUtilityModal').classList.remove('hidden');
        });
    });

    document.querySelectorAll('.delete-utility-btn').forEach(button => {
        button.addEventListener('click', function() {
            const utilityId = this.dataset.id;

            // Set the utility ID in the hidden input field
            document.getElementById('deleteUtilityId').value = utilityId;

            // Update the form action dynamically
            const form = document.getElementById('delete-utility-form');
            form.action = `/utilities/delete/${utilityId}`;

            // Show the delete modal
            document.getElementById('deleteUtilityModal').classList.remove('hidden');
        });
    });

</script>
@endsection
