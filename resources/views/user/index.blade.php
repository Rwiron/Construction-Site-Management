@extends('layouts.master')

@section('content')
<div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">User Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        User Management
                    </li>
                </ul>
            </div>

            <div class="card" id="userTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Users (<b class="total-users">{{ $users->count() }}</b>)</h6>
                        <div class="shrink-0">
                             <a href="#!" data-modal-target="addUserModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                                 <i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add User</span>
                             </a>


                        </div>
                    </div>

                    <div class="-mx-5 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr class="bg-slate-100 dark:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 ID">
                                        ID</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Name">
                                        Name</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Email">
                                        Email</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Role">
                                        Role</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Action">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="employeeList">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 ID">
                                        <a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#{{ $user->id }}</a>
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Name">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Email">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Role">
                                        {{-- If the role is an object or JSON --}}
                                        {{ is_array($user->role) ? $user->role['name'] : (is_object($user->role) ? $user->role->name : $user->role) }}
                                    </td>
                                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action">
                                        <div class="flex gap-3">
                                            <a class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500" href="pages-account.html"><i data-lucide="eye" class="inline-block size-3"></i> </a>
                                            <a href="#!" data-modal-target="addEmployeeModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 edit-item-btn bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 remove-item-btn bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
                        <div class="grow">
                            <p class="text-slate-500 dark:text-zink-200">
                                Showing
                                <b>{{ $users->count() }}</b>
                                of
                                <b>{{ $users instanceof \Illuminate\Pagination\LengthAwarePaginator ? $users->total() : $users->count() }}</b>
                                Results
                            </p>
                        </div>
                        <div>
                            @if($users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                            {{ $users->links('pagination::bootstrap-4') }}
                            @endif
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>

    <div id="addUserModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="addUserLabel">Add User</h5>
                <button data-modal-close="addUserModal" id="closeUserModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                    <i data-lucide="x" class="size-5"></i>
                </button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('user.management.store') }}" method="POST" id="create-user-form">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="userName" class="inline-block mb-2 text-base font-medium">Name</label>
                            <input type="text" id="userName" name="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter user name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="userEmail" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="email" id="userEmail" name="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter user email" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="userRole" class="inline-block mb-2 text-base font-medium">Role</label>
                            <select name="role_id" id="userRole" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="userPassword" class="inline-block mb-2 text-base font-medium">Password</label>
                            <input type="password" id="userPassword" name="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addUserModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end Add User Modal-->

    <!-- End Page-content -->
</div>



@endsection
