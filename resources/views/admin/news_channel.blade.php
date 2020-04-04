@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">News Channel List</h1>
       
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
 <a href="{{ route('home') }}" class="btn btn-outline-primary"> Back</a>
        <a href="{{ route('bnc.create') }}" class="btn btn-outline-primary">Add News Channel</a>
</div>
      

    
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Channel</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($cl as $item) :?> 
              <tr>
                  <td>{{$item['bbc_id']}}</td>
                  <td>{{$item['bbc_channel']}}</td>
                  <td>
                    <a href="/admin/newschannels/{{$item['bbc_id']}}/edit" class="btn btn-outline-warning">
                        Edit
                     </a>
                  </td>
                  <td><a href="{{ route('bnc.delchk',$item['bbc_id']) }}" class="btn btn-outline-danger">Delete</a></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
@endsection
