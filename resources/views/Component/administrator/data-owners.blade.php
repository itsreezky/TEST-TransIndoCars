<div class="row g-3 mt-3">
    <center>
        <div class="col-xxl-2 col-xl-4">
            <div class="alert alert-outline-info align-items-center" role="alert">
                <span class="fas fa-info-circle text-info fs-5 me-2 ms-2"></span>
                <p class="mb-0 flex-1">Data Tampil Disini</p>
            </div>
        </div>
        <a href="{{route('administrator.home') }}">
            <button class="btn btn-falcon-default btn-sm mt-2 mb-2">
                <span class="fa-solid fa-eye"></span>
                <span class="d-md-inline-block ms-1">Sembunyikan Data</span></button></a>

    </center>
    <div class="col-xxl-12 col-xl-12">

        <div class="card">
            <div class="card-body">

                <!-- MUNCUL DISINI -->
                <div class="col-12 col-xxl-12">
                    <center>
                        <span class="badge badge-phoenix fs-7 badge-phoenix-primary mb-3">
                            <span class="ms-1 mb-1" data-feather="info" style="height:20px;width:20px;"></span>
                            <span class="badge-label">Data Owners Autocars</span>
                        </span>
                    </center>
                    <div id="owners"
                        data-list='{"valueNames":["id","owner_id","nik","nama","kelamin","email","hp","alamat_garasi","kota","status","foto_ktp"],"page":5,"pagination":true}'>
                        <div class="search-box mb-3 mx-auto">
                            <form class="position-relative"><input
                                    class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-3" data-sort="id">ID</th>
                                        <th class="sort border-top" data-sort="owner_id">OWNER ID</th>
                                        <th class="sort border-top" data-sort="nik">NIK</th>
                                        <th class="sort border-top" data-sort="nama">Nama</th>
                                        <th class="sort border-top" data-sort="kelamin">Gender</th>
                                        <th class="sort border-top" data-sort="email">Email</th>
                                        <th class="sort border-top" data-sort="hp">HP</th>
                                        <th class="sort border-top" data-sort="alamat_garasi">Alamat Garasi</th>
                                        <th class="sort border-top" data-sort="kota">Kota</th>
                                        <th class="sort border-top" data-sort="status">Status</th>
                                        <th class="sort border-top" data-sort="foto_ktp">KTP</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($allowners as $owners)
                                    @if($owners->status == 'Verified Owner')

                                    <tr>
                                        <td class="align-middle ps-3 id">{{ $owners->id }}</td>
                                        <td class="align-middle owners_id">{{ $owners->owner_id }}</td>
                                        <td class="align-middle nik">{{ $owners->nik }}</td>
                                        <td class="align-middle nama">{{ $owners->nama }}</td>
                                        <td class="align-middle kelamin">{{ $owners->kelamin }}</td>
                                        <td class="align-middle email">{{ $owners->email }}</td>
                                        <td class="align-middle hp">{{ $owners->hp }}</td>
                                        <td class="align-middle alamat_garasi">{{ $owners->alamat_garasi }}</td>
                                        <td class="align-middle kota">{{ $owners->kota }}</td>
                                        <td class="align-middle status">{{ $owners->status }}</td>
                                        <td class="align-middle foto_ktp"><button class="btn btn-primary btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#foto_ktp{{ $owners->owner_id }}">view</button></td>
                                        {{-- MODAL --}}
                                        <div class="modal fade" id="foto_ktp{{ $owners->owner_id }}" tabindex="-1"
                                            data-bs-backdrop="static" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white dark__text-gray-1100"
                                                            id="staticBackdropLabel">Foto KTP {{ $owners->nama }}
                                                        </h5><button class="btn p-1" type="button"
                                                            data-bs-dismiss="modal" aria-label="Close"><span
                                                                class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-body-tertiary lh-lg mb-0">
                                                            <img class="img-fluid" src="{{url($owners->foto_ktp)}}">
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-primary"
                                                            type="button" data-bs-dismiss="modal">Okay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @elseif($allowners->isEmpty())
                                    <center>
                                        <span>
                                            NO DATA
                                        </span>
                                    </center>
                                    @endif
                                    @endforeach
                                    {{-- //// --}}
                                </tbody>
                            </table>
                        </div>



                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
                                data-list-info="data-list-info"></span>
                            <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MUNCUL DISINI -->

            </div>
        </div>
    </div>
</div>
</div>
