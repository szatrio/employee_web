@extends('index')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('pageBar')

<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
</style>

<br/>
	Halaman : {{ $employee->currentPage() }} <br/>
	Jumlah Data : {{ $employee->total() }} <br/>
	Data Per Halaman : {{ $employee->perPage() }} <br/>
 
 
	{{ $employee->links() }}
	

@endsection