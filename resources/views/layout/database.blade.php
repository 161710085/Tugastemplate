@extends('layout.index')
@section('konten')<br><br><br><br><br>
<table class="table">
  <thead class="thead-inverse">
<tr>
        <th>ID</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>Cita-Cita</th>
        <th>Tanggal lahir</th>
        <th>Hobi</th>
        <th>Foto</th>
    </tr>
    </thead>
   @foreach ($q as $gg)
   <tr>
 	<td>{{$gg -> id}}</td>
 	<td>{{$gg -> nis}}</td>
 	<td>{{$gg -> nama_siswa}}</td>
 	<td>{{$gg -> alamat}}</td>
 	<td>{{$gg -> tempat_lahir}}</td>
 	<td>{{$gg -> cita_cita}}</td>
 	<td>{{$gg -> tanggal_lahir}}</td>
 	<td>{{$gg -> hobi}}</td>
    <td><img src="{{ asset($gg->foto) }}" style="max-height: 150px;max-width: 150px;margin-top: 10px;"></td>
 	@endforeach   
</tr>
</table>
</body>
</html>
@endsection