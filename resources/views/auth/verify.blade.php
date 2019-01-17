@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('驗證你的電子信箱帳號') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        {{ __('新的驗證連結已發送到您的電子信箱。') }}
                        </div>
                    @endif

                    {{ __('在繼續之前，請檢查您的電子信箱以獲取驗證鏈接。') }}
                    {{ __('如果您沒有收到該電子郵件') }}, <a href="{{ route('verification.resend') }}">{{ __('點擊這裡申請另一個') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
