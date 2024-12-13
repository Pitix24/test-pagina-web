@foreach ($permission as $item)
<div class="form-check">
    <input class="form-check-input"name="permissionList[]"  type="checkbox"  id="flexCheckDefault{{$item->id}}">
  
    <label class="form-check-label" for="flexCheckDefault{{$item->id}}">
        {{ $item->name}}
    </label>
  </div>
  <br>
   
@endforeach
