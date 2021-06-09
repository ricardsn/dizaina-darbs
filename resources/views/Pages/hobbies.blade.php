@extends('layout.mainlayout')
@section('content')
    <body class="antialiased hobbies">
    @include('Header.header')
    @include('Banner.banner')
    <div class="hobbies-img"></div>
    <div class="hobbies-block">
        <div class="circle"></div>
        <p class="hobbies-text">
            {{ __('Kamēr vēl apmeklēju programmēšanas kursus, es vēl mācījos skolā un man bija pietiekami daudz brīvā laika. Tā kā skolā man bija klasesbiedri, kas arī mācījās programmēt ārpus skolas laika mēs bieži mēdzām savākties pie kāda un kopistiski kaut ko veidot, pārsvarā tās bija parastas programmas, kas mums atviegloja dzīvi, piemēram, ieslēdzot datoru atvērās mums vajadzīgās programmas, veidojām kalkulatoru, kas mums likās stipri ērtāks nekā tos ko lietojām, utml.') }}
            <br/> <br/>
            {{ __('Skolā arī mēdzām muļķot mūsu klasesbiedrus, izveidojot programmas, kuras izslēdz datoru informātikas kabinetā, ja to atver. Šīs programmas mēs pārsaucām un nomainījām to ikonas, kopējot populāro pārlūkprogrammu izskatu. Tādā veidā arī visi uzķērās, jo centās atvērt Google Chrome, bet tā vietā dators izslēdzās.') }}
            <br/> <br/>
            {{ __('Darot visas šādas muļķības, mēs daudz ko jaunu iemācījāmies, tad es arī sāku iepazīt Windows operētājsistēmas strādāšanas principus un iemācījos vairākas komandas, kas joprojām man ir noderīgas strādājot pie datora. Uzskatu, ka pat arī muļķīgas darbības dažreiz var novest pie pozitīva rezultāta.') }}
        </p>
    </div>
    </body>
@endsection
<b></b>
