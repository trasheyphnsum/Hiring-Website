<h3>Upload your file</h3>
<form action="file" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <br>
    <br>
    <button type="submit">Upload</button>
    <!--{{ @csrf_field() }} OR
    -->
    @csrf <!-- will authentcate the user -->
</form>