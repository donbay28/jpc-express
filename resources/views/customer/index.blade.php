@extends('master.layout')
@section('content')
<div class="panel-body">
    <a href="{{ url('customer/create') }}" class="btn btn-primary">Tambah Customer</a><br><br>

        <div class="alert alert-success" role="alert">
            @if (session('message'))
                {{ session('message') }}                        
            @endif
        </div>
        
    <table class="table table-bordered table-hover table-striped" id="customer-table">
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Email Customer</th>
                <th>No Telp Customer</th>
                <th>Jenis Kelamin Customer</th>
                <th>Alamat Customer</th>
                <th>OPSI</th>
            </tr>
        </thead>
        </table>
</div>


<script>
        $(function() {
            $('#customer-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url("/customer/dt") !!}',
                columns: [
                    { data: 'namaCustomer', name: 'namaCutomer' },
                    { data: 'emailCustomer', name: 'emailCustomer' },
                    { data: 'noTelpCustomer', name: 'noTelpCustomer'},
                    { data: 'genderCustomer', name: 'genderCustomer'},
                    { data: 'alamatCustomer', name: 'alamatCustomer'},
                    { data: 'aksi', name: 'aksi'},
                ]
            });
        });

</script>
@endsection