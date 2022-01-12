
<script src="https://code.jquery.com/jquery-3.2.1.min.js"><script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Upload Files</h1>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <input type="file" id="file-1" name="file" multiple class="file" data-overwrite-initial="false"
                    data-min-file-count="1">
                </div>
                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#file-1").fileinput({
            theme:'fa',
            uploadUrl:"/image-submit",
            uploadExtraData:function () {
                return{
                    _token:$("input[name='_token']").val()
                };
            },
            allowedFileExtensions:['jpg', 'png', 'jpeg'],
            overwriteInitial:false,
            maxFilesize:10000,
            maxfileNum:500,
            slugCallback:function (filename) {
                return filename.replace('(','_').replace(']', '_');
            }
        });
    
</script>

@endsection