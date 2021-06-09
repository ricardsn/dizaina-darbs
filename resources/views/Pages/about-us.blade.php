@extends('layout.mainlayout')
@section('content')
    <body class="antialiased about-us">
    @include('Header.header')
    @include('Banner.banner')
    <div class="about-us-me"></div>
    <div class="about-us-block">
        <div class="circle"></div>
        <p class="about-us-text">
            {{ __('Sveiki!') }}
            <br /> <br />
            {{ __('Mani sauc Ričards Ņedosvitnijs. Es esmu Latvijas Universitātes, Datorikas fakultātes 3. kursa students. ŠĪ vietne tika izstrādāta kursa “Tīmekļa dizaina pamati” ietvaros un tās nolūks ir sniegt vietnes viesiem saprast kā es savas dzīves gaitā kļuvu par Latvijas Universitātes, Datorikas fakultātes studentu, ar cerību kādu iedvesmot sekot savām vēlmēm un sasniegt to ko vienmēr ir vēlējies.') }}            <br /> <br />
            {{ __('Vietne sastāv no galvenās lapas un lapām, kas satur dzīves posmus, kas, manuprāt, vislabāk spēs reprezentēt manu garo ceļu līdz LU.  Vietne sastāv no 7 daļām – ievads un 6 galvenajiem dzīves posmiem, kas noveda pie šāda rezultāta. Pirms vietne tika izstrādāta, tai tika izveidota skice ,izmantojot lietotni – Figma. Kā mājaslapas ietvaru izmantoju – Laravel kopā ar JavaScript un SCSS tehnoloģijām.') }}
            <br /> <br />
            {{ __('Mājaslapu izstrādi es apguvu universitātē, bet joprojām ir tāls ceļš sevis pilnveidošanā un savu zināšanu uzlabošanā. Tiem, kam tiešām interesē ,šī vietnes satur, atstāju beigās savu svarīgāko dzīves atziņu, ko apguvu ejot šo ceļu, tāpēc aicinu pārskatīt visu līdz galam.') }}        </p>
    </div>
    </body>
@endsection
<b></b>
