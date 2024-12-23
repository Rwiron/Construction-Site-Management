@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center">
                <div class="grow">
                    <h5 class="text-16">Building Application Management</h5>
                </div>
                <div class="shrink-0">
                    <a href="#!" data-modal-target="addApplicationModal" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                        <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Application</span>
                    </a>
                </div>
            </div>

            <div class="card" id="applicationTable">
                <div class="card-body">
                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Name</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Email</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Phone</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Address</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Submited Date</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Status</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                <tr>
                                    <td class="px-3.5 py-2.5">{{ $application->user->name }}</td>
                                    <td class="px-3.5 py-2.5">{{ $application->user->email }}</td>
                                    <td class="px-3.5 py-2.5">{{ $application->phone }}</td>
                                    <td class="px-3.5 py-2.5">{{ $application->address }}</td>
                                    <td class="px-3.5 py-2.5">{{ $application->applied_at }}</td>
                                    <td class="px-3.5 py-2.5">{{ $application->status }}</td>
                                    <td class="px-3.5 py-2.5">
                                        <div class="flex gap-3">
                                            <a href="#!" data-id="{{ $application->id }}" data-phone="{{ $application->phone }}" data-address="{{ $application->address }}" data-status="{{ $application->status }}" data-modal-target="editApplicationModal" class="edit-application-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>
                                            <a href="#!" data-id="{{ $application->id }}" data-modal-target="deleteApplicationModal" class="delete-application-btn flex items-center justify-center rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100">
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

    <!-- Add Application Modal -->
    <div id="addApplicationModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Application</h5>
                <button data-modal-close="addApplicationModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('building_application.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="phone" class="inline-block mb-2 text-base font-medium">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter phone number" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="address" class="inline-block mb-2 text-base font-medium">Address</label>
                            <textarea id="address" name="address" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter address" required></textarea>
                        </div>
                        {{-- <div class="xl:col-span-12">
                            <label for="documents" class="inline-block mb-2 text-base font-medium">Documents</label>
                            <input type="file" id="documents" name="documents[]" multiple class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div> --}}
                        <div class="xl:col-span-12">
                            <label for="documents" class="inline-block mb-2 text-base font-medium">Documents (PDF Only)</label>
                            <input type="file" id="documents" name="documents[]" multiple accept=".pdf" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" required>
                            <small class="text-sm text-slate-500">Only PDF files are allowed. Maximum file size: 2MB.</small>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addApplicationModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Application Modal -->
    <div id="editApplicationModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Edit Application</h5>
                <button data-modal-close="editApplicationModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form id="edit-application-form" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editApplicationId">


                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        {{-- <div class="xl:col-span-12">
                            <label for="editApplicationStatus" class="inline-block mb-2 text-base font-medium">Status</label>
                            <select id="editApplicationStatus" name="status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="Submitted">Submitted</option>
                                <option value="Under Review">Under Review</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div> --}}

                        <div class="xl:col-span-12">
                            <label for="editApplicationPhone" class="inline-block mb-2 text-base font-medium">Phone</label>
                            <input type="text" id="editApplicationPhone" name="phone" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Update phone number">
                        </div>

                        <div class="xl:col-span-12">
                            <label for="editApplicationAddress" class="inline-block mb-2 text-base font-medium">Address</label>
                            <input type="text" id="editApplicationAddress" name="address" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Update address">
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="editApplicationModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" id="saveEditApplication" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <!-- Delete Application Modal -->
    <div id="deleteApplicationModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <!-- Delete modal structure -->
    </div> --}}
    <div id="deleteApplicationModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteApplicationModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAC8VBMVEUAAAD/6u7/cZD/3uL/5+r/T4T9O4T/4ub9RIX/ooz/7/D/noz+PoT/3uP9TYf/XoX/m4z/oY39Tob/oYz/oo39O4T9TYb/po3/n4z/4Ob/3+X/nIz+fon/4eb/nI39Xoj9fIn/8fP9SoX9coj/noz/XYb/6e38R4b/XIf/cIn/ZYj/Rof/6+//cIr/oYz/a4P/7/L+X4f+bYn+QoX/pIz/7vH/noz/8PH/7O7/4ub/oIz/moz/oY3/O4X/cYn/RYX+aIj/5+r9QYX+XYf+cYn+Z4j+i5j9PoT/po3/8vT/ucD/09f+hYr/8vT8R4X8UYb/3uH+ZIn+W4f+cIn/7O/+hIr+VYf+b4j+ZYj+VYb/6Ov9RYX9UIb9bYn9O4T/oIz9Y4f9WIb/gov/bIj/dYr/gYr/pY3/7e//dYr9PoX/pY3/8vL/PID/7/L+hor+hor/8fP/8fP/o43/o43/7O//n4v/n47/nI7/8PL/6+7/6ez/5+v9QIX/7fD9SoX9SIX9RYX9Q4X+YIf/6u7/7/H+g4r+gYr+gIr+for+fYr+cYn9O4T+e4n+a4j+ZYj+VYb9T4b9PYT+eIn9TYb/8vT+dYn+c4n+don+cIj+Zoj+bYj+aIj+XYf+Yof+W4f/xs/+Wof9U4b+V4b/0Nf/ur3+hor+hYr/1Nv/oY39TIb+eon/1t3/3eL/3+T/0dn/y9P/m4z+aoj9Uob+WYf9UYb/ydL/yNH/2+H/ztb/xM7/197/2uD/0tr/zNT/2d//zdX/noz/w83/4eb/oIz/2N//o43/pI3/nYz/uMX/qr7/u8f/pY3/vcn/p7v/wcv/tMP/ssL/r8H/rb//usf/wMv/tcP+kKL+h5f/sr7/o7f/oLT/k6/+mav+kKr+lKH+fqH+bZf+dJb+hJH9X5H+e4z/v8n+iKX+h6H/rL//rbr/mrP/mbD+dp3+fpz+jJv+fpf9ZJT+e5D+aZD/qbf+oa/+hp3+bpD+co/+ZI/+Xoz9Vos1azWoAAAAeHRSTlMAvwe8iBv3u3BtPR61ZUcx9/Xy7ebf3dHPt7Gtqqebm5aMh4V3cXBcW1pGMSUaEgX729qtqqmll3VlRT84Ny8g/vr48fDw7u7t5tzVz8vIx8bGxsW/u7KwsLCmnZybko6Ghn1wb2hkX0Q+KhMT+eTjx8bDwa1NSEgfarKCAAAHAElEQVR42uzTv2qDQBwH8F/cjEtEQUEQBOkUrIMxRX2AZMiWPVsCCYX+rxacmkfIQzjeIwRK28GXKvQ0talytvg7MvRz2/c47ntwP/i7tehpkzyfaJ64Bu4EUcsrNFEArpbq2xF1CfxIN681biXgJFSyWkoEXARy1kAOgINIzhrJEaBz1Jcvur9Y+HolUB3AZuxLii3RSLKVQ+gBsvt9yaw81jEP8QPg0t8LInwjlrkOqB5JwYYjNikEgMkglNG85QMiYUA+DST4QSr3zgFPSCgTapiECqEDfWs2jXediaczq/+b669iBNetK1zQA7sOF2VBK+MYzbjd+xGdAdPwMkbkDoFltEU1AoaNu0XlbhgFVimyFWsEUmSsUbxLkLE+wTxJUsSVJHNGgV6CrHfyBZ6RnX6BJ2T/BT5orWOXBOIogOMPCoTg/gBFQQiCoAiaagmCaKiGlpbGKGiqP8C51HA60MYGqyF/56ig4CAOIuIk3g1yg5yDiyD6B+Tdc/i9Gn734Odn/HLv8bjppzrgNrVmt6rXWGrNtkDh6DS1RqdhXiQ7m0uf2vlbd/YgrKcvzZ6B5+pbsyvguXnR7AZ44i+axYEn+apZEnjuXjW7A56HtGYPENZxIhKJXF+kNbu4Xq5NHINStBmoZDSr4N4oKBhNVMxoVmwi1T9IWKiU1axkoVjIA0RWMxHyAMNaGeW0GlkrBihELWTntLItFAUlI7axdHn+89fIHf1r3nTqhfrw/NLfGjMgtLhJeR0hhJOj0S0LUXZp8xwhRMczqThwJU2qI3wT0uya32o2iRPh65hUEri23wlbBBqeHB2MjtzMWtCqNp3fBq57usAVaCrHHrae3KYCuXT+Hrh288SgigZy7GHrKT707QLXY56wq2ioOmBYRTadfwSukwIxq6OFHPvY+nJb1NGMzp8A136ByLdw71x1wBxbK0/n94HroPBGFBsBR25jbGO5OdiKdLpwAGxndEUFF7dVB7SxfdDpM+A7pCvGrUBfbl1sXbn1aVs5BL7fVsjktYkwDOMvAwk5hAQEey1USmuLiHp2QRFvigouuKB4EvwTxO2ouOHFfT2ICAaXiBFFvNWQybSJFZI0JKGQaFtpLbiexHm/+eZ7AlXnnfnd5sf7PN+TbL8MjL90yZquwK5guiy7cUxvp+DsxIpPXPzoXwMesfuE6Z0UnH1XgepD5rThCqwKhjqtzqqY3kfBWYIVE6r5i+HyrPKG+qLOJjC9hIJz6CzwQTXPGs4bYKhZdfYB04coOEux4ut9pmMOYGUO6Kizr5heSsEZwopZ1Wz+tDKrsvlHqbNZTA9RcNKPge+qecJw3gBDTaiz75heQ8FZdg14/Iqbq4YbYTViqCqrV48xvYyCY63DjswrF9scwMocYLPKYHadRQI2XgHec/WYobwBhhpj9R6zG0nCCiwZeeQy8ndVRqVYSRK2ngNKXP3WUN4AQ71lVcLsVpKwC0sqXJ0x1DircUNlWFUwu4sk9GLJ9D3mijGAjTHgijqaxmwvSThwA6ir7m++8gb45ps6qmP2AEnox5KO6m75ymHj+KaljjqY7ScJg6eAz6r7s6+8AQsdaQZJwhCWtF4wHV+Nshn1TVsdtTA7RBLSWDKvuut/G1BXR/OYTZOE2Cnk9RuXaWMAG2PANJvXXdEYSbCuIzkur/jGG+CbCptcV9QiERuwpfzaxfbNGJsx37xjU8bkBpKx4iagnhs1DQ/wzSgaxQqSsQ1r7IxL3hjAxnguz8bG5DaSseM2MMXlOd+U2JR8k2MzhcndJKMXa2pcnr2+8IDrWTY1TPaSjINPgXaW+aFNiUVJix/qpI3JgySj/y7QUO1NbbwBWjTVSQOT/SRjEGtaz5kZbT6y+KjFjDppYXKQZKTOA/OqvaGNN0CLhjqZx2SKZKSx5uctpq3NOxbvtGirk5+YTJOM2HlEtdcXHlBXJ13BGMmw7iAFbp/SwhugxRSLQlfQIiGLsMfh+srCAyosHMwtIik9TwDvvQDCpYekbHkGVHMujhY2C1sLh0UVc1tIyo4LQI3ry1p4A7Qos6hhbjdJ2YtFjbcutr+IRc1fxKKBub0kpQ+LfjlufVOLycKf78KkFk33wPmFuT6SkriETNrFYn7GEE2nWHSahpjJF4v2ZFcsQVIG3DxMmHsC3xfm5vDgyZz7PDBAUlIPIiFFUoaPRcIwSVkbzYAYSbGiGWCRmEXHI2ARyemJYkAPydkcxYDNJCd5IgJWkZw9UQzYQ3L6ohjQR3ISJyMgQXIGohgwQHKGoxgwTHKs9UdDs345hWBV+AGrKAyp8AMOUyiSYd9PUjjWbroYik1rKSSr42Hejx+m0KxefEbM4tUUAUf2x2XPx/cfoWiIJZKLA46IL04mYvQf/AaSGokYCo6ekAAAAABJRU5ErkJggg==" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this application?</p>
                    <form id="delete-application-form" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="deleteApplicationId" name="application_id">
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteApplicationModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                                Cancel
                            </button>
                            <button type="submit" id="confirmDeleteApplication" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
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
    // document.querySelectorAll('.edit-application-btn').forEach(button => {
    //     button.addEventListener('click', function() {
    //         const appId = this.dataset.id;
    //         const appStatus = this.dataset.status;
    //         const appAddress = this.dataset.address;

    //         // Populate modal fields
    //         document.getElementById('editApplicationId').value = appId;
    //         document.getElementById('editApplicationStatus').value = appStatus;
    //         document.getElementById('editApplicationAddress').value = appAddress;

    //         // Update form action
    //         const form = document.getElementById('edit-application-form');
    //         form.action = `/building_application/update/${appId}`;

    //         // Show modal
    //         document.getElementById('editApplicationModal').classList.remove('hidden');
    //     });
    // })

    document.querySelectorAll('[data-modal-target="editApplicationModal"]').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const address = this.dataset.address;
            const phone = this.dataset.phone;
            //const status = this.dataset.status;

            document.getElementById('editApplicationId').value = id;
            document.getElementById('editApplicationAddress').value = address;
            document.getElementById('editApplicationPhone').value = phone;
            //document.getElementById('editApplicationStatus').value = status;

            const form = document.getElementById('edit-application-form');
            form.action = `/building_application/update/${id}`;

            document.getElementById('editApplicationModal').classList.remove('hidden');
        });
    });


    document.querySelectorAll('[data-modal-target="deleteApplicationModal"]').forEach(button => {
        button.addEventListener('click', function() {
            const applicationId = this.dataset.id;

            // Set the application ID in the hidden input
            document.getElementById('deleteApplicationId').value = applicationId;

            // Update the form action dynamically
            const form = document.getElementById('delete-application-form');
            form.action = `/building_application/delete/${applicationId}`;

            // Show the delete modal
            document.getElementById('deleteApplicationModal').classList.remove('hidden');
        });
    });

</script>
@endsection
