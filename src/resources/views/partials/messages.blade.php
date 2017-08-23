@if (count($errors) > 0)

    <div>

            <p class="alert alert-danger alert-dismissible">
                Opps! There was an error processing your submission, please review the form and submit again.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </p>

    </div>

@endif

@if(Session::has('error'))
    <p class="alert alert-danger alert-dismissible">{{ Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>
@endif

@if(Session::has('success'))
    <p class="alert alert-success alert-dismissible">{{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>
@endif

@if(Session::has('warning'))
    <p class="alert alert-warning alert-dismissible">{{ Session::get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>
@endif

@if(Session::has('info'))
    <p class="alert alert-info alert-dismissible">{{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>
@endif
