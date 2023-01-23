<div class="logo">
    <h1><a href="/">NVN</a></h1>
    <div class="l-right">
        <select name="" id="lang-select">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
            <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>VI</option>
        </select>
        @if (Auth::check())
            <div class="login-group">
                <span>{{Auth::user()->username}}</span>
                <a class="l-acc" href="/logout">
                    <span>{{__('buttons.logout')}}</span>
                </a>
            </div>
        @else
            <a class="l-acc" href="/login">
                <i class="material-icons">account_circle</i>
                <span>{{__('buttons.login')}}</span>
            </a>
        @endif
    </div>
</div>

@push('js')
    <script>
        $(function(){
            $('#lang-select').on('change', function(){
                window.location.href = '{{route("changeLang")}}' + '?lang=' + $(this).val();
            })
        });
    </script>
@endpush
