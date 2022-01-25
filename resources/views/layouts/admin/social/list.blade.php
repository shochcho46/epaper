@extends('layouts.admin.main')

@section('content')


<div class="container-fluid">

    <br>
 <h4 class="text-center mt-2">Social Network List</h4>

 @include('layouts.common.message.message')

 <div class="table-responsive m-3">
    <table class="table text-center table-striped" id="sociallist">
        <thead class="primary-color white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Name</th>
            <th scope="col"> Link</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as  $key =>  $value)





            <tr class="align-middle">
                 <td class="align-middle">{{  $key+1 }}</td>


                <td class="align-middle">{{ $value->name }}</td>
              
              <td class="align-middle">{{ $value->link }}</td>
                


                <td class="align-middle">

                    <a class="btn-floating btn-sm btn-primary"  href="{{ route('social.edit',$value->id) }}"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                    <a class="btn-floating btn-sm btn-danger"  href="{{ route('social.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>





                    <form method="POST" id="del{{$value->id}}" action="{{ route('social.destroy', $value->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE')


                    </form>



                </td>
            </tr>




            @endforeach
         </tbody>
      </table>

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
