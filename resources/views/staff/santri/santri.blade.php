
@extends('layout/main')
@section('content')
<h2>Coba Edit</h2>
<h3>Data Santri</h3>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Tgl Lahir</th>
			<th>Kota Lahir</th>
		</tr>
	</thead>
	<tbody>
		@foreach($santri as $s)
	<tr>
		<td>{{ $s->IDSANTRI }}</td>
		<td>{{ $s->NAMASATRI }}</td>
		<td>{{ $s->GENDER }}</td>
		<td>{{ $s->TAGGALLHR }}</td>
		<td>{{ $s->KOTALHR }}</td>
	</tr>
	@endforeach
	</tbody>
	
</table>

@endsection
 
	
