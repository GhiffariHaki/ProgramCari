@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Upload Files</h1>
                </div>
                <div class="card-body">
                    <label for="input-folder-2">Upload All Files From Folder</label>
                    <div class="file-loading">
                        <input id="input-folder-2" name="input-folder-2[]" type="file" multiple webkitdirectory accept="image/*">
                    <div id="errorBlock" class="help-block"></div>
                </div> 
                
            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
    $("#input-folder-2").fileinput({
        browseLabel: 'Select Folder...',
        previewFileIcon: '<i class="fas fa-file"></i>',
        allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
        previewFileIconSettings: {
            'doc': '<i class="fas fa-file-word text-primary"></i>',
            'xls': '<i class="fas fa-file-excel text-success"></i>',
            'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
            'jpg': '<i class="fas fa-file-image text-warning"></i>',
            'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
            'zip': '<i class="fas fa-file-archive text-muted"></i>',
            'htm': '<i class="fas fa-file-code text-info"></i>',
            'txt': '<i class="fas fa-file-alt text-info"></i>',
            'mov': '<i class="fas fa-file-video text-warning"></i>',
            'mp3': '<i class="fas fa-file-audio text-warning"></i>',
        },
        previewFileExtSettings: {
            'doc': function(ext) {
                return ext.match(/(doc|docx)$/i);
            },
            'xls': function(ext) {
                return ext.match(/(xls|xlsx)$/i);
            },
            'ppt': function(ext) {
                return ext.match(/(ppt|pptx)$/i);
            },
            'jpg': function(ext) {
                return ext.match(/(jp?g|png|gif|bmp)$/i);
            },
            'zip': function(ext) {
                return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
            },
            'htm': function(ext) {
                return ext.match(/(php|js|css|htm|html)$/i);
            },
            'txt': function(ext) {
                return ext.match(/(txt|ini|md)$/i);
            },
            'mov': function(ext) {
                return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
            },
            'mp3': function(ext) {
                return ext.match(/(mp3|wav)$/i);
            },
        }
    });
});
</script>
@endsection