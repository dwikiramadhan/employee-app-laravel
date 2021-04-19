@extends('adminweb.layouts.app')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        @include('adminweb.layouts.top-bar')
        <h2 class="intro-y text-lg font-medium mt-10">
            Tambah Karyawan
        </h2>
        <!-- BEGIN: Wizard Layout -->
        <div class="intro-y box py-10 sm:py-20 mt-5">
            <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                    <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Data Pribadi</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">2</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Keluarga</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">5</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Selesai</div>
                </div>
                <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
            </div>
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                <div class="font-medium text-base">Identitas</div>
                <form action="/adminweb/employee/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label">Nama Lengkap</label>
                            <input id="input-wizard-1" type="text" class="form-control" name="nama_lengkap" placeholder="John Smith" required>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-2" class="form-label">Nama Panggilan</label>
                            <input id="input-wizard-2" type="text" class="form-control" name="nama_pangginal" placeholder="John">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">Kartu Identitas</label>
                            <select id="input-wizard-3" class="form-select">
                                <option>KTP</option>
                                <option>Passport</option>
                                <option>SIM</option>
                                <option>Kartu Keluarga</option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-4" class="form-label">Nomor Identitas</label>
                            <input id="input-wizard-4" type="text" class="form-control" name="no_identitas" placeholder="Job, Work, Documentation">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-5" class="form-label">Tanggal Lahir</label>
                            <input id="input-wizard-5" type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-6" class="form-label">No Handphone</label>
                            <input id="input-wizard-6" type="text" name="no_hp" class="form-control" placeholder="0852xxxx">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-7" class="form-label">Alamat</label>
                            <input id="input-wizard-7" type="text" name="alamat" class="form-control" placeholder="Job, Work, Documentation">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-8" class="form-label">Jabatan</label>
                            <input id="input-wizard-8" type="text" name="jabatan" class="form-control" placeholder="Job, Work, Documentation">
                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            {{-- <button class="btn btn-secondary w-24">Previous</button>
                            <button class="btn btn-primary w-24 ml-2">Next</button> --}}
                            <input type="submit" class="btn btn-primary w-24 ml-2" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Wizard Layout -->
    </div>
@endsection