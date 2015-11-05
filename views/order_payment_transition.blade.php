<!-- app/views/user/create.blade.php -->
@extends('layouts.default')

@section('content')
<div class="container">


<form method="POST" action="https://pt01.mul-pay.jp/link/tshop00020339/Multi/Entry" id="hand_redirect">

    <input type="hidden" name="ShopID" value="{{ $toGMOdata['ShopID'] }}">
    <input type="hidden" name="OrderID" value="{{ $toGMOdata['OrderID'] }}">

    <input type="hidden" name="Amount" value="{{ $toGMOdata['Amount'] }}">
    
    <input type="hidden" name="DateTime" value="{{ $toGMOdata['DateTime'] }}" />
    <input type="hidden" name="ShopPassString" value="{{ $toGMOdata['ShopPassString'] }}" />
    <input type="hidden" name="RetURL" value="{{ $toGMOdata['RetURL'] }}" />
    <input type="hidden" name="CancelURL" value="{{ $toGMOdata['CancelURL'] }}" />
    <input type="hidden" name="UserInfo" value="{{ $toGMOdata['UserInfo'] }}" />
    <input type="hidden" name="RetryMax" value="{{ $toGMOdata['RetryMax'] }}" />
    <input type="hidden" name="SessionTimeout" value="{{ $toGMOdata['SessionTimeout'] }}" />
    <input type="hidden" name="UseCredit" value="{{ $toGMOdata['UseCredit'] }}" />
    <input type="hidden" name="JobCd" value="{{ $toGMOdata['JobCd'] }}" />
</form>


</div>


<script type="text/javascript">
    window.onload = function () {
        var f = document.forms["hand_redirect"];
        f.submit();
        return true;
    };
</script>

@stop
