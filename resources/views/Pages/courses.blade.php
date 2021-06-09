@extends('layout.mainlayout')
@section('content')
    <body class="antialiased courses">
    @include('Header.header')
    @include('Banner.banner')
    <div class="courses-img"></div>
    <div class="courses-block">
        <div class="circle"></div>
        <p class="courses-text">
            {{ __('Arī mani vecāki sāka ievērot manu aizrautību ar tehnoloģijām, tāpēc piedāvāja man apmaksāt programmēšanas kursus. Vienojoties ar tēvu, izdomāju sākt apmeklēt programmēšanas kursus – “Progmeistars”.') }}
            <br/> <br/>
            {{ __('Diemžēl visas latviešu grupas bija aizņemtas, tāpēc vajadzēja izvēlēties apmācību krievu valodā. Pats es māku runāt krievu valodā, bet nemācēju lasīt un sākumā tas man sastādīja daudz grūtību, es nespēju turēt līdzi saviem biedriem, jo nevarēja kārtīgi saprast uzdevuma nosacījumus. Ar laiku viss kļuva labāk, es iemācījos raiti lasīt krievu valodā un beidzot varēju piedalīties nodarbību diskusijās un pilnveidot savas programmēšanas zināšanas. Kursos es apguvu aizvēsturisko programmēšanas valodu – Pascal. Šī valoda bija piemērota iesācējiem, jo sintakse bija viegli saprotama.') }}
            <br/> <br/>
            {{ __('Pabeidzot šos kursus, es guvu plašu ieskatu programmēšana, problēmu risināšanā kā arī iemācījos lasīt krievu valodā. Es silti ieteiktu programmēšanas bāzi mācīties tieši kaut kādos kursos, jo tieši iemācoties kvalitatīvi bāzi cilvēks spēs attīstīt savas spējas patstāvīgi daudz kvalitatīvāk un ātrāk.') }}
        </p>
    </div>
    </body>
@endsection
<b></b>
