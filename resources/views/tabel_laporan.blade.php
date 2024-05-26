@extends('layout.base_layout')
@push('css')
<style>
    .warnain{
        color: aqua;
    }
</style>
@endpush
@section('content')
<div>
    <p class="warnain">test</p>
    <table class="table table-striped table-responsive table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Isi Aduan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Hafiizh</td>
                <td>Aku laparr</td>
                <td>
                    <a href="{{ url('detail-laporan') }}" class="btn btn-sm btn-primary">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        alert("Hallo aurell")
    })
</script>
@endpush