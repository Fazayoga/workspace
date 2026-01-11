@extends('layouts.app')

@section('title', 'Jadwal Kerja')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

        <!-- KIRI : Logo + Title -->
        <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                style="width:48px;height:48px">
                <i class="bx bx-user-check fs-4"></i>
            </div>
            <div>
                <h5 class="mb-0">Data Absensi</h5>
                <small class="text-muted">Kelola absensi</small>
            </div>
        </div>

        <!-- KANAN : Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Data Absensi
                </li>
            </ol>
        </nav>

    </div>
    {{-- ================= HEADER FILTER ================= --}}
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-2 align-items-center">

                <div class="col-lg-2 col-md-4">
                    <button class="btn btn-success w-100">
                        List Kegiatan
                    </button>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <button class="btn btn-primary">
                            <i class="bx bx-search"></i> Cari
                        </button>
                        <button class="btn btn-warning">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button class="btn btn-warning">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex justify-content-end gap-2">
                        <input type="text" class="form-control w-50" placeholder="Cari Pegawai">
                        <button class="btn btn-primary">
                            <i class="bx bx-search"></i> Cari
                        </button>
                        <button class="btn btn-dark">Jadwal Kerja</button>
                        <button class="btn btn-success">Riwayat</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ================= TABLE ================= --}}
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead class="table-light text-center align-middle">

                    <tr>
                        <th rowspan="3">Nama</th>
                        <th colspan="5">Sabtu, 10 Januari 2026</th>
                        <th colspan="5">Minggu, 11 Januari 2026</th>
                        <th rowspan="3">Cetak</th>
                    </tr>

                    <tr>
                        <th colspan="5" class="small text-muted">
                            Hari Libur (Shift Pagi, Middle, Malam)
                        </th>
                        <th colspan="5" class="small text-muted">
                            Hari Libur (Shift Pagi, Middle, Malam)
                        </th>
                    </tr>

                    <tr>
                        <th>Foto</th>
                        <th>Masuk</th>
                        <th>Break</th>
                        <th>Lembur</th>
                        <th>Kunjungan</th>

                        <th>Foto</th>
                        <th>Masuk</th>
                        <th>Break</th>
                        <th>Lembur</th>
                        <th>Kunjungan</th>
                    </tr>

                </thead>

                <tbody class="text-center align-middle">

                    @foreach (['Cekgu Besar', 'Ehsan', 'Yusuf Haris', 'Admin Rizky', 'Ansellma', 'Asdwfe'] as $nama)
                        <tr>
                            <td class="text-start">{{ $nama }}</td>

                            {{-- Sabtu --}}
                            <td>
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle" width="32">
                            </td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>

                            {{-- Minggu --}}
                            <td>
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle" width="32">
                            </td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>
                            <td class="bg-danger text-white">-</td>

                            {{-- Cetak --}}
                            <td>
                                <button class="btn btn-sm btn-dark">
                                    <i class="bx bx-printer"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- ================= LEGEND ================= --}}
    <div class="card mt-4">
        <div class="card-body bg-dark text-white">
            <div class="d-flex flex-wrap gap-3 justify-content-center">

                <span><span class="badge bg-success me-1">&nbsp;</span> Tidak Terlambat</span>
                <span><span class="badge bg-success me-1">&nbsp;</span> Dispensasi</span>
                <span><span class="badge bg-warning me-1">&nbsp;</span> Terlambat</span>
                <span><span class="badge bg-info me-1">&nbsp;</span> Ijin</span>
                <span><span class="badge bg-purple me-1">&nbsp;</span> Cuti</span>
                <span><span class="badge bg-primary me-1">&nbsp;</span> Lembur</span>
                <span><span class="badge bg-secondary me-1">&nbsp;</span> Dinas</span>

            </div>
        </div>
    </div>

@endsection
