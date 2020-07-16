
<form action="{{ route('template.search') }}" class="d-flex mr-3" style="margin-left:910px;">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">
    </div>
    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
