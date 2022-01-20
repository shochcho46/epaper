 @csrf


 <input placeholder="Double click to Selected date" type="text" id="date-picker-example"  name="searchdate" class="form-control form-control-sm ml-3 w-75  datepicker" required>


@if($errors->has('searchdate'))
<div class="error text-danger m-2">{{ $errors->first('searchdate') }}</div>
@endif



 <button class="btn btn-outline-primary btn-rounded btn-sm my-0" type="submit">Search</button>




