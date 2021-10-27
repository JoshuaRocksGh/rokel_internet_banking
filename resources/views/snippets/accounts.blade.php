@foreach (session()->get('customerAccounts') as $i => $account)
<option
    value="{{ $account->accountType . '~' . $account->accountDesc . '~' . $account->accountNumber . '~' . $account->currency . '~' . $account->availableBalance ."~" .$account->currencyCode . '~' . $account->accountMandate }}">
    {{ $account->accountDesc . ' || ' . $account->accountNumber . ' ||' . $account->currency . ' ' . $account->availableBalance }}
</option>
@endforeach