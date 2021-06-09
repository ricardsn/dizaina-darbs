@extends('layout.mainlayout')
@section('content')
    <body class="antialiased university">
    @include('Header.header')
    @include('Banner.banner')
    <div class="university-img"></div>
    <div class="university-block">
        <div class="circle"></div>
        <p class="university-text">
            {{ __('Beidzot arī es pabeidzu vidusskolu un bija pienācis laiks pieteikties studijām. Es zināju, ka vienīgais ko gribu studēt ir datorzinātnes, tāpēc meklēju universitātes, kas to piedāvā. Izvēle man bija liela – RTU, LU, LLU vai TSI. Pieteicos uz visām, bet kā pirmo ieliku Latvijas Universitātes Datorikas fakultāti, jo man piedāvātā programma vislabāk patika, jo tā sevī iekļāva praksi, kas man likās ļoti svarīga.') }}
            <br/> <br/>
            {{ __('Iestāšanās bija smaga, jo diemžēl eksāmenos neieguvu tos spožākos rezultātus, tāpēc knapi tiku pie budžeta vietas, bet tiekot es sapratu, ka tā ir zīme, ka eju pa pareizo ceļu! Studējot universitātē es iepazinu daudz jaunus cilvēkus ar kuriem man sakrita intereses, ieguvu draugus un guvu priekšstatu par IT noviržu dažādību un varēju pieskarties un pamēģināt katru.') }}
            <br/> <br/>
            {{ __('Universitāti es uzskatu kā vietu, kur tu vari vairāk izprast sevi pamēģinot dažādos priekšmetus un saprast uz ko vēlies specializēties, nav galvenais būt gudram, bet galvenais ir vēlme mācīties un izprast to, kas tev patīk ar to varēs sasniegt to ko tu gribi. Pateicoties praksei es arī ieguvu savu sapņu darbu – programmētājs.') }}
        </p>
    </div>
    </body>
@endsection
<b></b>
