                   <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                        <form class="example" action="{{ route('template.search') }}">
                        <input type="text" placeholder="Search.." name="q" value="{{ request()->q ?? '' }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </div>
                   </div>