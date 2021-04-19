@extends('adminweb.layouts.app')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        @include('adminweb.layouts.top-bar')
        <h2 class="intro-y text-lg font-medium mt-10">
            Data List Karyawan
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="/adminweb/employee/add" class="btn btn-primary shadow-md mr-2">Tambah Karyawan</a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <!-- BEGIN: Striped Rows -->
                <div class="intro-y box mt-5">
                    
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">First Name</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Last Name</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-gray-200 dark:bg-dark-1">
                                            <td class="border-b dark:border-dark-5">1</td>
                                            <td class="border-b dark:border-dark-5">Angelina</td>
                                            <td class="border-b dark:border-dark-5">Jolie</td>
                                            <td class="border-b dark:border-dark-5">@angelinajolie</td>
                                        </tr>
                                        <tr>
                                            <td class="border-b dark:border-dark-5">2</td>
                                            <td class="border-b dark:border-dark-5">Brad</td>
                                            <td class="border-b dark:border-dark-5">Pitt</td>
                                            <td class="border-b dark:border-dark-5">@bradpitt</td>
                                        </tr>
                                        <tr class="bg-gray-200 dark:bg-dark-1">
                                            <td class="border-b dark:border-dark-5">3</td>
                                            <td class="border-b dark:border-dark-5">Charlie</td>
                                            <td class="border-b dark:border-dark-5">Hunnam</td>
                                            <td class="border-b dark:border-dark-5">@charliehunnam</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="source-code hidden">
                            <button data-target="#copy-striped-rows-table" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                            <div class="overflow-y-auto mt-3 rounded-md">
                                <pre class="source-preview" id="copy-striped-rows-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200 dark:bg-dark-1&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200 dark:bg-dark-1&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Striped Rows -->
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
            <!-- END: Pagination -->
        </div>
        <!-- BEGIN: Delete Confirmation Modal -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-gray-600 mt-2">
                                Do you really want to delete these records? 
                                <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
    </div>
@endsection