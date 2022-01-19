@extends('layouts.admin.main')

@section('content')


<div class="container-fluid">

    <br>
 <h4 class="text-center mt-2">Image List</h4>

 @include('layouts.common.message.message')

 <div class="table-responsive m-3">
    <table class="table text-center table-striped" id="picnewz">
        <thead class="primary-color white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Picture</th>
            <th scope="col"> Serial</th>
            <th scope="col"> Status</th>
            <th scope="col"> Show Date</th>
            <th scope="col">Upload By</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as  $key =>  $value)





            <tr class="align-middle">
                 <td class="align-middle">{{ $data->firstItem() + $key }}</td>


                <td><img class="img-fluid" src="{{ url($value->pic_location) }}" width="300px" alt="{{ $value->pic_name }}"></td>
                <td class="align-middle">{{ $value->serial }}</td>
                <td class="align-middle">{{ $value->status }}</td>
                <td class="align-middle">{{ $value->showdate }}</td>

                <td class="align-middle">{{ $value->user->name}}</td>

                <td class="align-middle">

                    <a class="btn-floating btn-sm btn-primary"  href="{{ route('newzpic.edit',$value->id) }}"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                    <a class="btn-floating btn-sm btn-danger"  href="{{ route('newzpic.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>





                    <form method="POST" id="del{{$value->id}}" action="{{ route('newzpic.destroy', $value->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE')


                    </form>

                    @if($value->status == "1")
                    @php
                        $staus = 0;
                    @endphp

                    <a class="btn-floating btn-sm btn-dark"  href="{{ route('newzpic.status',[$value->id,$staus]) }}">
                        <i class="mdi mdi-eye-off mdi-18px"></i>
                    </a>
                    @else

                    @php
                        $staus = 1;
                    @endphp
                    <a class="btn-floating btn-sm btn-cyan"  href="{{ route('newzpic.status',[$value->id,$staus]) }}">
                        <i class="mdi mdi-eye mdi-18px"></i>
                    </a>
                    @endif

                </td>
            </tr>




            @endforeach
         </tbody>
      </table>

  </div>


    <div class="text-right pagination ">

    {{ $data->links() }}

    </div>

<div>


@endsection

@section('subscript')
<script src="{{ asset('js/mydatatable.js') }}"></script>
<script type="text/javascript">
 $(document).ready(function() {

    });

</script>
@endsection
