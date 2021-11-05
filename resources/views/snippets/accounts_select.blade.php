@foreach (session()->get('customerAccounts') as $i => $account)
<option data-content="<div class='account-card row'>
    <div class='col-2 text-center'><div class='account-icon mx-auto'><span>{{ $account->accountDesc[0] }}</span></div></div>
    <div class='col-10 align-self-center'>
        <div class='font-16 font-weight-bold' style='line-height:1.2;'>{{ $account->accountDesc }}</div>
        <div class='d-flex'><div class='mr-auto font-14'>{{ $account->accountNumber}}</div>
        <div class='font-14'><span class='mr-1'>{{ $account->currency}}</span> <span>{{number_format($account->availableBalance,2) }}</span></div>
    </div></div>
</div>"
    value="{{ $account->accountType . '~' . $account->accountDesc . '~' . $account->accountNumber . '~' . $account->currency . '~' . $account->availableBalance ."~" .$account->currencyCode . '~' . $account->accountMandate }}">
    {{ $account->accountDesc . ' || ' . $account->accountNumber . ' || ' . $account->currency . ' ' . $account->availableBalance }}
</option>
@endforeach