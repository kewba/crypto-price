@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">News Item List - {{$nl[0]['bbc_name']}}</h1>
       
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
 <a href="{{ route('bnc.index') }}" class="btn btn-outline-primary">Back</a>
        
</div>
      

    
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Title</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($nl as $item) :?> 
              <tr>
                  <td>{{$item['bbi_id']}}</td>
                  <td>{{$item['bbi_title']}}</td>
                  <td>
                    <a href="{{route('bni.edit',$item['bbi_id'])}}" class="btn btn-outline-warning">
                        Edit
                     </a>
                  </td>
                  <td><a href="{{ route('bni.delchk',$item['bbi_id']) }}" class="btn btn-outline-danger">Delete</a></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <nav class="row justify-content-center">
           
            {{ $nl->onEachSide(1)->links() }}
        </nav>
@endsection
