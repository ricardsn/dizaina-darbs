@extends('layout.mainlayout')
@section('content')
    <body class="antialiased games">
    @include('Header.header')
    @include('Banner.banner')
    <div class="games-img"></div>
    <div class="games-block">
        <div class="circle"></div>
        <p class="games-text">
            {{ __('Datorspēles ļoti ietekmēja manu dzīvi, jo pateicoties tām man izdevās iegūt draugus, iemācīties angļu valodu un pats galvenais apgūt tehnoloģijas un gūt priekšstatu ko ar tām var darīt. Katra datorspēle manās acīs bija kā kāda jauna pasaule, kurā es varēju būt kāds vien es vēlējos.') }}
            <br/> <br/>
            {{ __('Pirmā spēle, kuru es spēlēju un joprojām dažreiz atveru ir “RuneScape”. Kāpēc tieši šī? Jo tajā tu savu varoni vari attīstīt kā gribi, vari mainīt tā izskatu, vari trenēt dažādas iemaņas utt. Šeit es sāku saskatīt brīvību, realitātē cilvēki ir spiesti darboties un uzvesties pēc standartiem, piemēram, uzvesties un darīt to kā vecāki to vēlās, protams, tā arī vajadzētu būt, jo parasti vecāki vēlas, lai to bērns dzīvotu labāku dzīvi nekā viņi, kā arī būtu pieņemti sabiedrībā, tāpēc uzskatu, ka bērniem nav jāatņem iespēja spēlēt datorspēles, jo tieši tur bērns var iegūt pieredzi un brīvību, ko nevar iegūt reālā dzīvē.') }}
            <br/> <br/>
            {{ __('Uzskatu, ka spēlējot datorspēles normas robežās bērns var gūt daudz priekšrocības – socializācijā, tehnoloģiju un valodu apgūšanā utt.') }}
        </p>
    </div>
    </body>
@endsection
<b></b>
