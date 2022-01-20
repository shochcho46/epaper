@extends('layouts.admin.main')

@section('content')


<div class="container-fluid">

    <br>
 <h4 class="text-center mt-2">Advertise List</h4>

 @include('layouts.common.message.message')

 <div class="table-responsive m-3">
    <table class="table text-center table-striped" id="addlist">
        <thead class="primary-color white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Picture</th>
            <th scope="col"> Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as  $key =>  $value)





            <tr class="align-middle">
                 <td class="align-middle">{{ $data->firstItem() + $key }}</td>


                <td><img class="img-fluid" src="{{ url($value->pic_location) }}" width="300px" alt="{{ $value->pic_name }}"></td>
                @if ($value->addtype == "hbanner")
                    <td class="align-middle">Head Banner</td>
                @elseif($value->addtype == "fbanner")
                    <td class="align-middle">Footer Banner</td>
                @else
                    <td class="align-middle">Normal Addvertise</td>
                @endif


                <td class="align-middle">

                    <a class="btn-floating btn-sm btn-primary"  href="{{ route('advertise.edit',$value->id) }}"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                    <a class="btn-floating btn-sm btn-danger"  href="{{ route('advertise.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>





                    <form method="POST" id="del{{$value->id}}" action="{{ route('advertise.destroy', $value->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE')


                    </form>



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
