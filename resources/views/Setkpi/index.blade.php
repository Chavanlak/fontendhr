{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> --}}
    @extends('layoutHR')
@section('titlle','การเพิ่มข้อมูลพนักงาน')
@section('content')
    <h1>เเบบประเมินพนักงาน</h1>

</head>
<body>
  <h3 class="px-3 py-3">เเบบประเมินพนักงาน</h3>
  <br>
    {{-- <button><a  href="/setkpi/create me-auto mb-2 mb-lg-0" class="btn btn-primary btn-lg" >เพิ่ม</a></button> --}}
    {{-- <button class= "btn btn-primary btn-lg/setkpi/create btn btn-primary btn-lg d-grid gap-2 d-md-flex justify-content-md-end" >เพิ่ม</button>  --}}
    {{-- <button><a href="/setkpi/create me-auto mb-2 mb-lg-0" class="btn btn-primary btn-lg">เพิ่ม</a>/button> --}}
      <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-lg me-md-5 " type="button ">เพิ่มเเบบประเมิน</a>
      </div>
    <table class="table table-striped table-bordered border-white ">
      <thead class=" table-info table-bordered border-white " >
        
        <thead>
          <tr>
            <th cope="col">รหัส</th>
            <th cope="col">title</th>
            <th cope="col">จำนวนชุด</th>
            <th cope="col">แก้ไข</th>
            <th cope="col">ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($setkpis as $setkpi)
            <tr>
            <td><label name="id">{{ $setkpi->idset}}</label></td>
            <td><label name="title">{{ $setkpi->titleset}}</label></td>
            <td>4 ข้อ</td>
            <td><a href="{{ route('setkpi.edit',['setkpi' => $setkpi->idset]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('setkpi.delete',['setkpi'=> $setkpi->idset]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ">
              </form>
          </td>
          </tr>
            @endforeach            
        </tbody>
      </table>
</body>
</html>