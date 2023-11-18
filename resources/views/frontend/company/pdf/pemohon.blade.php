<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #25477B;
  color: white;
}
</style>
</head>
<body>

<h2>Data Pemohon</h2>

<table>
  <tr>
    <th>#</th>
    <th>jobs</th>
    <th>pemohon</th>
  </tr>
  {{-- @if (count($pemos)) --}}
  <?php
    $no = 1;
    foreach ($pemohons as $data) :
  ?>
    <tr>
      <td>{{ $no }}</td>
      <td>{{ $data->perusahaan_job_share_id }}</td>
      <td>{{ $data->user_id }}</td>
      {{-- <td>1</td>
      <td>Math Teacher</td>
      <td>Ahmad Zulveron</td> --}}
    </tr>
    <?php
      $no++;

    endforeach;
    ?>
  {{-- @else
  <tr>
    <td colspan="3">Tidak ada data Pemohon</td>
  </tr>
  @endif --}}
</table>

</body>
</html>


