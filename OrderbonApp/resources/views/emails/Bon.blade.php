@component('mail::message')
# NYBE

## PakBon
* Pakbonnummer:
* Klantennummer:
* BTW-Nummer:
* PakbonDatum:


@component('mail::table')
| Naam | Beschijving | Aantal |
| -------- | :-----------: | -----: |
| Col 2 is | Centered | $10 |
| Col 3 is | Right-Aligned | $20 |
@endcomponent
@component('mail::subcopy')
Mocht u de bijhorende factuur nog niet betaald hebben, dan willen wij u daar graag naar verwijzen.
@endcomponent

@component('mail::table')
| Handteking van levering: | Handtekening van ontvangst: |
| :-------- | -----------: |
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
