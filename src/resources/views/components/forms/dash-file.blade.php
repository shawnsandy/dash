<div class="row">
    <div class="form-group {{ $name }} file-input-box" style="">
        <p class="file-label text-center" style="">{{ $title }} <span class="file-upload-name"></span></p>
        <input type="file" name="{{ $name }}" id="{{ $name }}" class="file-upload" style=""/>
    </div>
    {!! Form::formError($name, $errors) !!}

</div>
@push('styles')
<style>
    .file-input-box {
        position: relative;
        font-size: 18px;
        width: 100%;
        min-height: 40px;
        padding: 10px

    }

    .file-label {
        display: block;
        height: 100%;
        height: inherit;
        margin: 0;
        padding: 10px;
    }

    .file-input-box [type=file] {
        min-height: 30px;
        float: left;
        opacity: 0;
        position: absolute;
        top: 0;
        padding: 10px;

    }
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
        $(".file-upload").each(function(){
            var file = $(this);

            $(file).change(function(e) {
                var upload_file = $(file).val();
                var file_name = upload_file.replace("C:\\fakepath\\", '');
                console.log("changed" + ' ' + upload_file + ' '+ file_name);
                $(".file-upload-name").html(file_name);
            });

        });
    });
</script>
@endpush
