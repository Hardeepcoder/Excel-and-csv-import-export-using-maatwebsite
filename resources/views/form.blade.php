<form action="{{url('submit')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{CSRF_Token()}}">
<input type="file" name="file">

<input type="submit" value="upload">
</form>