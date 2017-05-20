<div class="form-group">
    <div class="clearfix">
        <label for="{{ $name }}">{{ $title }}</label>
        <div class="{{ $name }} file-input-box" style="">

            <p class="file-label small" style="">UPLOAD FILE : <span class="file-upload-name"></span></p>
            <input type="file" name="{{ $name }}" id="{{ $name }}" class="file-upload" style=""/>
        </div>
        {!! Form::formError($name, $errors) !!}
    </div>
</div>

@push('styles')
<style>
    .file-input-box {
        position: relative;
        min-height: 40px;
        padding: 10px;
        background-color: lightgray;

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
        bottom: 0;
        padding: 10px;

    }
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function () {
        $(".file-upload").each(function () {
            var file = $(this);

            $(file).change(function (e) {
                var upload_file = $(file).val();
                var file_name = upload_file.replace("C:\\fakepath\\", '');
                console.log("changed" + ' ' + upload_file + ' ' + file_name);
                $(".file-upload-name").html(file_name);
            });

        });
    });
</script>
@endpush
